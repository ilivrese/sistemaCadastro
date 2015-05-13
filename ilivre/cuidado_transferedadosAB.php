<html>
    <head>
	    <title>
   Teste de bdd
		</title>
	</head>
	<body>


		<?php

		    $conec;
			$bco;
			$conectou = 0;

			include "conexao.php";

/* transfere registro de A para B*/

			if ($conectou) {
                $a = array(3785, 2473,
                898	,
1260	,
2202	,
3062	,
1576	,
3479	,
1764	,
1973	,
880	,
2895	,
2956	,
3556	,
2079	,
2392	,
337	,
2715	,
2535	,
3138	,
2139	,
1080	,
3089	,
2397	,
3515	,
4036	,
1961	,
2609	,
2610	,
3083	,
2116	,
3230	,
2696	,
1856	,
969	,
2709	,
2249	,
3933	,
3548	,
2654	,
2811	,
2134	,
447	,
2123	,
2680	,
2166	,
2212	,
642	,
1982	,
2389	,
3668	,
3390	,
3311	,
2257	,
1705	,
3235	,
183	,
461	,
3023	,
3922	,
1990	,
2615	,
3266	,
2093	,
2282	,
1438	,
2776	,
1730	,
2203	,
2728	,
2026	,
324	,
1194	,
3468	,
3496	,
2292	,
1437	,
2962	,
2505	,
3362	,
2068	,
1569	,
2075	,
1768	,
2815	,
3218	,
1235	,
3915	,
1341	,
1760	,
845	,
1583	,
2705	,
1059	,
2178	,
3277	,
2740	,
2800	,
1938	,
754	,
1696	,
1033	,
2963	,
2833	,
2167	,
2438
                );
                
                

                
                $b = array( 3918, 1702, 2325	,
2084	,
1152	,
866	,
2176	,
635	,
2055	,
2254	,
1757	,
705	,
900	,
276	,
2268	,
3308	,
231	,
2727	,
2727	,
2727	,
2224	,
3042	,
1552	,
2520	,
1188	,
2797	,
2024	,
2746	,
2714	,
3216	,
919	,
2891	,
741	,
2496	,
1659	,
3339	,
2146	,
3904	,
2413	,
2961	,
2958	,
848	,
2277	,
2742	,
941	,
2497	,
1182	,
1765	,
2051	,
3049	,
3303	,
77	,
77	,
163	,
1254	,
3650	,
2736	,
2669	,
26	,
2185	,
2056	,
761	,
3208	,
1957	,
2380	,
2471	,
2333	,
885	,
1153	,
1153	,
1022	,
2983	,
1164	,
1043	,
1043	,
3389	,
2619	,
3462	,
2341	,
963	,
2934	,
2052	,
2058	,
1250	,
2476	,
1945	,
2114	,
3916	,
1689	,
523	,
1679	,
1727	,
2979	,
2190	,
1247	,
3317	,
377	,
1241	,
3767	,
2245	,
1353	,
1684	,
2369	,
2842	,
1186	,
1186  );
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                $quantos_a= count($a);
                $quantos_b= count($b);
                if ($quantos_a == $quantos_b){
                 $elemento = 0;
                 while ($elemento < $quantos_a){
                  $busque_a = $a[$elemento];
                  $busque_b = $b[$elemento];
                  
				  $stgsql = "update atendimento set idusuario='$busque_b'
                  where idusuario='$busque_a';";
				  $res = mysql_query($stgsql,$conec);
				  if ($res) { echo "OK - "; }
				  else { echo "Falha atendimento!<br>";}
				     echo "Agendamentos do usuário ".$busque_a." transferidos para
                     o usuário ".$busque_b.". <br>";
                     
                  $stgsql2 = "update participantesofic set idusuario='$busque_b'
                  where idusuario='$busque_a';";
				  $res2 = mysql_query($stgsql2,$conec);
				  if ($res2) { echo "OK - "; }
				  else { echo "Falha oficina!<br>";}
				     echo "Oficinas do usuário ".$busque_a." transferidos para
                     o usuário ".$busque_b.". <br>";
                     
                     
                     
                   echo "<br>";
                   $elemento++;

                  }
                
                
                }
                else {
                echo "ERRO!";
                }



     }


?>
</BODY>
</HTML>
