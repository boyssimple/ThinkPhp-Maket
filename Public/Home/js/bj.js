//悦享家报价
function hehPrice(area,wsj,cityid) {
    //套内80-100*1350  套内100-140*1450  套内140以上*1700
    var sum = 0;
    if(area<=80){
        sum = 80*1350;
    }else if(area > 80 && area <= 100){
        sum = area * 1350;
    }else if(area > 100 && area <= 140){
        sum = area * 1450;
    }else if(area > 140){
        sum = area * 1700;
    }
    return sum;
}
//南充悦享家报价
function yxjPrice(area,wsj,cityid) {
    var sum = 0;
    var area = Number(area);
    var wsj = parseInt(wsj);
    console.log(area,wsj);
    switch (cityid) {
        case '3400' :
            if(area<=60){
                sum = 91587;
            }else if(area > 60 && area <= 79){
                sum = (area-60) * 945 + 91587;
            }else if(area > 79 && area <= 99){
                sum = (area-79) * 845 + 109542;
            }else if(area > 99 && area <= 119){
                sum = (area-99) * 875 + 126442;
            }else if(area > 119 && area <= 139){
                sum = (area-119) * 915 + 143942;
            }else if(area > 139 && area <= 170){
                sum = (area-139) * 905 + 162242;
            }else if(area > 170) {
                sum = (area-170) * 910 + 190297;
            }
            if(wsj > 1) {
                sum = sum + 16420*wsj;
            }
            return parseInt(sum*1.1);
            break;
        default :
            alert("该城市没有悦享家产品报价");
    }

}

//尊享家报价
function budgetPrice(area,wsj,tx,cityid) {
    var mj = Number(area);
    var sum = 0;
    var wsj = parseInt(wsj);
    switch (cityid) {
        case '3399':
            //成都
            if (tx == 588) {
                /*mj = mj >= 60 ? mj: 60;
                 if (mj <= 79) {
                 sum = (mj - 60) * 885 + 117540;
                 } else if (mj <= 99) {
                 sum = (mj - 80) * 685 + 135040;
                 } else if (mj <= 109) {
                 sum = (mj - 100) * 885 + 148940;
                 } else if (mj <= 119) {
                 sum = (mj - 110) * 875 + 157780;
                 } else if (mj <= 149) {
                 sum = (mj - 120) * 685 + 166350;
                 } else if (mj <= 170) {
                 sum = (mj - 150) * 675 + 186890;
                 }else if (mj > 170) {
                 sum = mj*1100;
                 }*/
                sum=2000*mj;
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj=mj<80?80:mj;
                if(wsj == 1) {
                    sum = 1350*mj;
                }
                if(wsj == 2) {
                    if(mj>=80 && mj<=89) {
                        sum = 1722*mj;
                    }
                    if(mj>=90 && mj<=120) {
                        sum = 1652*mj;
                    }
                    if(mj>=121 && mj<=170) {
                        sum = 1562*mj;
                    }
                }
                if(wsj == 3) {
                    if(mj>=80 && mj<=89) {
                        sum = 2032*mj;
                    }
                    if(mj>=90 && mj<=120) {
                        sum = 2008*mj;
                    }
                    if(mj>=121) {
                        sum = 2128*mj;
                    }
                }
            }

            break;
        case '3400':
            //南充
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*50);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 100) {
                    sum = (mj - 80) * 874 + 114063;
                } else if (mj <= 151) {
                    sum = (mj - 101) * 716 + 131839;
                } else if (mj <= 170) {
                    sum = (mj - 152) * 737 + 168376;
                } else if (mj > 170) {
                    sum = (mj - 170) * 842 + 181642;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 21263 + sum;
                }
            }
            sum = sum * 1.1;
            break;
        case '3402':
            //武汉
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*100);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 99) {
                    sum = (mj - 80) * 800 + 110760;
                } else if (mj <= 120) {
                    sum = (mj - 100) * 770 + 126730;
                } else if (mj <= 150) {
                    sum = (mj - 121) * 780 + 142910;
                } else if (mj > 150) {
                    sum = (mj - 150) * 800 + 165530;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 21560 + sum;
                }
            }
            sum = sum * 1.1;
            break;
        case '3404':
            //长沙
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }else if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj<80?80:mj;
                if(mj<=99) {
                    sum = 109120+(mj-80)*800;
                } else if(mj>=100 && mj<=118) {
                    sum = 125120+(mj-100)*700;
                } else if(mj == 119) {
                    sum = 138420;
                } else if(mj>=120) {
                    sum = 139140+(mj-120)*650;
                }
                if(wsj > 1) {
                    sum = sum+(wsj-1)*21380;
                }
            }
            sum = sum * 1.1369;
            break;
        case '3401':
            //贵阳
            pyRegisterCvt();
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                sum = (mj * 1350 );
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 12000 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 89) {
                    sum = (mj - 80) * 950 + 114380;
                } else if (mj <= 100) {
                    sum = (mj - 90) * 1030 + 123960;
                } else if (mj <= 151) {
                    sum = (mj - 101) * 840 + 135100;
                } else if (mj <= 170) {
                    sum = (mj - 152) * 1000 + 178100;
                } else if (mj > 170) {
                    sum = (mj - 170) * 950 + 196100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 20460 + sum;
                }
            }
            sum = sum + (mj * 150);
            break;
        case '3594':
            //合肥
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }else if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            }else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if(mj<100){sum=(mj-80)*800+101280;}
                else if(mj<=120){sum=(mj-100)*750+117230;}
                else if(mj<=170){sum=(mj-120)*570+132230;}
                else if(mj>170){sum=(mj-170)*800+160730;}
                //卫生间计算方式
                if(wsj>1){
                    sum=(wsj-1)*22150+sum;
                }
            }
            sum=sum*1.1;
            break;

        case '3471':
            //昆明
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }

            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;

                if(mj==80){
                    sum=115929;
                }else{
                    sum=(105390+(mj-80)*855+19600*(wsj-1))*1.1
                }

            }
            //sum = sum * 1.1;
            break;
        case '3403':
            //西安
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
                sum = sum * 1.05;
            } else if (tx == 888) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 78) {
                    sum = (mj - 60) * 1350 + 177450;
                } else if (mj <= 88) {
                    sum = (mj - 79) * 1150 + 203100;
                } else if (mj <= 98) {
                    sum = (mj - 89) * 1160 + 214600;
                } else if (mj <= 118) {
                    sum = (mj - 99) * 1360 + 226200;
                } else if (mj <= 169) {
                    sum = (mj - 119) * 1180 + 253400;
                }else if (mj >= 170) {
                    sum = mj*1780;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 41800 + sum;
                }
            }
            sum = sum * 1.1;
            break;

        case '3775':
            //重庆
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*50);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 101) {
                    sum = (mj - 80) * 890 + 110205;
                } else if (mj <= 131) {
                    sum = (mj - 102) * 814 + 129707;
                } else if (mj <= 153) {
                    sum = (mj - 132) * 738 + 154062;
                } else if (mj <= 170) {
                    sum = (mj - 154) * 700 + 170259;
                } else if (mj > 170) {
                    sum = (mj - 170) * 980 + 181464;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 19800 + sum;
                }
            }
            sum = sum * 1.1;
            break;
        case '3774':
            //南京，和重庆计算方式相同 待定
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*100);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 101) {
                    sum = (mj - 80) * 890 + 110205;
                } else if (mj <= 131) {
                    sum = (mj - 102) * 814 + 129707;
                } else if (mj <= 153) {
                    sum = (mj - 132) * 738 + 154062;
                } else if (mj <= 170) {
                    sum = (mj - 154) * 700 + 170259;
                } else if (mj > 170) {
                    sum = (mj - 170) * 980 + 181464;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 19800 + sum;
                }
            }
            //sum = sum * 1.1;
            break;
        case '3792':
            //石家庄，和西安计算方式相同 待定
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }else if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                sum=mj*1400;
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13000 + sum;
                }
            }
            sum = sum * 1.15;
            break;
        case '3557':
            //北京

            if (tx == 588) {
                mj = mj >= 50 ? mj: 50;
                if (mj <= 58) {
                    sum = (mj - 50) * 1368 + 144752;
                } else if(mj == 59){
                    sum = 156996;
                }else if (mj <= 79) {
                    sum = (mj - 60) * 1260 + 158250;
                } else if (mj <= 89) {
                    sum = (mj - 80) * 1275 + 183462;
                } else if (mj <= 99) {
                    sum = (mj - 90) * 1268 + 196246;
                } else if (mj <= 119) {
                    sum = (mj - 100) * 1138 + 208799;
                } else if (mj <= 170) {
                    sum = (mj - 120) * 1315 + 231748;
                }
                //sum=sum+(mj*100);
                if (mj > 170) {
                    sum = mj*1300;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 19051 + sum;
                }

            } else if (tx == 888) {
                mj=mj<50?50:mj;
                if(mj<=79){
                    sum=101053+(mj-50)*1218;
                }else if(mj<=119){
                    sum=137487+(mj-80)*1139;
                }else if(mj<=170){
                    sum=183135+(mj-120)*1220;
                }else if(mj>170) {
                    sum=244231+(mj-170)*1220;
                }
                if (wsj > 1) {
                    sum = (wsj - 1) * 19051 + sum;
                }
            }
            //sum = sum * 1;
            break;
        case '3798':
            //天津
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                //sum=sum+(mj*50);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 15100 + sum;
                }
                sum = sum*1.15;
            } else if (tx == 888) {
                mj=mj<70?70:mj;
                if(mj<=88){
                    sum=185420+(mj-70)*1380;
                }else if(mj>=89 && mj<=98){
                    sum=211640+(mj-89)*1260;
                }else if(mj>=99 && mj<=108){
                    sum=224240+(mj-99)*1270;
                }else if(mj>=109 && mj<=118) {
                    sum=236940+(mj-109)*1180;
                }else if(mj>=119 && mj<=130) {
                    sum=248740+(mj-119)*1170;
                }else if(mj>130) {
                    sum=215260+(mj-130)*1630;
                }
                if (wsj > 1) {
                    sum = (wsj - 1) * 42400 + sum;
                }
            }
            sum=sum*1.15;
            break;
        case '3801':
            //济南
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*50);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 99) {
                    sum = (mj - 80) * 1528 + 264660;
                }else if (mj <= 119) {
                    sum = (mj - 100) * 1488 + 295280;
                }else if (mj <= 150) {
                    sum = (mj - 120) * 1678 + 325140;
                } else if (mj > 150) {
                    sum = (mj - 150) * 1540 + 375650;
                }

                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 24700 + sum;
                }
            }
            sum = sum * 1.1;
            break;

        case '3795':
            //济宁
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }else if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 100) {
                    sum = (mj - 80) * 820 + 109990;
                }else if (mj <= 150) {
                    sum = (mj - 101) * 740 + 127130;
                } else if (mj > 150) {
                    sum = (mj - 150) * 820 + 163390;
                }

                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 19800 + sum;
                }
            }
            sum = sum * 1.1;
            break;
        case '3802':
            //广州
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*200);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 81 ? mj: 81;
                sum = (mj - 81) * 2074 + 340320;
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 28544 + sum;
                }
            }
            break;
        case '3829':
            //大连
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 70) {
                    sum = (mj - 60) * 1020 + 138780;
                } else if (mj <= 79) {
                    sum = (mj - 70) * 1170 + 150150;
                } else if (mj ==80) {
                    sum =160660;
                } else if (mj <= 99) {
                    sum = (mj - 81) * 990 + 161650;
                }else if (mj ==100) {
                    sum =180590;
                } else if (mj <= 120) {
                    sum = (mj - 101) * 1100 + 181690;
                } else if (mj <= 140) {
                    sum = (mj - 121) * 1300 + 203890;
                } else if (mj > 140) {
                    sum = (mj - 140) * 1300 + 203890;
                }

                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 29600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 88) {
                    sum = (mj - 80) * 1630 + 311220;
                } else if (mj <= 98) {
                    sum = (mj - 89) * 1570 + 325890;
                } else if (mj <= 118) {
                    sum = (mj - 99) * 1610 + 341590;
                } else if (mj <= 140) {
                    sum = (mj - 119) * 1800 + 373790;
                } else if (mj > 140) {
                    sum = (mj - 140) * 1800 + 411590;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 49200 + sum;
                }
            }
            break;
        case '3799':
            //苏州
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 78) {
                    sum = (mj - 60) * 970 + 128510;
                } else if (mj >= 79) {
                    sum = (mj - 79) * 820 + 146900;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13800 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                sum = (mj - 80) * 1510 + 289190;
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 42900 + sum;
                }
            }
            break;
        case '3838':
            //福州
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                sum = 138540 + (mj - 60) * 1150 + 15100 * (wsj - 1);
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                sum = 198450 + (mj - 60) * 1650+ 41800 * (wsj - 1);
            }
            break;
        case '3833':
            //青岛
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 78) {
                    sum = (mj - 60) * 920 + 130780;
                }else if (mj <= 88) {
                    sum = (mj - 79) * 980 + 148260;
                }else if (mj <= 98) {
                    sum = (mj - 89) * 970 + 158060;
                }else if(mj==99){
                    sum=167760;
                }else if(mj==100){
                    sum=168570;
                }else if (mj <= 118) {
                    sum = (mj - 101) * 830 + 171400;
                }else if (mj <= 128) {
                    sum = (mj - 119) * 930 + 186340;
                }else if (mj <= 138) {
                    sum = (mj - 129) * 940 + 195640;
                }else if (mj <= 168) {
                    sum = (mj - 139) * 920 + 205040;
                }else if(mj==169){
                    sum=232640;
                }else if(mj==170){
                    sum=236960;
                }else if (mj > 170) {
                    sum = (mj - 170) * 1140 + 236960;
                }

                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 14300 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 80 ? mj: 80;
                if (mj <= 98) {
                    sum = (mj - 80) * 1500 + 301100;
                }else if(mj==99){
                    sum=329600;
                }else if(mj==100){
                    sum=330910;
                }else if (mj <= 108) {
                    sum = (mj - 101) * 1330 + 334240;
                }else if (mj <= 118) {
                    sum = (mj - 109) * 1350 + 344880;
                }else if (mj <= 128) {
                    sum = (mj - 119) * 1420 + 358380;
                }else if (mj <= 168) {
                    sum = (mj - 139) * 1440 + 387180;
                }else if (mj <= 169) {
                    sum = 430380;
                }else if (mj <= 170) {
                    sum = 435220;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 46800 + sum;
                }
            }
            break;
        case '3837':
            //沈阳
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*50);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                if(wsj<3) {
                    mj=mj<80?80:mj;
                    if(mj<=98){
                        sum=302220+(mj-80)*1360;
                    }else if(mj>=99 && mj<=103){
                        sum=328060+(mj-99)*1640;
                    }else if(mj>=104 && mj<=108){
                        sum=336260+(mj-104)*1630;
                    }else if(mj>=109 && mj<=113){
                        sum=344410+(mj-109)*1620;
                    }else if(mj>=114 && mj<=118){
                        sum=352510+(mj-114)*1630;
                    }else if(mj>=119 && mj<=138){
                        sum=360660+(mj-119)*1690;
                    }else if(mj>=139 && mj<=144){
                        sum=394460+(mj-139)*1370;
                    }else if(mj>=145 && mj<=170){
                        sum=402680+(mj-145)*1350;
                    }else if(mj>170) {
                        sum=436430+(mj-170)*1800;
                    }
                    if (wsj > 1) {
                        sum = (wsj - 1) * 47300 + sum;
                    }
                } else {
                    mj=mj<100?100:mj;
                    if(mj<=103){
                        sum=424300+(mj-100)*1640;
                    }else if(mj>=104 && mj<=108){
                        sum=430860+(mj-104)*1630;
                    }else if(mj>=109 && mj<=113){
                        sum=439010+(mj-109)*1620;
                    }else if(mj>=114 && mj<=118){
                        sum=447110+(mj-114)*1630;
                    }else if(mj>=119 && mj<=138){
                        sum=455260+(mj-119)*1690;
                    }else if(mj>=139 && mj<=144){
                        sum=489060+(mj-139)*1370;
                    }else if(mj>=145 && mj<=170){
                        sum=497280+(mj-145)*1350;
                    }else if(mj>170) {
                        sum=436430+(mj-170)*1800;
                    }
                }
            }
            break;
        case '3844':
            //杭州
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*200);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 81 ? mj: 81;
                sum = (mj - 81) * 2074 + 340320;
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 28544 + sum;
                }
            }
            sum=sum*1.342;
            break;
        //1.秘密花园 2.有宠之家3.屌丝绅士 4.月光族
        case '3800':
            //上海
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 885 + 117540;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 685 + 135040;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 885 + 148940;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 875 + 157780;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 685 + 166350;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 675 + 186890;
                }
                sum=sum+(mj*200);
                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 13600 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 81 ? mj: 81;
                sum = (mj - 81) * 2074 + 340320;
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 28544 + sum;
                }
            }
            break;
        case '3847':
            //太原
            if (tx == 588) {
                mj = mj >= 60 ? mj: 60;
                if (mj <= 79) {
                    sum = (mj - 60) * 1007 + 133702;
                } else if (mj <= 99) {
                    sum = (mj - 80) * 779 + 153609;
                } else if (mj <= 109) {
                    sum = (mj - 100) * 1007 + 169420;
                } else if (mj <= 119) {
                    sum = (mj - 110) * 995 + 179476;
                } else if (mj <= 149) {
                    sum = (mj - 120) * 779 + 189224;
                } else if (mj <= 170) {
                    sum = (mj - 150) * 768 + 212589;
                }

                if (mj > 170) {
                    sum = mj*1100;
                }
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 15470 + sum;
                }
            } else if (tx == 888) {
                mj = mj >= 81 ? mj: 81;
                sum = (mj - 81) * 2074 + 340320;
                //卫生间计算方式
                if (wsj > 1) {
                    sum = (wsj - 1) * 28544 + sum;
                }
            }
            break;
    }
    return parseInt(sum);
}