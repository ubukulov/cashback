<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Action;
use App\Models\Category;
use App\Models\Region;
use App\Models\Shop;
use App\Models\ShopCategory;
use App\Models\ShopRegion;
use App\Models\Traffic;

class Admitad extends Command
{
    protected $clientId = "d9cd15eaac63b4a47ef568dd268717";
    protected $clientSecret = "d850e7fae59786b948dc1c777d3ba3";
    protected $website_admotionz_id = 525788;
    protected $website_likemoney_id = 479947;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admitad:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $api = new \Admitad\Api\Api();
        $scope = 'advcampaigns_for_website';
        $authorizeResult = $api->authorizeClient($this->clientId, $this->clientSecret, $scope)->getArrayResult();
        $api = new \Admitad\Api\Api($authorizeResult['access_token']);
        $ad_offers = $api->get("/advcampaigns/website/{$this->website_admotionz_id}/", array(
            'connection_status' => 'active', 'limit' => 1000
        ))->getArrayResult();
        $offers = array();
        foreach($ad_offers['results'] as $key=>$value){
            foreach($value['regions'] as $k=>$v){
                if($v['region'] == 'KZ'){
                    $offers['results'][] = $value;
                }
            }
        }

        foreach ($offers['results'] as $offer) {
            $offer['shop_id'] = $offer['id'];
            $offer['title'] = $offer['name'];
            if (Shop::exists($offer['id'])) {
                \DB::transaction(function () use ($offer) {
                    $shop = Shop::create($offer);

                    if (isset($offer['actions'])) {
                        foreach($offer['actions'] as $action) {
                            if (Action::exists($shop->id, $action['type'])) {
                                Action::create([
                                    'id' => $action['id'], 'shop_id' => $shop->id, 'title' => $action['name'], 'type' => $action['type'],
                                    'payment_size' => $action['payment_size'], 'hold_time' => $action['hold_time']
                                ]);
                            }
                        }
                        $this->info("Actions updated");
                    }

                    if (isset($offer['regions'])) {
                        foreach($offer['regions'] as $region) {
                            if (Region::exists($region['region'])) {
                                $rg = Region::create([
                                    'title' => $region['region']
                                ]);
                                if (ShopRegion::exists($shop->id, $rg->id)) {
                                    ShopRegion::create([
                                        'shop_id' => $shop->id, 'region_id' => $rg->id
                                    ]);
                                }
                            }
                        }
                        $this->info("Regions updated");
                    }

                    if (isset($offer['traffics'])) {
                        foreach($offer['traffics'] as $traffic) {
                            if (Traffic::exists($shop->id, $traffic['name'])) {
                                Traffic::create([
                                    'shop_id' => $shop->id, 'title' => $traffic['name'], 'enabled' => $traffic['enabled']
                                ]);
                            }
                        }
                        $this->info("Traffics updated");
                    }

                    if (isset($offer['categories'])) {
                        foreach($offer['categories'] as $category) {
                            if (Category::exists($category['name'])) {
                                $parent_id = (is_null($category['parent'])) ? 0 : $category['parent']['id'];
                                $cat = Category::create([
                                    'id' => $category['id'],'title' => $category['name'], 'parent_id' => $parent_id
                                ]);
                                if (ShopCategory::exists($shop->id, $cat->id)) {
                                    ShopCategory::create([
                                        'shop_id' => $shop->id, 'category_id' => $cat->id
                                    ]);
                                }
                            }
                        }
                        $this->info("Categories updated");
                    }
                });
            }
        }

        $this->info("Shops updated");
    }
}
