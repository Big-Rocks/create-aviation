////////////////////////////////////////////////////////////////////
//////                                                      ////////
//////// written by bigrocks89@outlook.com 2022_03_27_8_50_AM //////
//////                                                       ///////
////////////////////////////////////////////////////////////////////

// ajax_function
function do_ajax(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        const myObj = JSON.parse(this.responseText);
        document.getElementById("nav-tabContent").innerHTML = myObj[0];
        
        $('#total_affect').text(myObj[1]);
      }
    };
    xmlhttp.open("POST","ajax_bigrocks.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("price_min="+price_min+"&price_max="+price_max+"&year_min="+year_min+"&year_max="+year_max+"&pax_min="+pax_min+"&pax_max="+pax_max
    +"&volume_min="+volume_min+"&volume_max="+volume_max+"&height_min="+height_min+"&height_max="+height_max+"&range_min="+range_min+"&range_max="+range_max
    +"&fuel_min="+fuel_min+"&fuel_max="+fuel_max+"&speed_min="+speed_min+"&speed_max="+speed_max+"&takeoff_min="+takeoff_min+"&takeoff_max="+takeoff_max
    +"&landing_min="+landing_min+"&landing_max="+landing_max+"&only_in_production="+only_in_production+"&sort_by="+sort_by+"&craft_type="+craft_type
    +"&no_of_engine="+no_of_engine+"&unit="+unit+"&weight="+weight+"&pilot_weight="+pilot_weight+"&search_key="+search_key);
}

var countries = [];
var search_key ="";
var total_affected;
function do_search(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        const myObj = JSON.parse(this.responseText);
        countries = myObj[0];
        if(search_key != ''){
            document.getElementById("nav-tabContent").innerHTML = myObj[1];
            $('#total_affect').text(myObj[2]);
        }
      }
    };
    xmlhttp.open("POST","ajax_search.php",false);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("search_key="+search_key);
}

do_search();

(function () {
    'use strict';
    var init = function () {                

        

        var price_slider = new rSlider({
            target: '#price_slider',
            values: {min: 3000000, max: 40000000},
            step: 1000000,
            range: true,
            set: [3000000, 40000000],
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                price_min = val_arr[0];
                price_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

                    (function(name) {
                      var container = $('#pagination-' + name);
                      container.pagination({
                        dataSource: "../ajax_bigrocks.php",
                        locator: 'items',
                        totalNumber: 120,
                        pageSize: 10,
                        ajax: {
                          beforeSend: function() {
                            container.prev().html('Loading data from flickr.com ...');
                          },
                          type : "POST",
                          data: {
                            price_min: price_min,
                            price_max: price_max,
                            year_min: year_min,
                            year_max: year_max,
                            pax_min: pax_min,
                            pax_max: pax_max,
                            volume_min: volume_min,
                            volume_max: volume_max,
                            height_min: height_min,
                            height_max: height_max,
                            range_min: range_min,
                            range_max: range_max,
                            fuel_min: fuel_min,
                            fuel_max: fuel_max,
                            speed_min: speed_min,
                            speed_max: speed_max,
                            takeoff_min: takeoff_min,
                            takeoff_max: takeoff_max,
                            landing_min: landing_min,
                            landing_max: landing_max,
                            only_in_production: only_in_production,
                            sort_by: sort_by,
                            craft_type: craft_type,
                            no_of_engine: no_of_engine,
                            unit: unit,
                            weight: weight,
                            pilot_weight: pilot_weight,
                            search_key: search_key,
                            page_num : page_num
                            } 
                        },
                        callback: function(response, pagination) {
                          window.console && console.log(22, response, pagination);
                                        
                          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
                            var pagination_size = pagination.pageSize;
                            page_num = pagination.pageNumber;
                          $.each(response, function (index, item) {
                            //   console.log(index);
                              if(pagination_size == index){
                                  return false;
                              }
                            // dataHtml += '<li>' + item + '</li>';
                            dataHtml += item;
                          });
                  
                          dataHtml += '</div>';
                          
                          container.prev().html(dataHtml);
                        }
                      })
                    })('demo1');
                  })
            }
        });

        var landing_slider = new rSlider({
            target: '#landing_slider',
            values: {min: landing_min , max: landing_max},
            step: 10,
            range: true,
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                landing_min = val_arr[0];
                landing_max = val_arr[1];
                if(inited == false){
                    return;
                }                
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });

        var take_off_slider = new rSlider({
            target: '#take_off_slider',
            values: {min: takeoff_min, max: takeoff_max},
            step: 10,
            range: true,
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                takeoff_min = val_arr[0];
                takeoff_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });

        var speed_slider = new rSlider({
            target: '#speed_slider',
            values: {min: speed_min, max: speed_max},
            step: 10,
            range: true,
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                speed_min = val_arr[0];
                speed_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });


        var fuel_slider = new rSlider({
            target: '#fuel_slider',
            values: {min: fuel_min, max: fuel_max},
            step: 10,
            range: true,
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                fuel_min = val_arr[0];
                fuel_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });

        var range_slider = new rSlider({
            target: '#range_slider',
            values: {min: range_min, max: range_max},
            step: 10,
            range: true,
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                range_min = val_arr[0];
                range_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });

        var volume_slider = new rSlider({
            target: '#volume_slider',
            values: {min: volume_min, max: volume_max},
            step: 10,
            range: true,
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                volume_min = val_arr[0];
                volume_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });

        var height_slider = new rSlider({
            target: '#height_slider',
            values: {min: height_min, max: height_max},
            step: 0.5,
            range: true,
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                height_min = val_arr[0];
                height_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });

        var pax_slider = new rSlider({
            target: '#pax_slider',
            values: {min: pax_min, max: pax_max},
            step: 3,
            range: true,
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                pax_min = val_arr[0];
                pax_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });

        var prod_y_slider = new rSlider({
            target: '#prod_y_slider',
            values: {min: 1950, max: 2023},
            step: 1,
            range: true,
            set: [1950, 2023],
            scale: false,
            labels:false,
            onChange: function (vals) {
                var val_arr = vals.split(',');
                year_min = val_arr[0];
                year_max = val_arr[1];
                if(inited == false){
                    return;
                }
                $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
            }
        });
        return true;
    };
    window.onload = init;
})();


$("#show_only").click(function() {
    if($(this).is(":checked")) {
        only_in_production = true;
        $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
    }else{
        only_in_production = false;
        $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
    }
  });


  
//next page button 
// $('body').on('click','#next_page', function(event){
//     event.preventDefault();
//     var page_num = $(this).closest('li').siblings('.active').find('a').text();
//     page_num = parseInt(page_num);
//     page_num++;
//     var ac_sib = $(this).closest('li').siblings('.active');
//     ac_sib.next().addClass('active');
//     ac_sib.removeClass('active');
//     // console.log(page_num);

// });

// prev page button
// $('body').on('click','#prev_page', function(event){
//     event.preventDefault();
//     var page_num = $(this).closest('li').siblings('.active').find('a').text();
//     page_num = parseInt(page_num);
//     page_num--;
//     var ac_sib = $(this).closest('li').siblings('.active');
//     ac_sib.prev().addClass('active');
//     ac_sib.removeClass('active');
//     // console.log(page_num);

// });

// show search panel
$('.Show').on('click', function(){
    $(this).css('display','none');
    $('#target').css('display','block');
});

// hide search panel
$('.Hide').on('click', function(){
    $('.Show').css('display','inline-block');
    $('#target').css('display','none');
});

// sort_by
$('#sort_by').on('change', function(){
    sort_by = $(this).val();
    $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
});

// craft_tyoe
$('#craft_type').on('change', function(){
    craft_type = $(this).val();
    $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
});

// no_of_engine
$('#no_of_engine').on('change', function(){
    no_of_engine = $(this).val();
    $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
});

// unit
$('#unit').on('change', function(){
    unit = $(this).val();
    $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
    if(unit == 'kg'){
        var weight_coef = 0.453592;
        var length_coef = 0.3048;
        var inch_coef = 2.54;
        var speed_coef = 1.852;
        var nm_coef = 1.852;
    }
});

// weight
$('#weight').on('change', function(){
    weight = $(this).val();
    $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
});

// pilot_weight
$('#pilot_weight').on('keyup', function(){
    pilot_weight = $(this).val();
    $(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })
});

// search_box
$('#maker_model_search').on('keyup',function(e){
    var txt = $(this).val();
    search_key = txt;
    if(txt == '' || txt == undefined){
        return;
    }else{
        if(e.keyCode == 13){
            do_search();
        }
    }
});

function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                search_key = this.getElementsByTagName("input")[0].value;
                do_search();
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
  }


autocomplete(document.getElementById("maker_model_search"), countries);

$(document).ready(function(){
    $('body').on('click',function(){
        inited = true;
    });

    $('pagination-demo1').on('click','a', function(){
        window.scrollTo(0,document.body.scrollHeight);
    });
});
//////////////////////////////////////////////////////////////////////////////
//    pagination /////////////////////////////////////////////////////////////
var page_num = 1;
var total_num =0;
$(function() {

    (function(name) {
      var container = $('#pagination-' + name);
      container.pagination({
        dataSource: "../ajax_bigrocks.php",
        locator: 'items',
        totalNumber: 120,
        pageSize: 10,
        ajax: {
          beforeSend: function() {
            container.prev().html('Loading data from flickr.com ...');
          },
          type : "POST",
          data: {
            price_min: price_min,
            price_max: price_max,
            year_min: year_min,
            year_max: year_max,
            pax_min: pax_min,
            pax_max: pax_max,
            volume_min: volume_min,
            volume_max: volume_max,
            height_min: height_min,
            height_max: height_max,
            range_min: range_min,
            range_max: range_max,
            fuel_min: fuel_min,
            fuel_max: fuel_max,
            speed_min: speed_min,
            speed_max: speed_max,
            takeoff_min: takeoff_min,
            takeoff_max: takeoff_max,
            landing_min: landing_min,
            landing_max: landing_max,
            only_in_production: only_in_production,
            sort_by: sort_by,
            craft_type: craft_type,
            no_of_engine: no_of_engine,
            unit: unit,
            weight: weight,
            pilot_weight: pilot_weight,
            search_key: search_key,
            page_num : page_num
            } 
        },
        callback: function(response, pagination) {
          window.console && console.log(22, response, pagination);
						
          var dataHtml = '<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">';
            var pagination_size = pagination.pageSize;
            page_num = pagination.pageNumber;
          $.each(response, function (index, item) {
            //   console.log(index);
              if(pagination_size == index){
                  return false;
              }
            // dataHtml += '<li>' + item + '</li>';
            dataHtml += item;
          });
  
          dataHtml += '</div>';
          
          container.prev().html(dataHtml);
        }
      })
    })('demo1');
  })

