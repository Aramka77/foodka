<?php

class AramBrotherComponent extends \CBitrixComponent{

    private function includeModule(){
        \Bitrix\Main\Loader::includeModule('iblock');
    }

    private function prepareResult(){
        $this->arResult['element'] = \Bitrix\Iblock\Elements\ElementBannerAreaTable::getRow([
            'select' => ['ID', 'NAME'],
            'filter' => [
                'ACTIVE' => 'Y'
            ],
            "cache" => ["ttl"=>3600, "cache_joins"=>true],
        ]);

    }
    public function executeComponent()
    {

        if($this->startResultCache())//startResultCache используется не для кеширования html, а для кеширования arResult
        {
            $this->includeModule();
            $this->prepareResult();
            $this->includeComponentTemplate();
        }

    }


}