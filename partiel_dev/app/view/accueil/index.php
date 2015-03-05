<?php include_once('../app/view/include/header.inc.php'); ?>
                
                <div class="col-lg-12">
                    <h1 class="page-header">Données météo</h1>
                </div>
				
				<?php
                $json = file_get_contents("http://www.prevision-meteo.ch/services/json/lat=48.869462lng=2.340697");

                //var_dump(json_decode($json));

                $parsed_json = json_decode($json);
                $lat = $parsed_json->{'forecast_info'}->{'latitude'};
				$long = $parsed_json->{'forecast_info'}->{'longitude'};
				$elev = $parsed_json->{'forecast_info'}->{'elevation'};

				// Jeudi
				$jour_J = $parsed_json->{'fcst_day_0'}->{'day_long'};
				$date_J = $parsed_json->{'fcst_day_0'}->{'date'};
				$prev_J = $parsed_json->{'fcst_day_0'}->{'condition'};
				$temp_min_J = $parsed_json->{'fcst_day_0'}->{'tmin'};
				$temp_max_J = $parsed_json->{'fcst_day_0'}->{'tmax'};
				$icon_J = $parsed_json->{'fcst_day_0'}->{'icon'};
				$heure_6_J = $parsed_json->{'fcst_day_0'}->{'hourly_data'}->{'6H00'}->{'ICON'};
				$heure_7_J = $parsed_json->{'fcst_day_0'}->{'hourly_data'}->{'7H00'}->{'ICON'};
				$heure_8_J = $parsed_json->{'fcst_day_0'}->{'hourly_data'}->{'8H00'}->{'ICON'};
				$heure_9_J = $parsed_json->{'fcst_day_0'}->{'hourly_data'}->{'9H00'}->{'ICON'};
				$heure_10_J = $parsed_json->{'fcst_day_0'}->{'hourly_data'}->{'10H00'}->{'ICON'};
				$heure_11_J = $parsed_json->{'fcst_day_0'}->{'hourly_data'}->{'11H00'}->{'ICON'};
				$heure_12_J = $parsed_json->{'fcst_day_0'}->{'hourly_data'}->{'12H00'}->{'ICON'};

				// Vendredi
				$jour_V = $parsed_json->{'fcst_day_1'}->{'day_long'};
				$date_V = $parsed_json->{'fcst_day_1'}->{'date'};
				$prev_V = $parsed_json->{'fcst_day_1'}->{'condition'};
				$temp_min_V = $parsed_json->{'fcst_day_1'}->{'tmin'};
				$temp_max_V = $parsed_json->{'fcst_day_1'}->{'tmax'};
				$icon_V = $parsed_json->{'fcst_day_1'}->{'icon'};
				$heure_6_V = $parsed_json->{'fcst_day_1'}->{'hourly_data'}->{'6H00'}->{'ICON'};
				$heure_7_V = $parsed_json->{'fcst_day_1'}->{'hourly_data'}->{'7H00'}->{'ICON'};
				$heure_8_V = $parsed_json->{'fcst_day_1'}->{'hourly_data'}->{'8H00'}->{'ICON'};
				$heure_9_V = $parsed_json->{'fcst_day_1'}->{'hourly_data'}->{'9H00'}->{'ICON'};
				$heure_10_V = $parsed_json->{'fcst_day_1'}->{'hourly_data'}->{'10H00'}->{'ICON'};
				$heure_11_V = $parsed_json->{'fcst_day_1'}->{'hourly_data'}->{'11H00'}->{'ICON'};
				$heure_12_V = $parsed_json->{'fcst_day_1'}->{'hourly_data'}->{'12H00'}->{'ICON'};

				// Samedi
				$jour_S = $parsed_json->{'fcst_day_2'}->{'day_long'};
				$date_S = $parsed_json->{'fcst_day_2'}->{'date'};
				$prev_S = $parsed_json->{'fcst_day_2'}->{'condition'};
				$temp_min_S = $parsed_json->{'fcst_day_2'}->{'tmin'};
				$temp_max_S = $parsed_json->{'fcst_day_2'}->{'tmax'};
				$icon_S = $parsed_json->{'fcst_day_2'}->{'icon'};
				$heure_6_S = $parsed_json->{'fcst_day_2'}->{'hourly_data'}->{'6H00'}->{'ICON'};
				$heure_7_S = $parsed_json->{'fcst_day_2'}->{'hourly_data'}->{'7H00'}->{'ICON'};
				$heure_8_S = $parsed_json->{'fcst_day_2'}->{'hourly_data'}->{'8H00'}->{'ICON'};
				$heure_9_S = $parsed_json->{'fcst_day_2'}->{'hourly_data'}->{'9H00'}->{'ICON'};
				$heure_10_S = $parsed_json->{'fcst_day_2'}->{'hourly_data'}->{'10H00'}->{'ICON'};
				$heure_11_S = $parsed_json->{'fcst_day_2'}->{'hourly_data'}->{'11H00'}->{'ICON'};
				$heure_12_S = $parsed_json->{'fcst_day_2'}->{'hourly_data'}->{'12H00'}->{'ICON'};

				// Dimanche
				$jour_D = $parsed_json->{'fcst_day_3'}->{'day_long'};
				$date_D = $parsed_json->{'fcst_day_3'}->{'date'};
				$prev_D = $parsed_json->{'fcst_day_3'}->{'condition'};
				$temp_min_D = $parsed_json->{'fcst_day_3'}->{'tmin'};
				$temp_max_D = $parsed_json->{'fcst_day_3'}->{'tmax'};
				$icon_D = $parsed_json->{'fcst_day_3'}->{'icon'};
				$heure_6_D = $parsed_json->{'fcst_day_3'}->{'hourly_data'}->{'6H00'}->{'ICON'};
				$heure_7_D = $parsed_json->{'fcst_day_3'}->{'hourly_data'}->{'7H00'}->{'ICON'};
				$heure_8_D = $parsed_json->{'fcst_day_3'}->{'hourly_data'}->{'8H00'}->{'ICON'};
				$heure_9_D = $parsed_json->{'fcst_day_3'}->{'hourly_data'}->{'9H00'}->{'ICON'};
				$heure_10_D = $parsed_json->{'fcst_day_3'}->{'hourly_data'}->{'10H00'}->{'ICON'};
				$heure_11_D = $parsed_json->{'fcst_day_3'}->{'hourly_data'}->{'11H00'}->{'ICON'};
				$heure_12_D = $parsed_json->{'fcst_day_3'}->{'hourly_data'}->{'12H00'}->{'ICON'};

				// Lundi
				$jour_L = $parsed_json->{'fcst_day_4'}->{'day_long'};
				$date_L = $parsed_json->{'fcst_day_4'}->{'date'};
				$prev_L = $parsed_json->{'fcst_day_4'}->{'condition'};
				$temp_min_L = $parsed_json->{'fcst_day_4'}->{'tmin'};
				$temp_max_L = $parsed_json->{'fcst_day_4'}->{'tmax'};
				$icon_L = $parsed_json->{'fcst_day_4'}->{'icon'};
				$heure_6_L = $parsed_json->{'fcst_day_4'}->{'hourly_data'}->{'6H00'}->{'ICON'};
				$heure_7_L = $parsed_json->{'fcst_day_4'}->{'hourly_data'}->{'7H00'}->{'ICON'};
				$heure_8_L = $parsed_json->{'fcst_day_4'}->{'hourly_data'}->{'8H00'}->{'ICON'};
				$heure_9_L = $parsed_json->{'fcst_day_4'}->{'hourly_data'}->{'9H00'}->{'ICON'};
				$heure_10_L = $parsed_json->{'fcst_day_4'}->{'hourly_data'}->{'10H00'}->{'ICON'};
				$heure_11_L = $parsed_json->{'fcst_day_4'}->{'hourly_data'}->{'11H00'}->{'ICON'};
				$heure_12_L = $parsed_json->{'fcst_day_4'}->{'hourly_data'}->{'12H00'}->{'ICON'};

                ?>


                <input type="hidden" name="lat" id="lat" value="<?php echo "${lat}"; ?>"/> 
				<input type="hidden" name="lng" id="lng" value="<?php echo "${long}"; ?>"/>

				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<script type="text/javascript">
				var lat = document.getElementById("lat").value;
				var lng = document.getElementById("lng").value;

					function initialiser() {
						var latlng = new google.maps.LatLng(lat, lng);
						//objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
						//de définir des options d'affichage de notre carte
						var options = {
							center: latlng,
							zoom: 11,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						};
						
						//constructeur de la carte qui prend en paramêtre le conteneur HTML
						//dans lequel la carte doit s'afficher et les options
						var carte = new google.maps.Map(document.getElementById("carte"), options);
					}
				</script>
				<div>
					<br/><br/>
					Votre position :
					<div id="carte" style="width:100%; height:300px">
					</div>
				</div>


                <!-- Jeudi -->
                <div class="tableau_carte bordure_commande col-lg-12">
                  <h3>La météo : <?php echo "${jour_J} &nbsp;&nbsp;&nbsp; <img src='${icon_J}'>"; ?></h3>
                  <br/>
                  <h5>Date du : <?php echo "${date_J}";?></h5>
                  <h5>Prévision : <?php echo "${prev_J}";?></h5>
                  <h5><?php echo "Température prévu entre ${temp_min_J} et ${temp_max_J} degrés";?></h5>
                  <table>
                      <tr>
                        <th height="40" width="160">6H</th>
                        <th height="40" width="160">7H</th>
                        <th height="40" width="160">8H</th>
                        <th height="40" width="160">9H</th>
                        <th height="40" width="160">10H</th>
                        <th height="40" width="160">11H</th>
                        <th height="40" width="160">12H</th>
                      </tr>

                      <tr>
                        <td><?php echo "<img src='${heure_6_J}'>"; ?></td>
                        <td><?php echo "<img src='${heure_7_J}'>"; ?></td>
                        <td><?php echo "<img src='${heure_8_J}'>"; ?></td>
                        <td><?php echo "<img src='${heure_9_J}'>"; ?></td>
                        <td><?php echo "<img src='${heure_10_J}'>"; ?></td>
                        <td><?php echo "<img src='${heure_11_J}'>"; ?></td>
                        <td><?php echo "<img src='${heure_12_J}'>"; ?></td>
                      </tr>
                  </table>
                  <br/>
            	</div>

            	<!-- Vendredi -->
                <div class="tableau_carte bordure_commande col-lg-12">
                  <h3>La météo : <?php echo "${jour_V} &nbsp;&nbsp;&nbsp; <img src='${icon_V}'>"; ?></h3>
                  <br/>
                  <h5>Date du : <?php echo "${date_V}";?></h5>
                  <h5>Prévision : <?php echo "${prev_V}";?></h5>
                  <h5><?php echo "Température prévu entre ${temp_min_V} et ${temp_max_V} degrés";?></h5>
                  <table>
                      <tr>
                        <th height="40" width="160">6H</th>
                        <th height="40" width="160">7H</th>
                        <th height="40" width="160">8H</th>
                        <th height="40" width="160">9H</th>
                        <th height="40" width="160">10H</th>
                        <th height="40" width="160">11H</th>
                        <th height="40" width="160">12H</th>
                      </tr>

                      <tr>
                        <td><?php echo "<img src='${heure_6_V}'>"; ?></td>
                        <td><?php echo "<img src='${heure_7_V}'>"; ?></td>
                        <td><?php echo "<img src='${heure_8_V}'>"; ?></td>
                        <td><?php echo "<img src='${heure_9_V}'>"; ?></td>
                        <td><?php echo "<img src='${heure_10_V}'>"; ?></td>
                        <td><?php echo "<img src='${heure_11_V}'>"; ?></td>
                        <td><?php echo "<img src='${heure_12_V}'>"; ?></td>
                      </tr>
                  </table>
                  <br/>
            	</div>

            	<!-- Samedi -->
                <div class="tableau_carte bordure_commande col-lg-12">
                  <h3>La météo : <?php echo "${jour_S} &nbsp;&nbsp;&nbsp; <img src='${icon_S}'>"; ?></h3>
                  <br/>
                  <h5>Date du : <?php echo "${date_S}";?></h5>
                  <h5>Prévision : <?php echo "${prev_S}";?></h5>
                  <h5><?php echo "Température prévu entre ${temp_min_S} et ${temp_max_S} degrés";?></h5>
                  <table>
                      <tr>
                        <th height="40" width="160">6H</th>
                        <th height="40" width="160">7H</th>
                        <th height="40" width="160">8H</th>
                        <th height="40" width="160">9H</th>
                        <th height="40" width="160">10H</th>
                        <th height="40" width="160">11H</th>
                        <th height="40" width="160">12H</th>
                      </tr>

                      <tr>
                        <td><?php echo "<img src='${heure_6_S}'>"; ?></td>
                        <td><?php echo "<img src='${heure_7_S}'>"; ?></td>
                        <td><?php echo "<img src='${heure_8_S}'>"; ?></td>
                        <td><?php echo "<img src='${heure_9_S}'>"; ?></td>
                        <td><?php echo "<img src='${heure_10_S}'>"; ?></td>
                        <td><?php echo "<img src='${heure_11_S}'>"; ?></td>
                        <td><?php echo "<img src='${heure_12_S}'>"; ?></td>
                      </tr>
                  </table>
                  <br/>
            	</div>

            	<!-- Dimanche -->
                <div class="tableau_carte bordure_commande col-lg-12">
                  <h3>La météo : <?php echo "${jour_D} &nbsp;&nbsp;&nbsp; <img src='${icon_D}'>"; ?></h3>
                  <br/>
                  <h5>Date du : <?php echo "${date_D}";?></h5>
                  <h5>Prévision : <?php echo "${prev_D}";?></h5>
                  <h5><?php echo "Température prévu entre ${temp_min_D} et ${temp_max_D} degrés";?></h5>
                  <table>
                      <tr>
                        <th height="40" width="160">6H</th>
                        <th height="40" width="160">7H</th>
                        <th height="40" width="160">8H</th>
                        <th height="40" width="160">9H</th>
                        <th height="40" width="160">10H</th>
                        <th height="40" width="160">11H</th>
                        <th height="40" width="160">12H</th>
                      </tr>

                      <tr>
                        <td><?php echo "<img src='${heure_6_D}'>"; ?></td>
                        <td><?php echo "<img src='${heure_7_D}'>"; ?></td>
                        <td><?php echo "<img src='${heure_8_D}'>"; ?></td>
                        <td><?php echo "<img src='${heure_9_D}'>"; ?></td>
                        <td><?php echo "<img src='${heure_10_D}'>"; ?></td>
                        <td><?php echo "<img src='${heure_11_D}'>"; ?></td>
                        <td><?php echo "<img src='${heure_12_D}'>"; ?></td>
                      </tr>
                  </table>
                  <br/>
            	</div>

            	<!-- Lundi -->
                <div class="tableau_carte bordure_commande col-lg-12">
                  <h3>La météo : <?php echo "${jour_L} &nbsp;&nbsp;&nbsp; <img src='${icon_L}'>"; ?></h3>
                  <br/>
                  <h5>Date du : <?php echo "${date_L}";?></h5>
                  <h5>Prévision : <?php echo "${prev_L}";?></h5>
                  <h5><?php echo "Température prévu entre ${temp_min_L} et ${temp_max_L} degrés";?></h5>
                  <table>
                      <tr>
                        <th height="40" width="160">6H</th>
                        <th height="40" width="160">7H</th>
                        <th height="40" width="160">8H</th>
                        <th height="40" width="160">9H</th>
                        <th height="40" width="160">10H</th>
                        <th height="40" width="160">11H</th>
                        <th height="40" width="160">12H</th>
                      </tr>

                      <tr>
                        <td><?php echo "<img src='${heure_6_L}'>"; ?></td>
                        <td><?php echo "<img src='${heure_7_L}'>"; ?></td>
                        <td><?php echo "<img src='${heure_8_L}'>"; ?></td>
                        <td><?php echo "<img src='${heure_9_L}'>"; ?></td>
                        <td><?php echo "<img src='${heure_10_L}'>"; ?></td>
                        <td><?php echo "<img src='${heure_11_L}'>"; ?></td>
                        <td><?php echo "<img src='${heure_12_L}'>"; ?></td>
                      </tr>
                  </table>
                  <br/>
            	</div>
            	<br/><br/>

            	

                



<?php include_once('../app/view/include/footer.inc.php'); ?>