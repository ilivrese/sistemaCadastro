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


			if ($conectou) {
                $elimine = array(  3785, 2473, 898, 1260, 2202,

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
                $a = count($elimine);
                $elemento = 0;

                while ($elemento < $a){
                  $busque = $elimine[$elemento];
				$stgsql = "delete from USUARIOS where idusuario = '$busque' ";
				$res = mysql_query($stgsql,$conec);
                echo "Usuário de ID=<b>".$elimine[$elemento]."</b> foi eliminado.<br>";

                  $elemento++;
                     }


     }
                

?>
</BODY>
</HTML>
