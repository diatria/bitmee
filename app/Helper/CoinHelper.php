<?php

namespace App\Helper;

class CoinHelper
{
    public static function Info($cointype)
    {
    	if ($cointype == 'btcidr') {
    		$info = [
    			'name' => 'Bitcoin',
    			'label' => 'BTC/IDR',
    			'type' => 'BTCIDR',
    			'coin' => 'BTC',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'bchidr') {
    		$info = [
    			'name' => 'Bitcoin Cash',
    			'label' => 'BCH/IDR',
    			'type' => 'BCHIDR',
    			'coin' => 'BCH',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'btgidr') {
    		$info = [
    			'name' => 'Bitcoin Gold',
    			'label' => 'BTG/IDR',
    			'type' => 'BTGIDR',
    			'coin' => 'BTG',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'ethidr') {
    		$info = [
    			'name' => 'Ethereum',
    			'label' => 'ETH/IDR',
    			'type' => 'ETHIDR',
    			'coin' => 'ETH',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'etcidr') {
    		$info = [
    			'name' => 'Ethereum Classic',
    			'label' => 'ETC/IDR',
    			'type' => 'ETCIDR',
    			'coin' => 'ETC',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'ignisidr') {
    		$info = [
    			'name' => 'Ignis',
    			'label' => 'IGNIS/IDR',
    			'type' => 'IGNISIDR',
    			'coin' => 'IGNIS',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'ltcidr') {
    		$info = [
    			'name' => 'Litecoin ',
    			'label' => 'LTC/IDR',
    			'type' => 'LTCIDR',
    			'coin' => 'LTC',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'nxtidr') {
    		$info = [
    			'name' => 'NXT',
    			'label' => 'NXT/IDR',
    			'type' => 'NXTIDR',
    			'coin' => 'NXT',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'wavesidr') {
    		$info = [
    			'name' => 'WAVES',
    			'label' => 'WAVES/IDR',
    			'type' => 'WAVESIDR',
    			'coin' => 'WAVES',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'stridr') {
    		$info = [
    			'name' => 'Stellar Lumens',
    			'label' => 'STR/IDR',
    			'type' => 'STRIDR',
    			'coin' => 'STR',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'xrpidr') {
    		$info = [
    			'name' => 'Ripple',
    			'label' => 'XRP/IDR',
    			'type' => 'XRPIDR',
    			'coin' => 'XRP',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} elseif ($cointype == 'xzcidr') {
    		$info = [
    			'name' => 'Zcoin',
    			'label' => 'XZC/IDR',
    			'type' => 'XZCIDR',
    			'coin' => 'XZC',
    			'curr' => 'IDR',
    			'unit' => 'Rp',
    			'available' => true
    		];
    	} else {
    		$info = [
    			'name' => '',
    			'label' => '',
    			'type' => '',
    			'coin' => '',
    			'curr' => '',
    			'unit' => '',
    			'available' => false
    		];
    	}
    	return $info;

    }
}
