// JavaScript Document
function valorpunto(anos,nropuntos) {
var puntos=new Array ();
/* ----2004----
puntos[0]=new Array(668.94, 619.30, 569.65, 524.41, 469.37);
puntos[1]=new Array(689.59, 636.99, 584.39, 538.92, 476.81);
puntos[2]=new Array(708.12, 652.82, 597.49, 551.88, 484.33);
puntos[3]=new Array(724.54, 666.76, 608.95, 563.28, 488.39);
puntos[4]=new Array(738.85, 678.83, 618.77, 573.13, 492.54);
puntos[5]=new Array(751.07, 689.01, 626.94, 581.38, 495.61);
puntos[6]=new Array(767.21, 702.87, 638.51, 592.77, 501.53);
puntos[7]=new Array(781.76, 715.32, 648.85, 602.97, 506.64);
puntos[8]=new Array(794.74, 726.36, 657.96, 612.00, 510.91);
puntos[9]=new Array(806.14, 735.99, 665.84, 619.87, 514.38);
puntos[10]=new Array(947.44, 867.21, 786.97, 729.83, 574.01);
puntos[11]=new Array(1077.21, 987.73, 898.25, 830.84, 628.48);
puntos[12]=new Array(1206.72, 1107.92, 1009.13, 931.59, 684.10);
puntos[13]=new Array(1327.96, 1220.46, 1112.96, 1025.92, 736.00);
puntos[14]=new Array(1441.13, 1325.52, 1209.91, 1114.00, 784.29);
puntos[15]=new Array(1546.47, 1423.32, 1300.18, 1195.96, 829.06);
puntos[16]=new Array(1644.14, 1514.02, 1383.90, 1271.97, 870.39);
puntos[17]=new Array(1734.39, 1597.83, 1461.27, 1342.22, 908.36);
puntos[18]=new Array(1854.46, 1709.09, 1563.72, 1435.53, 962.33);
puntos[19]=new Array(1972.18, 1818.18, 1664.19, 1527.00, 1015.23);
puntos[20]=new Array(2087.60, 1925.12, 1762.66, 1616.70, 1067.11);
puntos[21]=new Array(2200.75, 2029.98, 1859.22, 1704.62, 1117.96);
puntos[22]=new Array(2311.67, 2132.77, 1953.88, 1790.83, 1167.82);
puntos[23]=new Array(2420.43, 2233.55, 2046.68, 1875.35, 1216.70);
puntos[24]=new Array(2527.04, 2332.36, 2137.67, 1958.20, 1264.62);
puntos[25]=new Array(2631.59, 2429.23, 2226.86, 2039.44, 1311.61);
puntos[26]=new Array(2734.07, 2524.19, 2314.32, 2119.12, 1357.67);*/
/* ----2005----
 puntos[0]=new Array(690.35,639.12,587.88,541.20,484.40);
 puntos[1]=new Array(711.66,657.38,603.09,556.17,492.07);
 puntos[2]=new Array(730.78,673.71,616.62,569.55,499.83);
 puntos[3]=new Array(747.73,688.10,628.44,581.31,504.03);
 puntos[4]=new Array(762.50,700.55,638.57,591.47,508.31);
 puntos[5]=new Array(775.11,711.06,647.01,599.99,511.48);
 puntos[6]=new Array(791.77,725.36,658.94,611.74,517.59);
 puntos[7]=new Array(806.78,738.22,669.62,622.27,522.86);
 puntos[8]=new Array(820.18,749.61,679.02,631.59,527.26);
 puntos[9]=new Array(831.95,759.55,687.15,639.72,530.84);
 puntos[10]=new Array(977.76,894.97,812.15,753.19,592.38);
 puntos[11]=new Array(1111.68,1019.35,927.00,857.43,648.59);
 puntos[12]=new Array(1245.34,1143.38,1041.43,961.41,706.00);
 puntos[13]=new Array(1370.46,1259.52,1148.58,1058.75,759.56);
 puntos[14]=new Array(1487.25,1367.94,1248.63,1149.65,809.39);
 puntos[15]=new Array(1595.96,1468.87,1341.79,1234.24,855.60);
 puntos[16]=new Array(1696.76,1562.47,1428.19,1312.68,898.24);
 puntos[17]=new Array(1789.90,1648.97,1508.04,1385.18,937.44);
 puntos[18]=new Array(1913.81,1763.79,1613.77,1481.47,993.13);
 puntos[19]=new Array(2035.29,1876.37,1717.45,1575.87,1047.72);
 puntos[20]=new Array(2154.41,1986.73,1819.07,1668.44,1101.26);
 puntos[21]=new Array(2271.18,2094.94,1918.72,1759.17,1153.74);
 puntos[22]=new Array(2385.65,2201.02,2016.41,1848.14,1205.19);
 puntos[23]=new Array(2497.89,2305.03,2112.18,1935.36,1255.63);
 puntos[24]=new Array(2607.91,2407.00,2206.08,2020.87,1305.10);
 puntos[25]=new Array(2715.80,2506.97,2298.12,2104.71,1353.59);
 puntos[26]=new Array(2821.56,2604.96,2388.38,2186.93,1401.12);*/

 puntos[0]=new Array( 852.40   , 789.14   , 725.87   , 668.23   , 598.10   );
 puntos[1]=new Array( 878.70   , 681.70   , 625.41   , 576.75   , 510.28   );
 puntos[2]=new Array( 902.31   , 698.64   , 639.43   , 590.62   , 518.33   );
 puntos[3]=new Array( 923.24   , 713.56   , 651.69   , 602.82   , 522.68   );
 puntos[4]=new Array( 790.71   , 726.48   , 662.20   , 613.35   , 527.12   );
 puntos[5]=new Array( 803.79   , 737.37   , 670.95   , 622.19   , 530.40   );
 puntos[6]=new Array( 821.07   , 752.20   , 683.32   , 634.37   , 536.74   );
 puntos[7]=new Array( 836.63   , 765.53   , 694.39   , 645.30   , 542.20   );
 puntos[8]=new Array( 850.53   , 777.34   , 704.14   , 654.96   , 546.77   );
 puntos[9]=new Array( 862.73   , 787.65   , 712.58   , 663.38   , 550.48   );
 puntos[10]=new Array( 1013.94   , 928.08   , 842.20   , 781.06   , 614.30   );
 puntos[11]=new Array( 1152.81   , 1057.06   , 961.30   , 889.15   , 672.59   );
 puntos[12]=new Array( 1291.41   , 1185.68   , 1079.96   , 996.98   , 732.12   );
 puntos[13]=new Array( 1421.16   , 1306.12   , 1191.08   , 1097.93   , 787.66   );
 puntos[14]=new Array( 1542.28   , 1418.55   , 1294.83   , 1192.19   , 839.34   );
 puntos[15]=new Array( 1655.01   , 1523.22   , 1391.43   , 1279.90   , 887.26   );
 puntos[16]=new Array( 1759.54   , 1620.28   , 1481.03   , 1361.25   , 931.48   );
 puntos[17]=new Array( 1856.12   , 1709.98   , 1563.84   , 1436.43   , 972.12   );
 puntos[18]=new Array( 1984.62   , 1829.05   , 1673.48   , 1536.28   , 1029.88   );
 puntos[19]=new Array( 2110.60   , 1945.79   , 1780.99   , 1634.18   , 1086.49   );
 puntos[20]=new Array( 2234.12   , 2060.24   , 1886.37   , 1730.17   , 1142.01   );
 puntos[21]=new Array( 2355.21   , 2172.46   , 1989.71   , 1824.26   , 1196.43   );
 puntos[22]=new Array( 2473.92   , 2282.46   , 2091.02   , 1916.52   , 1249.79   );
 puntos[23]=new Array( 2590.31   , 2390.32   , 2190.33   , 2006.97   , 1302.09   );
 puntos[24]=new Array( 2704.41   , 2496.06   , 2287.70   , 2095.64   , 1353.38   );
 puntos[25]=new Array( 2816.29   , 2599.72   , 2383.15   , 2182.58   , 1403.67   );
 puntos[26]=new Array( 2925.96   , 2701.35   , 2476.75   , 2267.85   , 1452.96   );

var rangopuntos=new Array(1,2,3,4,5,6,7,8,9,14,19,24,29,34,39,44,49,54,59,64,69,74,79,84,89,99,10000);
var rangoedad=new Array(20,40,55,65,150);

var rangedad,rangpuntos;
for (rangpuntos=0; nropuntos>rangopuntos[rangpuntos]; rangpuntos++);
//rangpuntos--;
for (rangedad=0; anos>rangoedad[rangedad]; rangedad++);
//alert(rangedad);
//alert(rangpuntos);
return puntos[rangpuntos][rangedad];
//return puntos[0][0];
}