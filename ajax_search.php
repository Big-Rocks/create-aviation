<?php

    $search_key = $_REQUEST['search_key'];

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=airplanedatabase', 'root', '');
        $result_content = null;
        if($search_key != ""){
            $result_content = $dbh->query('SELECT * FROM sheet WHERE make LIKE "%'.$search_key.'%" OR aircraft LIKE "%'.$search_key.'%" OR make = "'.$search_key.'" OR aircraft = "'.$search_key.'";');
        }
        $result_air = $dbh->query('SELECT * from sheet;');
        $result_maker = $dbh->query('SELECT DISTINCT make from sheet;');
        $response = array();
        $keywords = array();
        foreach($result_maker as $row) {
            array_push($keywords, $row['make']);
        }
        foreach ($result_air as $row_air) {
            array_push($keywords, $row_air['aircraft']);
        }
        $content_arr = array();
        $resp_text = "";
        $iterator = 0;
        $list_pagination = 10;
        if($result_content != null){
                $resp_text .= '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
                foreach($result_content as $row) {
                    $iterator++;
                    // if($list_pagination == $iterator){
                    //     break;
                    // }
                    $resp_text .= '<div class="card p-1 d-inline-block w-100 mb-2" id="air_list_'.$row['id'].'">
                              <div class="jet-selfie-list">
                                  <img src="images/plane.png" class="img-fluid">
                              </div>
                              <div class="jet-details pl-2 pl-sm-4 py-0 py-sm-2">
                                  <div class="details_left">
                                      <div class="jet_tittle">'.$row['aircraft'].'</div>
                                      <div class="jet-specify pb-0 pb-sm-2">
                                          <ul>
                                              <li>'.$row['prod_y_start'].'</li>
                                              <li>'.(intval($row['cruise_75'])).'</li>
                                              <li>Range '.(intval($row['range'])).' nmi</li>
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

                }
                $resp_text .= '</div>';
                $resp_text .= '<div class="tab-pane fade" id="box-view" role="tabpanel" aria-labelledby="box-view-tab">';
                $resp_text .= '<div class="row">';
                $iterator = 0;
		        $box_pagination = 9;
		        $display_css = 'inline-block';
            
		        foreach($result_content as $row) {
		            $iterator++;
		        	// if($box_pagination == $iterator){
		        	// 	break;
		        	// }
		        	$resp_text .= '<div class="col-md-6 col-lg-3 col-12 col-sm-6 mb-4" id="air_box_'.$row['id'].'">
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
		        }
                $resp_text .= '</div>';
                $resp_text .= '</div>';
                
        }
		
        // $response[0] = 
        $total_affect = 0;
        if($result_content != null){
            $total_affect = $result_content->rowCount();
        }
            
        $response = array($keywords, $resp_text, $total_affect);

        $myOBJ = json_encode($response);
        echo $myOBJ;

		$results = null;
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>