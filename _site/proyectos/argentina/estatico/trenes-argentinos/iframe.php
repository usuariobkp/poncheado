	<html>
	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="b64_encoder.js"></script> <!-- Nombre del objeto Base64 (metodos: encode, decode)-->
		<script>
			function randomString() {
				var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
				var string_length = 16;
				var randomstring = '';
				for (var i=0; i<string_length; i++) {
					var rnum = Math.floor(Math.random() * chars.length);
					randomstring += chars.substring(rnum,rnum+1);
				}
				return randomstring;
			}
			function check_tiempos() {
				if ($('#select_trenes_linea').val() && $('#select_trenes_estacion').val()) {
					/*var t1='--';
					var t2='--';
					var t3='--';
					var t4='--';
					var t5='--';
					var t6='--';
					var data='';*/
					$.get("horarios.php?id_ramal="+ $('#select_trenes_linea').val() +"&id_estacion="+ $('#select_trenes_estacion').val(),function(data2, status){
						data=data2;

						// dg
						$("#horas").html(data);

					})
					.error(function() {
						/*$('#trenes_tiempo_1').html('--');
						$('#trenes_tiempo_2').html('--');
						$('#trenes_tiempo_3').html('--');
						$('#trenes_tiempo_4').html('--');
						$('#trenes_tiempo_5').html('--');
						$('#trenes_tiempo_6').html('--');*/
					})
					.success(function() {
						/*var arr=data.split("_");
						if (arr.length > 0) {
							var cant = arr[0];
							if (cant>0) {
								var estacion = $('#select_trenes_estacion').val();
								if (estacion>0) {
									t1 = arr[(((estacion-1)*6)+1)];
									t2 = arr[(((estacion-1)*6)+2)];
									t3 = arr[(((estacion-1)*6)+3)];
									t4 = arr[(((estacion-1)*6)+4)];
									t5 = arr[(((estacion-1)*6)+5)];
									t6 = arr[(((estacion-1)*6)+6)];
									if (t1=='0') { t1='<b>En And&eacute;n</b>'; } else if (t1=='-1') { t1='--'; } else { t1='<b>' + t1 + ' minutos</b>'; }
									if (t2=='0') { t2='<b>En And&eacute;n</b>'; } else if (t2=='-1') { t2='--'; } else { t2='<b>' + t2 + ' minutos</b>'; }
									if (t3=='0') { t3='<b>En And&eacute;n</b>'; } else if (t3=='-1') { t3='--'; } else { t3='<b>' + t3 + ' minutos</b>'; }
									if (t4=='0') { t4='<b>En And&eacute;n</b>'; } else if (t4=='-1') { t4='--'; } else { t4='<b>' + t4 + ' minutos</b>'; }
									if (t5=='0') { t5='<b>En And&eacute;n</b>'; } else if (t5=='-1') { t5='--'; } else { t5='<b>' + t5 + ' minutos</b>'; }
									if (t6=='0') { t6='<b>En And&eacute;n</b>'; } else if (t6=='-1') { t6='--'; } else { t6='<b>' + t6 + ' minutos</b>'; }
								}
							}
						}
						$('#trenes_tiempo_1').html(t1);
						$('#trenes_tiempo_2').html(t2);
						$('#trenes_tiempo_3').html(t3);
						$('#trenes_tiempo_4').html(t4);
						$('#trenes_tiempo_5').html(t5);
						$('#trenes_tiempo_6').html(t6);*/
					})
					.complete(function() {
					});
				}
			}



			function cambia_ramal_arribos() {
				switch ($('#select_arribos_ramal').val()) {
					case '1':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=1');
						break;
					case '5':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=5');
						break;
					case '7':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=7');
						break;
					case '9':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=9');
						break;
					case '11':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=11');
						break;
					case '15':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=15');
						break;
					case '29':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=29');
						break;
					case '17':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=17');
						break;
					case '19':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=19');
						break;
					case '27':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=27');
						break;
					case '37':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=37');
						break;
					case '21':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=21');
						break;
					case '23':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=23');
						break;
					case '25':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=25');
						break;
					case '31':
						$('#ir_arribos').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL2Fycmlib3MvaW5kZXgucGhw')+'?ramal=31');
						break;
					default:
						alert('Seleccione un ramal');
						break;
				}
			}
			function cambia_ramal_mapa() {
				switch ($('#select_mapa_ramal').val()) {
					case '1':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/sarmiento/index.php');
						break;
					case '5':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/mitre/mapa_mitre_tigre.php');
						break;
					case '7':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/mitre/mapa_mitre_mitre.php');
						break;
					case '9':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/mitre/mapa_mitre_jlsuarez.php');
						break;
					case '11':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/roca/mapa_laplata.php');
						break;
					case '15':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/roca/mapa_claypole.php');
						break;
					case '29':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/roca/mapa_gutierrez.php');
						break;
					case '17':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/roca/mapa_korn.php');
						break;
					case '19':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/roca/mapa_ezeiza.php');
						break;
					case '27':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/roca/mapa_haedo.php');
						break;
					case '37':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/roca/mapa_canuelas.php');
						break;
					case '21':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/lbs/mapa_belgrano.php');
						break;
					case '23':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/lbs/mapa_aldobonzi.php');
						break;
					case '25':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/lbs/mapa_catan.php');
						break;
					case '31':
						$('#ir_mapa').attr('href',Base64.decode('aHR0cHM6Ly90cmVuZXNlbmRpcmVjdG8uc29mc2UuZ29iLmFyL21hcGFz')+'/sanmartin/index.php');
						break;
					default:
						alert('Seleccione un ramal');
						break;
				}
			}
			function cambia_linea(linea, ramal) {
				$(ramal).empty();
				switch ($(linea).val()) {
					case '1':
						$(ramal).append("<option value='1'>Ramal Moreno</option>");
						break;
					case '2':
						$(ramal).append("<option value='5'>Ramal Tigre</option>");
						$(ramal).append("<option value='7'>Ramal Mitre</option>");
						$(ramal).append("<option value='9'>Ramal J.L.Su&aacute;rez</option>");
						break;
					case '3':
						$(ramal).append("<option value='11'>Ramal La Plata</option>");
						$(ramal).append("<option value='15'>Ramal Bosques via CY</option>");
						$(ramal).append("<option value='29'>Ramal Gutierrez</option>");
						$(ramal).append("<option value='17'>Ramal A. Korn</option>");
						$(ramal).append("<option value='19'>Ramal Ezeiza</option>");
						$(ramal).append("<option value='27'>Ramal Haedo</option>");
						$(ramal).append("<option value='37'>Ramal Ca&ntilde;uelas</option>");
						break;
					case '4':
						$(ramal).append("<option value='21'>Ramal M.C.G Belgrano</option>");
						$(ramal).append("<option value='23'>Ramal Aldo Bonzi</option>");
						$(ramal).append("<option value='25'>Ramal G. Cat&aacute;n</option>");
						break;
					case '5':
						$(ramal).append("<option value='31'>Ramal Cabred</option>");
						break;
				}
			}
			function cambia_linearamal() {
				$('#select_trenes_estacion').empty();
				$.get("getEstaciones.php?ramal="+$('#select_trenes_linea').val(),function(data2,status){
						data=data2;
					}) 
					.success(function() {
						var arr=data.split("|");
						for (var i = 0; i < arr.length; i++) {
							arr_estacion=arr[i].split(',');
							$('#select_trenes_estacion').append("<option value='"+arr_estacion[0]+"'>"+arr_estacion[1]+"</option>");	
						};
					})
					.complete(function() {
					});
					$.get("getSentido.php?ramal="+$('#select_trenes_linea').val(),function(data2,status){
						data=data2;
					}) 
					.success(function() {
						var arr=data.split("|");
						$('#ramal_asd').html(''+arr[0]);
						$('#ramal_desc').html(''+arr[1]);
					})
					.complete(function() {
					});
				}

				
			
        </script>
		<style>
		 body {
                background-color: #0695d6;
                min-height: 250px;
                height: 100%;
            }
			#div_trenes {
				/*background-image: url('iframe_index.jpg');*/
                background-color: #0695d6;
				width: 1100px;
				height: 250px;
				margin: 0px auto;
				padding: 0px;
				/*float: left;*/
			}
			.apps {
				height: 188px;
				width: 140px;
				text-align: center;
				float: right;
				margin-top: 20px;
				margin-right: 16px;
				padding-top: 0px;
				padding-right: 0px;
				padding-bottom: 0px;
				padding-left: 0px;
			}
			.apps3{
				margin-bottom: 10px;
				height: 40px;
				width: 140px;	
			}
			.apps2 {
				margin-bottom: 10px;
				height: 40px;
				width: 140px;
			}
			.apps1 {
				margin-bottom: 10px;
				height: 40px;
				width: 140px;
			}
            .col-1, .col-2, .col-3, .col-4 {
                    width: 25%;
                    position: relative;
                    top: -15px;
                }
            
            
            .logo-trenes {
                margin: 15px 0px 0px 10px;
                width: 75%;
            }
            
           
           .iframe-css{
				height: 250px!important;
				width: 100%;
               }
            
            @media (max-width:1200px)
            {
                
                .col-1, .col-2, .col-3, .col-4 {
                    width: 100%;
                }
                
                .col-4 {
                    top: 155px;
                    position: relative;
                }
                    
                .col-3 {
                    top: 100px;
                    position: relative;
                }
            
            .col-2 {
                    left: 20px;
                    position: relative;
                }
                
            #div_trenes{
                height: 1300px;
                margin: 0 auto !important;
                width: 400px;
                float: none;
                }
                
                
            
				
				.logo-trenes img{
                width:200px!important;
            }


              #div_trenes select, #div_trenes_ascendente, #div_trenes_descendente{
              	width: 350px!important;
              	
              }  
                
               #div_trenes select{
               	height: 30px!important
               }
               .iframe-css{
				height: 1300px!important;
               }
            }
		</style>
	</head>
	<body style="padding: 0px; margin: 0px;" onLoad="cambia_linea('#select_arribos_linea', '#select_arribos_ramal'); cambia_ramal_arribos(); cambia_linea('#select_mapa_linea', '#select_mapa_ramal'); cambia_ramal_mapa();">
		<div id='div_trenes'>
			<div class="col-1" style="float: left; display: inline !important;">
               <div class="logo-trenes"><img class="logo-trenes" src="https://trenesendirecto.sofse.gob.ar/iframe/logo_trenes.png" alt=""></div>
                <div style="float: left; width: 240px; height: 176px; text-align:left; margin-left: 31px;">
                    <div id='div_trenes_linea' style="position: relative; left: 0px; top: 120px; width: 193px; height: 18px; padding: 0px; margin: 0px">
                        <select id='select_trenes_estacion' name='select_trenes_estacion' onChange="check_tiempos()" style="width: 200px; height: 28px; font-family: Arial; font-size: 11px;">
                        </select>
                    </div>
                    <div id='div_trenes_estacion' style="position: relative; left: 0px; top: 30px; *top: 132px; width: 193px; height: 18px;">
                        <select id='select_trenes_linea' name='select_trenes_linea' onChange="cambia_linearamal(); check_tiempos();" style="color:#555; width: 200px; height: 28px; font-family: Arial; font-size: 11px;">
                            <option value='0' selected>Seleccione</option>
                            <option value='1'>L&iacute;nea Sarmiento</option>
                            <option value='5'>L&iacute;nea Mitre (Tigre)</option>
                            <option value='7'>L&iacute;nea Mitre (Mitre)</option>
                            <option value='9'>L&iacute;nea Mitre (J.L.Su&aacute;rez)</option>
                            <option value='11'>L&iacute;nea Roca (La Plata)</option>
                            <option value='15'>L&iacute;nea Roca (Bosques via CY)</option>
                            <option value='29'>L&iacute;nea Roca (Gutierrez)</option>
                            <option value='17'>L&iacute;nea Roca (A. Korn)</option>
                            <option value='27'>L&iacute;nea Roca (Haedo)</option>
                            <option value='19'>L&iacute;nea Roca (Ezeiza)</option>
                            <option value='37'>L&iacute;nea Roca (Ca&ntilde;uelas)</option>
                            <option value='21'>L&iacute;nea Belg Sur (M.C.G. Belgrano)</option>
                            <option value='23'>L&iacute;nea Belg Sur (Aldo Bonzi)</option>
                            <option value='25'>L&iacute;nea Belg Sur (Gonzales Cat&aacute;n)</option>
                            <option value='31'>L&iacute;nea San Martin</option>
                        </select>
                    </div>
                    <div style="position: relative; left: 0px; top: -18px; width: 140px; height: 25px; font-family: Arial; font-size: 14px; line-height: 24px; color: #ffffff;">L&Iacute;NEA/RAMAL</div>
                    <div style="position: relative; left: 0px; top: 30px; width: 140px; height: 25px; font-family: Arial; font-size: 14px; line-height: 24px; color: #ffffff;">ESTACI&Oacute;N</div>

                </div>
			</div>
			
			<div class="col-2" style="float: left; display: inline !important;">
                <div style="float: left; width: 170px; height: 176px; text-align:left; position:relative; top:0px;" id="horas">
                    <div id='ramal_asd' style="position: relative; left: 14px; top: 35px; width: 200px; height: 25px; font-family: Arial; font-size: 14px; line-height: 24px; color: #ffffff; ">SENTIDO</div>
                    <div id='div_trenes_ascendente' style="color:#555; position: relative; left: 14px; top: 40px; width: 180px; height: 73px; font-family: Arial; font-size: 12px; line-height: 24px; background-color:#b8e9ff; padding-left: 10px;">
                    1) Pr&oacute;ximo: <span id='trenes_tiempo_1'></span><br>
                    2) Siguiente: <span id='trenes_tiempo_2'></span><br>
                    3) Siguiente: <span id='trenes_tiempo_3'></span>
                    </div>
                    <div id='ramal_desc' style="position: relative; left:14px; top: 50px; *top: 27px;width: 200px; height: 25px; font-family: Arial; font-size: 14px; line-height: 24px; color: #ffffff;">SENTIDO</div>
                    <div id='div_trenes_descendente' style="color:#555; position: relative; left: 13px; top: 55px; width: 180px; height: 73px; font-family: Arial; font-size: 12px; line-height: 24px; background-color: #b8e9ff; padding-left: 10px;">
                    1) Pr&oacute;ximo: <span id='trenes_tiempo_4'></span><br>
                    2) Siguiente: <span id='trenes_tiempo_5'></span><br>
                    3) Siguiente: <span id='trenes_tiempo_6'></span>
                    </div>
			    </div>
			</div>
			
			<div class="col-3" style="float: left; display: inline !important;">
                <div class="logo-trenes"><img class="logo-trenes" src="https://trenesendirecto.sofse.gob.ar/iframe/mapas.png" alt="" ></div>
                <div style="float: left; width: 150px; height: 176px; text-align:left; margin-left: 10px;">
                    <div id='' style="position: relative; left: 20px; top: 115px; width: 162px; height: 21px; padding: 0px; margin: 0px">
                        <select id='select_mapa_ramal' name='select_mapa_ramal' onChange="cambia_ramal_mapa()" style="color:#555; width: 200px; height: 28px; font-family: Arial; font-size: 11px;">
                        </select>
                    </div>
                    <div id='' style="position: relative; left: 205px; top: 135px; width: 30px; height: 15px; padding: 0px; margin: 0px"><a id='ir_mapa' href='#' target='_blank'><img border="0" src="bt_ir.png" height="20"></a></div>

                    <div id='' style="position: relative; left: 20px; top: 12px; width: 162px; height: 21px;">
                        <select id='select_mapa_linea' name='select_mapa_linea' onChange="cambia_linea('#select_mapa_linea', '#select_mapa_ramal'); cambia_ramal_mapa();" style="color:#555; width: 200px; height: 28px; font-family: Arial; font-size: 11px;">
                            <option value='1' selected>L&iacute;nea Sarmiento</option>
                            <option value='2'>L&iacute;nea Mitre</option>
                            <option value='3'>L&iacute;nea Roca</option>
                            <option value='4'>L&iacute;nea Belgrano Sur</option>
                            <option value='5'>L&iacute;nea San Mart&iacute;n</option>
                        </select>
                    </div>

                    <div style="position: relative; left: 20px; top: -39px; width: 140px; height: 25px; font-family: Arial; font-size: 14px; line-height: 24px; color: #ffffff;">L&Iacute;NEA</div>
                    <div style="position: relative; left: 20px; top: 5px; width: 140px; height: 25px; font-family: Arial; font-size: 14px; line-height: 24px; color: #ffffff;">RAMAL</div>


                </div>
            </div>
    
    
            <div class="col-4" style="float: left; display: inline !important;">
               <div class="logo-trenes"><img class="logo-trenes" src="https://trenesendirecto.sofse.gob.ar/iframe/arribos.png" alt=""></div>
                <div style="float: left; width: 150px; height: 176px; text-align:left; margin-left: 160px;">
                    <div id='' style="position: relative; left: -134px; *left:-10px; top: 115px; width: 165px; height: 21px; padding: 0px; margin: 0px">
                        <select id='select_arribos_ramal' name='select_arribos_ramal' onChange="cambia_ramal_arribos()" style="color:#555; width: 200px; height: 28px; font-family: Arial; font-size: 11px;">
                        </select>
                    </div>

                        <div id='' style="position: relative; left: 50px; top: 135px; width: 30px; height: 15px; padding: 0px; margin: 0px"><a id='ir_arribos' href='#' target='_blank'><img border="0" src="bt_ir.png" height="20"></a></div>

                    <div id='div_trenes_estacion' style="position: relative; left: -134px; *left:-10px;top: 12px; width: 162px; height: 21px;">
                        <select id='select_arribos_linea' name='select_arribos_linea' onChange="cambia_linea('#select_arribos_linea', '#select_arribos_ramal'); cambia_ramal_arribos();" style="color:#555; width: 200px; height: 28px; font-family: Arial; font-size: 11px;">
                            <option value='1' selected>L&iacute;nea Sarmiento</option>
                            <option value='2'>L&iacute;nea Mitre</option>
                            <option value='3'>L&iacute;nea Roca</option>
                            <option value='4'>L&iacute;nea Belgrano Sur</option>
                            <option value='5'>L&iacute;nea San Mart&iacute;n</option>
                        </select>
                    </div>
                    <div style="position: relative; left: -134px; top: -39px; width: 140px; height: 25px; font-family: Arial; font-size: 14px; line-height: 24px; color: #ffffff;">L&Iacute;NEA</div>
                    <div style="position: relative; left: -134px; top: 5px; width: 140px; height: 25px; font-family: Arial; font-size: 14px; line-height: 24px; color: #ffffff;">RAMAL</div>

                    </div>
                    <div style="float: left; width: 120px; height: 120px; text-align:left; margin-left: 40px; margin-top: 65px;">


                    </div>
            </div>

		  
	</div>
	</body>
</html>