<?php
    $price_min = intval($_REQUEST['price_min']);
    $price_max = intval($_REQUEST['price_max']);
    $year_min = intval($_REQUEST['year_min']);
    $year_max = intval($_REQUEST['year_max']);
    $pax_min = intval($_REQUEST['pax_min']);
    $pax_max = intval($_REQUEST['pax_max']);
    $volume_min = intval($_REQUEST['volume_min']);
    $volume_max = intval($_REQUEST['volume_max']);
    $height_min = intval($_REQUEST['height_min']);
    $height_max = intval($_REQUEST['height_max']);
    $range_min = intval($_REQUEST['range_min']);
    $range_max = intval($_REQUEST['range_max']);
    $fuel_min = intval($_REQUEST['fuel_min']);
    $fuel_max = intval($_REQUEST['fuel_max']);
    $speed_min = intval($_REQUEST['speed_min']);
    $speed_max = intval($_REQUEST['speed_max']);
    $takeoff_min = intval($_REQUEST['takeoff_min']);
    $takeoff_max = intval($_REQUEST['takeoff_max']);
    $landing_min = intval($_REQUEST['landing_min']);
    $landing_max = intval($_REQUEST['landing_max']);
    $page_num = intval($_REQUEST['pageNumber']);

    $only_in_production = $_REQUEST['only_in_production'];  // bool
    $sort_by = $_REQUEST['sort_by'];
    $craft_type = $_REQUEST['craft_type'];
    $no_of_engine = $_REQUEST['no_of_engine'];
    $unit = $_REQUEST['unit'];
    $search_key = $_REQUEST['search_key'];
    $weight = $_REQUEST['weight'];  ///  not yet
    $pilot_weight = intval($_REQUEST['pilot_weight']); //////  not yet

    $sort_field_arr = array();
    $craft_arr = array();
    $no_of_engine_arr = array();

    $sort_field_arr['alpha_desc'] = array('aircraft','DESC');
    $sort_field_arr['alpha_asc'] = array('aircraft','ASC');
    $sort_field_arr['price_desc'] = array('price','DESC');
    $sort_field_arr['price_asc'] = array('price','ASC');
    $sort_field_arr['prod_sy_desc'] = array('prod_y_start','DESC');
    $sort_field_arr['prod_sy_asc'] = array('prod_y_start','ASC');
    $sort_field_arr['prod_ey_desc'] = array('prod_y_end','DESC');
    $sort_field_arr['prod_ey_asc'] = array('prod_y_end','ASC');
    $sort_field_arr['pax_desc'] = array('cabin_typical_pax','DESC');
    $sort_field_arr['pax_asc'] = array('cabin_typical_pax','ASC');
    $sort_field_arr['volume_desc'] = array('cabin_volume','DESC');
    $sort_field_arr['volume_asc'] = array('cabin_volume','ASC');
    $sort_field_arr['height_desc'] = array('cabin_height','DESC');
    $sort_field_arr['height_asc'] = array('cabin_height','ASC');
    $sort_field_arr['range_desc'] = array('range','DESC');
    $sort_field_arr['range_asc'] = array('range','ASC');
    $sort_field_arr['weight_desc'] = array('empty_weight','DESC');
    $sort_field_arr['weight_asc'] = array('empty_weight','ASC');
    $sort_field_arr['takeoff_desc'] = array('takeoff','DESC');
    $sort_field_arr['takeoff_asc'] = array('takeoff','ASC');
    $sort_field_arr['landing_desc'] = array('landing','DESC');
    $sort_field_arr['landing_asc'] = array('landing','ASC');
    $sort_field_arr['speed_desc'] = array('cruise_75','DESC');
    $sort_field_arr['speed_asc'] = array('cruise_75','ASC');

    $craft_arr['jet'] = 'jet';
    $craft_arr['turbo'] = 'turboprop';
    $craft_arr['piston'] = 'rotocraft';

    // echo $craft_arr[$craft_type];

    $no_of_engine_arr['all'] = '<> 0';
    $no_of_engine_arr['single'] = '= 1';
    $no_of_engine_arr['multi'] = '<> 1';
    $offset = ($page_num-1)*10;

    
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=airplanedatabase', 'root', '');

		$iterator = 0;
	    $list_pagination = 10;
	    $display_css = 'inline-block';
        if($only_in_production == 'true'){
            $results = $dbh->query('SELECT * FROM sheet WHERE aircraft = "'.$search_key.'" OR aircraft LIKE "%'.$search_key.'%" OR make = "'.$search_key.'" OR make LIKE "%'.$search_key.'%" AND craft_kind = "'.$craft_arr[$craft_type].'" AND price BETWEEN '.$price_min.' AND '.$price_max.' AND prod_y_end = 0 AND cabin_typical_pax BETWEEN '.$pax_min.' AND '.$pax_max.' AND cabin_volume BETWEEN '.$volume_min.' AND '.$volume_max.' AND cabin_height BETWEEN '.$height_min.' AND '.$height_max.' AND `range` BETWEEN '.$range_min.' AND '.$range_max.' AND fuel_burn BETWEEN '.$fuel_min.' AND '.$fuel_max.' AND cruise_75 BETWEEN '.$speed_min.' AND '.$speed_max.' AND takeoff BETWEEN '.$takeoff_min.' AND '.$takeoff_max.' AND landing BETWEEN '.$landing_min.' AND '.$landing_max.' AND no_of_engine '.$no_of_engine_arr[$no_of_engine].' ORDER BY '.$sort_field_arr[$sort_by][0].' '.$sort_field_arr[$sort_by][1].' LIMIT 10 OFFSET '.$offset.';');
        }else if($only_in_production == 'false'){
            $results = $dbh->query('SELECT * FROM sheet WHERE  craft_kind = "'.$craft_arr[$craft_type].'" AND price BETWEEN '.$price_min.' AND '.$price_max.' AND prod_y_end BETWEEN '.$year_min.' AND '.$year_max.' AND cabin_typical_pax BETWEEN '.$pax_min.' AND '.$pax_max.' AND cabin_volume BETWEEN '.$volume_min.' AND '.$volume_max.' AND cabin_height BETWEEN '.$height_min.' AND '.$height_max.' AND `range` BETWEEN '.$range_min.' AND '.$range_max.' AND fuel_burn BETWEEN '.$fuel_min.' AND '.$fuel_max.' AND cruise_75 BETWEEN '.$speed_min.' AND '.$speed_max.' AND takeoff BETWEEN '.$takeoff_min.' AND '.$takeoff_max.' AND landing BETWEEN '.$landing_min.' AND '.$landing_max.' AND no_of_engine '.$no_of_engine_arr[$no_of_engine].' ORDER BY '.$sort_field_arr[$sort_by][0].' '.$sort_field_arr[$sort_by][1].' LIMIT 10 OFFSET '.$offset.';');
        }
        if($unit == 'lbs'){
            $weight_coef = 1;
            $length_coef = 1;
            $inch_coef = 1;
            $speed_coef = 1;
            $nm_coef = 1;
            $nmi_placeholder = 'nmi';
        }else if($unit == 'kg'){
            $weight_coef = 0.453592;
            $length_coef = 0.3048;
            $inch_coef = 2.54;
            $speed_coef = 1.852;
            $nm_coef = 1.852;
            $nmi_placeholder = 'kmh';
        }
        $resp_text = "";

        $list_view_txt = array();
        foreach($results as $row) {
            $resp_text = '<div class="card p-1 d-inline-block w-100 mb-2" id="air_list_'.$row['id'].'">
                      <div class="jet-selfie-list">
                          <img src="images/plane.png" class="img-fluid">
                      </div>
                      <div class="jet-details pl-2 pl-sm-4 py-0 py-sm-2">
                          <div class="details_left">
                              <div class="jet_tittle">'.$row['aircraft'].'</div>
                              <div class="jet-specify pb-0 pb-sm-2">
                                  <ul>
                                      <li>'.$row['prod_y_start'].'</li>
                                      <li>'.(intval($row['cruise_75'])*$speed_coef).'</li>
                                      <li>Range '.(intval($row['range'])*$nm_coef).' '.$nmi_placeholder.'</li>
                                      <li>'.$row['cabin_typical_pax'].' passengers</li>
                                  </ul>
                              </div>
                              <div class="jet-compare">
                                  <div class="form-group mb-0">
                                  <input type="checkbox" id="com1">
                                  <label for="com1">Compare</label>
                                </div>
                              </div>
                              <div class="jet_price">
                                  $ '.$row['price'].'
                              </div>
                          </div>
                          <div class="details_right">
                              <a href="#" class="common-btn Show"> Buy /  Sell</a>
                          </div>
                      </div>
                  </div>';
                  array_push($list_view_txt, $resp_text);
                  
        }
			$box_view_txt = array();
		foreach($results as $row) {
			$resp_text = '<div class="col-md-6 col-lg-3 col-12 col-sm-6 mb-4" id="air_box_'.$row['id'].'">
						<div class="card jet-box">
							<div class="jet-selfie-view	">
							<img src="images/bplane.png" class="img-fluid">
						</div>
						<div class="px-3 py-3">
							<div class="jet_tittle">'.$row['aircraft'].'</div>
						<div class="jet-specify py-2">
						<ul>
							<li>'.$row['prod_y_start'].'</li>
							<li>'.$row['cruise_75'].'</li>
							<li>Range '.$row['range'].' nmi</li>
							<li>'.$row['cabin_typical_pax'].' passengers</li>
						</ul>
					</div>
					<div class="d-flex justify-content-between align-items-center pb-2">
						<div class="jet_price">
							$ '.$row['price'].'
						</div>
						<div class="jet-compare">
							<div class="form-group mb-0">
						      <input type="checkbox" id="com6">
						      <label for="com6">Compare</label>
						    </div>
						</div>
					</div>
					<a href="#" class="common-btn d-block"> Buy /  Sell</a>
						</div>
						</div>
					</div>';
            array_push($box_view_txt);
		}
        
        $total_affect = $results->rowCount();

        $response = array($list_view_txt, $box_view_txt, $total_affect);

        $myJSON = json_encode($list_view_txt);

        echo $myJSON;
		
        $results = null;	
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>