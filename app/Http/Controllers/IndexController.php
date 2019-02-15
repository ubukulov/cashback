<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    # Admitad
    protected $clientId = "d9cd15eaac63b4a47ef568dd268717";
    protected $clientSecret = "d850e7fae59786b948dc1c777d3ba3";
    protected $website_admotionz_id = 525788;
    protected $website_likemoney_id = 479947;

    public function welcome()
    {
        $api = new \Admitad\Api\Api();
        $scope = 'advcampaigns_for_website';
        $authorizeResult = $api->authorizeClient($this->clientId, $this->clientSecret, $scope)->getArrayResult();
        $api = new \Admitad\Api\Api($authorizeResult['access_token']);
        $data1 = $api->get("/advcampaigns/website/{$this->website_admotionz_id}/", array(
            'connection_status' => 'active', 'limit' => 4
        ))->getArrayResult();
        $data2 = $api->get("/advcampaigns/website/{$this->website_likemoney_id}/", array(
            'connection_status' => 'active', 'limit' => 4
        ))->getArrayResult();
        $ad_offers = array_merge($data1,$data2);
        dd($ad_offers);
        $offers = array();
        foreach($ad_offers['results'] as $key=>$value){
            foreach($value['regions'] as $k=>$v){
                if($v['region'] == 'KZ'){
                    $offers['results'][] = $value;
                }
            }
        }
        return view('welcome', compact('offers'));
    }

    public function catalog($name)
    {
        return view('catalog', compact('name'));
    }
}
