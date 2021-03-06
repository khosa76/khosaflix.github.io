<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('rewardedadmobid',null,array("label"=>"AdMob Rewarded ID "));
        $builder->add('banneradmobid',null,array("label"=>"AdMob Banner ID "));
        $builder->add('bannertype',ChoiceType::class, array(
                "label"=>"Banner Ad Type",
                'choices' => array(
                    "Disable Ad Banner" => "FALSE",
                    "Google AdMob Ad Banner" => "ADMOB",
                )));
        $builder->add('nativeadmobid',null,array("label"=>"AdMob Native ID "));
        $builder->add('nativetype',ChoiceType::class, array(
                "label"=>"Native Ad Type",
                'choices' => array(
                    "Disable Ad Native" => "FALSE",
                     "Google AdMob Ad Native"=> "ADMOB",
                )));
        $builder->add('nativeitem',null,array("label"=>"Native Ad Type "));
        $builder->add('interstitialadmobid',null,array("label"=>"AdMob Interstitial ID "));
        $builder->add('interstitialtype',ChoiceType::class, array(
                "label"=>"Interstitial Ad Type",
                'choices' => array(
                    "Disable Ad Interstitial"=> "FALSE",
                     "Google AdMob Ad Interstitial"=> "ADMOB",
                )));    
        $builder->add('interstitialclick',null,array("label"=>"Interstitial Ad Type "));

        $builder->add('save', SubmitType::class,array("label"=>"SAVE"));
    }
    public function getName()
    {
        return 'Ads';
    }
}
?>