<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
//    $disp_num = $_POST['disp_num'];
//    $pre_num = $_POST['pre_num'];
//    $input_num = $_POST['input_num'];
//    $ope = $_POST['ope'];
//    $button = $_POST['button'];
//    $pre_button = $_POST['pre_button'];
//
//    if (isNumBtn($button) || empty($button)) {
//
//    if (isOpeBtn($pre_button)) {
//
//    $pre_num = $disp_num;
//
//    if (preg_match('/\./', $button)) {
//
//    $disp_num = '0.';
//
//    } else {
//
//        $disp_num = $button;
//    }
//
//    } else {
//
//        $disp_num = $disp_num . $button;
//
//    }
//
//    $input_num = $disp_num;
//
//    } else {
//        switch ($button) {
//            case 'C':
//                $disp_num = '';
//                $pre_num = '';
//                $input_num = '';
//                break;
//            case '+/-':
//                $disp_num = -$disp_num;
//                break;
//            case '％':
//                $disp_num = $disp_num / 100;
//                break;
//            default:
//                if (!empty($pre_num) && (preg_match('/＝/', $button) || (isOpeBtn($button) && isNumBtn($pre_button)))) {
//                    switch ($ope) {
//                        case '＋':
//                            $disp_num = $pre_num + $disp_num;
//                            break;
//                        case '−':
//                            $disp_num = $pre_num - $disp_num;
//                            break;
//                        case '✕':
//                            $disp_num = $pre_num * $disp_num;
//                            break;
//                        case '÷':
//                            $disp_num = $pre_num / $disp_num;
//                            break;
//                        default:
//                            break;
//                    }
//                }
//                $pre_num = $input_num;
//                $ope = $button == '＝' ? $ope : $button;
//                break;
        }


    }

}
