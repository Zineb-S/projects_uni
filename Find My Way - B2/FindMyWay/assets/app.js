/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

//[advanced form element Javascript]


$(function () {
    "use strict";

    //Initialize Select2 Elements
    $('.select2').select2();

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    //Money Euro
    $('[data-mask]').inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('.ichack-input input[type="checkbox"].minimal, .ichack-input input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'icheckbox_minimal-blue'
    });
    //Red color scheme for iCheck
    $('.ichack-input input[type="checkbox"].minimal-red, .ichack-input input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('.ichack-input input[type="checkbox"].flat-red, .ichack-input input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });

    //Colorpicker
    $('.my-colorpicker1').colorpicker();
    //color picker with addon
    $('.my-colorpicker2').colorpicker();

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
	
	//Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='demo1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='demo2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='demo3']").TouchSpin();
        $("input[name='demo3_1']").TouchSpin({
            initval: 40
        });
        $("input[name='demo4']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
	
  });

  //[app Javascript]


$(function () {
    "use strict";    
		
	 // chat app scrolling
  
	  $('#chat-app').slimScroll({
		height: '580px'
	  });	
  
	  $('#chat-contact').slimScroll({
		height: '680px'
	  });
	
  }); // End of use strict

  //[app contact Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the Data Table

$(function () {
    "use strict";

    
		//Enable iCheck plugin for checkboxes
		//iCheck for checkbox and radio inputs
		$('.media-list input[type="checkbox"]').iCheck({
		  checkboxClass: 'icheckbox_flat-blue',
		  radioClass: 'iradio_flat-blue'
		});

		//Enable check and uncheck all functionality
		$(".checkbox-toggle").click(function () {
		  var clicks = $(this).data('clicks');
		  if (clicks) {
			//Uncheck all checkboxes
			$(".media-list input[type='checkbox']").iCheck("uncheck");
			$(".ion", this).removeClass("ion-android-checkbox-outline").addClass('ion-android-checkbox-outline-blank');
		  } else {
			//Check all checkboxes
			$(".media-list input[type='checkbox']").iCheck("check");
			$(".ion", this).removeClass("ion-android-checkbox-outline-blank").addClass('ion-android-checkbox-outline');
		  }
		  $(this).data("clicks", !clicks);
		});
		
		//Handle starring for glyphicon and font awesome
		$(".app-contact-star").click(function (e) {
		  e.preventDefault();
		  //detect type
		  var $this = $(this).find("a > i");
		  var glyph = $this.hasClass("glyphicon");
		  var fa = $this.hasClass("fa");

		  //Switch states
		  if (glyph) {
			$this.toggleClass("glyphicon-star");
			$this.toggleClass("glyphicon-star-empty");
		  }

		  if (fa) {
			$this.toggleClass("fa-star");
			$this.toggleClass("fa-star-o");
		  }
		});
	
  }); // End of use strict

  //[app Javascript]


$(function () {
    "use strict";
    
		// donut chart
		$('.donut').peity('donut');
		
		// bar chart
		$(".bar").peity("bar");	
	
  }); // End of use strict

  //[c3 charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";
	
	var a = c3.generate({
        bindto: "#axis-rotated",
        size: { height: 350 },
        color: { pattern: ["#689f38", "#38649f"] },
        data: {
            columns: [
                ["data1", 150, 350, 190, 500, 400, 240],
                ["data2", 60, 160, 45, 60, 45, 65]
            ],
            types: { data1: "bar" }
        },
        axis: { rotated: !0 },
        grid: { y: { show: !0 } }
    });
	
	 var t = c3.generate({
        bindto: "#axis-category",
        size: { height: 350 },
        color: { pattern: ["#38649f", "#689f38"] },
        data: {
            columns: [
                ["data", 120, 350, 185, 450, 90, 158, 90, 150, 302]
            ]
        },
        axis: { x: { type: "data", categories: ["2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018"] } },
        grid: { y: { show: !0 } }
    });
	
	var i = c3.generate({
        bindto: "#axis-tick-culling",
        size: { height: 350 },
        color: { pattern: ["#389f99", "#ee1044"] },
        data: {
            columns: [
                ["data", 10, 252, 125, 421, 131, 269, 45, 352, 142, 425, 125, 248, 41, 212, 154, 424, 136]
            ]
        },
        axis: { x: { type: "category", tick: { culling: { max: 10 } } } },
        grid: { y: { show: !0 } }
    });
	
	var i = c3.generate({
        bindto: "#axis-tick-fitting",
        size: { height: 350 },
        color: { pattern: ["#ff8f00", "#689f38"] },
        data: {
            x: "x",
            columns: [
                ["x", "2018-04-21", "2018-03-21", "2018-02-21", "2018-01-21", "2017-12-21", "2017-11-21", "2017-10-21"],
                ["data", 254, 512, 158, 41, 154, 548, 215]

            ]
        },
        axis: { x: { type: "timeseries", tick: { fit: !0, format: "%e %b %y" } } },
        grid: { y: { show: !0 } }
    });
	
	var t = c3.generate({
        bindto: "#axis-timezone",
        size: { height: 350 },
        color: { pattern: ["#673ab7", "#4974e0"] },
        data: {
            x: "x",
            xFormat: "%Y",
            columns: [
                	['x', '2010-12-22', '2011-12-24', '2012-12-28', '2013-12-31', '2014-01-01', '2015-01-02', '2016-01-03', '2017-01-04', '2018-01-05'],
					['x', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
					['data1', 50, 250, 125, 452, 189, 269, 548, 125, 65],
					['data2', 142, 324, 245, 562, 268, 345, 412, 214, 32]

            ]
        },
        axis: { x: { type: "timeseries", localtime: !1, tick: { format: "%Y-%m-%d %H:%M:%S" } } },
        grid: { y: { show: !0 } }
    });
	
	 var o = c3.generate({
        bindto: "#y-axis",
        size: { height: 350 },
        color: { pattern: ["#2196f3", "#ef0065"] },
        data: {
            columns: [
                ["sample", 30, 200, 100, 400, 150, 2500]
            ]
        },
        axis: { y: { tick: { format: d3.format("$,") } } },
        grid: { y: { show: !0 } }
    });
	
	var n = c3.generate({
        bindto: "#range-y-axis",
        size: { height: 350 },
        color: { pattern: ["#3f51b5", "#faa700"] },
        data: {
            columns: [
                ["sample", 30, -200, 100, 300, 150, -250, 350, 150, 400, -50]
            ]
        },
        axis: { y: { max: 400, min: -400 } },
        grid: { y: { show: !0 } }
    });
	
    
  });

  //[c3 charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";
	
	var t = c3.generate({
        bindto: "#bar-chart",
        size: { height: 350 },
        color: { pattern: ["#689f38"] },
        data: {
            columns: [
                ["option1", 30, 200, 100, 400, 150, 250]
            ],
            type: "bar"
        },
        axis: { rotated: !0 },
        grid: { y: { show: !0 } }
    });
	
	// Callback that creates and populates a data table, instantiates the column chart, passes in the data and draws it.
    var columnChart = c3.generate({
        bindto: '#column-chart',
        size: { height: 350 },
        color: {
            pattern: ['#38649f', '#389f99', '#ee1044']
        },


        // Create the data table.
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
            	['data2', 130, 100, 140, 200, 150, 50]
            ],
            type: 'bar'
        },
        bar: {
            width: {
                ratio: 0.9 // this makes bar width 50% of length between ticks
            }
            // or
            //width: 100 // this makes bar width 100px
        },
        grid: {
            y: {
                show: true
            }
        }
    });

    // Instantiate and draw our chart, passing in some options.
    setTimeout(function() {
        columnChart.load({
            columns: [
                ['data3', 130, -150, 200, 300, -200, 100]
            ]
        });
    }, 1000);
	
	var o = c3.generate({
        bindto: "#donut-chart",
        color: { pattern: ["#673ab7", "#4974e0", "#3db76b"] },
        data: {
            columns: [
                ['data1', 200],
            	['data2', 100],
                ['data3', 50]
            ],
            type: "donut",
            onclick: function(o, n) { console.log("onclick", o, n) },
            onmouseover: function(o, n) { console.log("onmouseover", o, n) },
            onmouseout: function(o, n) { console.log("onmouseout", o, n) }
        },
        donut: { title: "Total Data" }
    });
    setTimeout(function() {
            o.load({
                columns: [
                    ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
					["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
					["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2]
                ]
            })
        }, 1500),
        setTimeout(function() { o.unload({ ids: "data1" }), o.unload({ ids: "data2" }), o.unload({ ids: "data3" })}, 2500)
	
	var o = c3.generate({
        bindto: "#pie-chart",
        color: { pattern: ['#38649f', '#389f99', '#ee1044'] },
        data: {
            columns: [
                ['data1', 30],
            	['data2', 130],
                ['data3', 10]
            ],
            type: "pie",
            onclick: function(o, n) { console.log("onclick", o, n) },
            onmouseover: function(o, n) { console.log("onmouseover", o, n) },
            onmouseout: function(o, n) { console.log("onmouseout", o, n) }
        }
    });
    setTimeout(function() {
        o.load({
            columns: [
                ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
				["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
				["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2]
            ]
        })
    }, 1500), setTimeout(function() { o.unload({ ids: "data1" }), o.unload({ ids: "data2" }), o.unload({ ids: "data3" }) }, 2500)
	
	
	var a = c3.generate({
        bindto: "#stacked-bar",
        size: { height: 400 },
        color: { pattern: ["#689f38", "#38649f", "#389f99", "#ee1044"] },
        data: {
            columns: [
                ['data1', -30, 200, 200, 400, -150, 250],
				['data2', 130, 100, -100, 200, -150, 50],
				['data3', -230, 200, 200, -300, 250, 250]
            ],
            type: "bar",
            groups: [
                ["data1", "data2"]
            ]
        },
        grid: { y: { show: !0 } },
        axis: { rotated: !0 }
    });
    setTimeout(function() {
        a.groups([
            ["data1", "data2", "data3"]
        ])
    }, 1e3), setTimeout(function() {
        a.load({
            columns: [
                ['data4', 100, -50, 150, 200, -300, -100]
            ]
        })
    }, 1500), setTimeout(function() {
        a.groups([
            ["data1", "data2", "data3", "data4"]
        ])
    }, 2e3)
	
	
	// Callback that creates and populates a data table, instantiates the stacked column chart, passes in the data and draws it.
    var stackedColumnChart = c3.generate({
        bindto: '#stacked-column',
        size: { height: 400 },
        color: {
            pattern: ['#673ab7', '#4974e0', '#3db76b', '#ec407a']
        },

        // Create the data table.
        data: {
            columns: [
                ['data1', -30, 200, 200, 400, -150, 250],
				['data2', 130, 100, -100, 200, -150, 50],
				['data3', -230, 200, 200, -300, 250, 250]
            ],
            type: 'bar',
            groups: [
                ["data1", "data2"]
            ]
        },
        grid: {
            y: {
                show: true
            }
        },
    });

    // Instantiate and draw our chart, passing in some options.
    setTimeout(function() {
        stackedColumnChart.groups([
            ["data1", "data2", "data3"]
        ]);
    }, 1000);

    setTimeout(function() {
        stackedColumnChart.load({
            columns: [
                ['data4', 100, -50, 150, 200, -300, -100]
            ]
        });
    }, 1500);

    setTimeout(function() {
        stackedColumnChart.groups([
            ["data1", "data2", "data3", "data4"]
        ]);
    }, 2000);
	
    
  });

  //[c3 charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";
	
	
	
	
	 var n = c3.generate({
        bindto: "#column-oriented",
        size: { height: 350 },
        color: { pattern: ['#38649f', '#389f99', '#ee1044'] },
        data: {
            columns: [
                ['data1', 30, 20, 50, 40, 60, 50],
				['data2', 200, 130, 90, 240, 130, 220],
				['data3', 300, 200, 160, 400, 250, 250]
            ]
        },
        grid: { y: { show: !0 } }
    });
	
	
	
	
	var a = c3.generate({
        bindto: "#data-color",
        size: { height: 350 },
        data: {
            columns: [
                ['data1', 30, 20, 50, 40, 60, 50],
				['data2', 200, 130, 90, 240, 130, 220],
				['data3', 300, 200, 160, 400, 250, 250]
            ],
            type: "bar",
            colors: { data1: "#38649f", data2: "#389f99" },
            color: function(a, o) { return o.id && "data3" === o.id ? d3.rgb(a).darker(o.value / 150) : a }
        },
        grid: { y: { show: !0 } }
    });
	
	
	
	var a = c3.generate({
        bindto: "#data-order",
        size: { height: 350 },
        color: { pattern: ["#2196f3", "#7f21f3", "#00bfa5", "#f32184", "#e2e023"] },
        data: {
            columns: [
                ['data1', 130, 200, 320, 400, 530, 750],
				['data2', -130, 10, 130, 200, 150, 250],
				['data3', -130, -50, -10, -200, -250, -150]
            ],
            type: "bar",
            groups: [
                ["data1", "data2", "data3"]
            ],
            order: "desc"
        },
        grid: { x: { show: !0 } }
    });
    setTimeout(function() {
        a.load({
            columns: [
                ['data4', 1200, 1300, 1450, 1600, 1520, 1820],
            ]
        })
    }, 1e3), setTimeout(function() {
        a.load({
            columns: [
                ['data5', 200, 300, 450, 600, 520, 820],
            ]
        })
    }, 2e3), setTimeout(function() {
        a.groups([
            ["data1", "data2", "data3", "data4", "data5"]
        ])
    }, 3e3)
	
	
	
	var o = c3.generate({
        bindto: "#row-oriented",
        size: { height: 350 },
        color: { pattern: ['#38649f', '#389f99', '#ee1044'] },
        data: {
            rows: [
                ['data1', 'data2', 'data3'],
				[90, 120, 300],
				[40, 160, 240],
				[50, 200, 290],
				[120, 160, 230],
				[80, 130, 300],
				[90, 220, 320],
            ]
        },
        grid: { y: { show: !0 } }
    });
	
	
	
	
	var o = c3.generate({
        bindto: "#category-data",
        size: { height: 350 },
        color: { pattern: ['#389f99', '#ee1044'] },
        data: {
            x: "x",
            columns: [
                ['x', 'www.site1.com', 'www.site2.com', 'www.site3.com', 'www.site4.com'],
				['download', 30, 200, 100, 400],
				['loading', 90, 100, 140, 200],
            ],
            groups: [
                ["download", "loading"]
            ],
            type: "bar"
        },
        axis: { x: { type: "category" } },
        grid: { y: { show: !0 } }
    });
    setTimeout(function() {
        o.load({
            columns: [
                ['x', 'www.siteA.com', 'www.siteB.com', 'www.siteC.com', 'www.siteD.com'],
				['download', 130, 200, 150, 350],
				['loading', 190, 180, 190, 140],
            ]
        })
    }, 1e3), setTimeout(function() {
        o.load({
            columns: [
                ['x', 'www.siteE.com', 'www.siteF.com', 'www.siteG.com'],
				['download', 30, 300, 200],
				['loading', 90, 130, 240],
            ]
        })
    }, 2e3), setTimeout(function() {
        o.load({
            columns: [
                ['x', 'www.site1.com', 'www.site2.com', 'www.site3.com', 'www.site4.com'],
				['download', 130, 300, 200, 470],
				['loading', 190, 130, 240, 340],
            ]
        })
    }, 3e3), setTimeout(function() {
        o.load({
            columns: [
                ['download', 30, 30, 20, 170],
            	['loading', 90, 30, 40, 40],
            ]
        })
    }, 4e3), setTimeout(function() { o.load({ url: "../c3_string_x.csv" }) }, 5e3);
	
	
	
	
    
  });

  //[c3 charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";
	
	
	var t = c3.generate({
        bindto: "#line-chart",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#0bb2d4", "#17b3a3"] },
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
            	['data2', 50, 20, 10, 40, 15, 25]
            ]
        },
        grid: { y: { show: !0, stroke: "#faa700" } }
    });
    setTimeout(function() {
        t.load({
            columns: [
                ['data1', 230, 190, 300, 500, 300, 400]
            ]
        })
    }, 1e3), setTimeout(function() {
        t.load({
            columns: [
                ['data3', 130, 150, 200, 300, 200, 100]
            ]
        })
    }, 1500), setTimeout(function() { t.unload({ ids: "data1" }) }, 2e3)
	
	 
	
    var a = c3.generate({
        bindto: "#area-chart",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#3e8ef7", "#ff4c52"] },
        data: {
            columns: [
                ['data1', 300, 350, 300, 0, 0, 0],
            	['data2', 130, 100, 140, 200, 150, 50]

            ],
            types: { data1: "area", data2: "area-spline" }
        },
        grid: { y: { show: !0 } }
    });
	
	
	
	
	var n = c3.generate({
        bindto: "#spline-chart",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#17b3a3", "#3e8ef7"] },
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
            	['data2', 130, 100, 140, 200, 150, 50]
            ],
            type: "spline"
        },
        grid: { y: { show: !0 } }
    });
	
	

    // Callback that creates and populates a data table, instantiates the line region chart, passes in the data and draws it.
    var lineRegionChart = c3.generate({
        bindto: '#line-region',
        size: { height: 350 },
        point: {
            r: 4
        },
        color: {
            pattern: ['#0bb2d4', '#3e8ef7']
        },

        // Create the data table.
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
            	['data2', 50, 20, 10, 40, 15, 25]
            ],
            regions: {
                'data1': [{ 'start': 1, 'end': 2, 'style': 'dashed' }, { 'start': 3 }], // currently 'dashed' style only
                'data2': [{ 'end': 3 }]
            }
        },
        grid: {
            y: {
                show: true
            }
        }
    });
	
	
	
	
	
	
	var o = c3.generate({
        bindto: "#simple-xy",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#0bb2d4", "#17b3a3"] },
        data: {
            x: "x",
            columns: [
                ['x', 30, 50, 100, 230, 300, 310],
				['data1', 30, 200, 100, 400, 150, 250],
				['data2', 130, 300, 200, 300, 250, 450]
            ]
        },
        grid: { y: { show: !0 } }
    });
    setTimeout(function() {
        o.load({
            columns: [
                ['data1', 100, 250, 150, 200, 100, 350]
            ]
        })
    }, 1e3), setTimeout(function() {
        o.load({
            columns: [
                ['data3', 80, 150, 100, 180, 80, 150]
            ]
        })
    }, 1500), setTimeout(function() { o.unload({ ids: "data2" }) }, 2e3)
	
	
	
	
	
	
	
	
    
  });
  //[c3 charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function() {
    var t = c3.generate({
        bindto: "#multiple-xy",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#3e8ef7", "#ff4c52"] },
        data: {
            xs: { data1: "x1", data2: "x2" },
            columns: [
                ['x1', 10, 30, 45, 50, 70, 100],
				['x2', 30, 50, 75, 100, 120],
				['data1', 30, 200, 100, 400, 150, 250],
				['data2', 20, 180, 240, 100, 190]
            ]
        },
        grid: { y: { show: !0 } }
    });
});

//[c3 charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function() {
    var t = c3.generate({
        bindto: "#step-chart",
        size: { height: 350 },
        color: { pattern: ["#2962FF", "#4fc3f7"] },
        data: {
            columns: [
                ['data1', 300, 350, 300, 0, 0, 100],
            	['data2', 130, 100, 140, 200, 150, 50]
            ],
            types: { data1: "step", data2: "area-step" }
        },
        grid: { y: { show: !0 } }
    });
});

//[calendar Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the event calendar


!function($) {
    "use strict";

    var CalendarApp = function() {
        this.$body = $("body")
        this.$calendar = $('#calendar'),
        this.$event = ('#external-events div.external-event'),
        this.$categoryForm = $('#add-new-events form'),
        this.$extEvents = $('#external-events'),
        this.$modal = $('#my-event'),
        this.$saveCategoryBtn = $('.save-category'),
        this.$calendarObj = null
    };


    /* on drop */
    CalendarApp.prototype.onDrop = function (eventObj, date) { 
        var $this = this;
            // retrieve the dropped element's stored Event Object
            var originalEventObject = eventObj.data('eventObject');
            var $categoryClass = eventObj.attr('data-class');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            // assign it the date that was reported
            copiedEventObject.start = date;
            if ($categoryClass)
                copiedEventObject['className'] = [$categoryClass];
            // render the event on the calendar
            $this.$calendar.fullCalendar('renderEvent', copiedEventObject, true);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                eventObj.remove();
            }
    },
    /* on click on event */
    CalendarApp.prototype.onEventClick =  function (calEvent, jsEvent, view) {
        var $this = this;
            var form = $("<form></form>");
            form.append("<label>Change event name</label>");
            form.append("<div class='input-group'><input class='form-control' type=text value='" + calEvent.title + "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>");
            $this.$modal.modal({
                backdrop: 'static'
            });
            $this.$modal.find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                $this.$calendarObj.fullCalendar('removeEvents', function (ev) {
                    return (ev._id == calEvent._id);
                });
                $this.$modal.modal('hide');
            });
            $this.$modal.find('form').on('submit', function () {
                calEvent.title = form.find("input[type=text]").val();
                $this.$calendarObj.fullCalendar('updateEvent', calEvent);
                $this.$modal.modal('hide');
                return false;
            });
    },
    /* on select */
    CalendarApp.prototype.onSelect = function (start, end, allDay) {
        var $this = this;
            $this.$modal.modal({
                backdrop: 'static'
            });
            var form = $("<form></form>");
            form.append("<div class='row'></div>");
            form.find(".row")
                .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Event Name</label><input class='form-control' placeholder='Insert Event Name' type='text' name='title'/></div></div>")
                .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Category</label><select class='form-control' name='category'></select></div></div>")
                .find("select[name='category']")
                .append("<option value='bg-danger'>Danger</option>")
                .append("<option value='bg-success'>Success</option>")
                .append("<option value='bg-purple'>Purple</option>")
                .append("<option value='bg-primary'>Primary</option>")
                .append("<option value='bg-pink'>Pink</option>")
                .append("<option value='bg-info'>Info</option>")
                .append("<option value='bg-warning'>Warning</option></div></div>");
            $this.$modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                form.submit();
            });
            $this.$modal.find('form').on('submit', function () {
                var title = form.find("input[name='title']").val();
                var beginning = form.find("input[name='beginning']").val();
                var ending = form.find("input[name='ending']").val();
                var categoryClass = form.find("select[name='category'] option:checked").val();
                if (title !== null && title.length != 0) {
                    $this.$calendarObj.fullCalendar('renderEvent', {
                        title: title,
                        start:start,
                        end: end,
                        allDay: false,
                        className: categoryClass
                    }, true);  
                    $this.$modal.modal('hide');
                }
                else{
                    alert('You have to give a title to your event');
                }
                return false;
                
            });
            $this.$calendarObj.fullCalendar('unselect');
    },
    CalendarApp.prototype.enableDrag = function() {
        //init events
        $(this.$event).each(function () {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
        });
    }
    /* Initializing */
    CalendarApp.prototype.init = function() {
        this.enableDrag();
        /*  Initialize the calendar  */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var form = '';
        var today = new Date($.now());

        var defaultEvents =  [{
                title: 'Released Ample Admin!',                
                start: '2017-08-08',
				end: '2017-08-08',
                className: 'bg-info'
            }, {
                title: 'This is today check date',
                start: today,
                end: today,
                className: 'bg-danger'
            }, {
                title: 'This is your birthday',                
                start: '2017-09-08',
				end: '2017-09-08',
                className: 'bg-info'
            },
              {
                title: 'Hanns birthday',                
                start: '2017-10-08',
				end: '2017-10-08',
                className: 'bg-danger'
            },{
                title: 'Like it?',
                start: new Date($.now() + 784800000),
                className: 'bg-success'
            }];

        var $this = this;
        $this.$calendarObj = $this.$calendar.fullCalendar({
            slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
            minTime: '08:00:00',
            maxTime: '19:00:00',  
            defaultView: 'month',  
            handleWindowResize: true,   
             
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: defaultEvents,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            drop: function(date) { $this.onDrop($(this), date); },
            select: function (start, end, allDay) { $this.onSelect(start, end, allDay); },
            eventClick: function(calEvent, jsEvent, view) { $this.onEventClick(calEvent, jsEvent, view); }

        });

        //on new event
        this.$saveCategoryBtn.on('click', function(){
            var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
            var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
            if (categoryName !== null && categoryName.length != 0) {
                $this.$extEvents.append('<div class="m-15 external-event bg-' + categoryColor + '" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="fa fa-hand-o-right"></i>' + categoryName + '</div>')
                $this.enableDrag();
            }

        });
    },

   //init CalendarApp
    $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp
    
}(window.jQuery),// End of use strict

//initializing CalendarApp
function($) {
    "use strict";
    $.CalendarApp.init()
	
}(window.jQuery);// End of use strict

//[Dashboard Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)

// ------------------------------

var Widgetschart = function() {

    

    

    // Simple sparklines
    var _sparklinesWidget = function(element, chartType, qty, chartHeight, interpolation, duration, interval, color) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if(element) {


            // Basic setup
            // ------------------------------

            // Define main variables
            var d3Container = d3.select(element),
                margin = {top: 0, right: 0, bottom: 0, left: 0},
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right,
                height = chartHeight - margin.top - margin.bottom;


            // Generate random data (for demo only)
            var data = [];
            for (var i=0; i < qty; i++) {
                data.push(Math.floor(Math.random() * qty) + 5);
            }


            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.scale.linear().range([0, width]);

            // Vertical
            var y = d3.scale.linear().range([height - 5, 5]);


            // Set input domains
            // ------------------------------

            // Horizontal
            x.domain([1, qty - 3]);

            // Vertical
            y.domain([0, qty]);
                

            // Construct chart layout
            // ------------------------------

            // Line
            var line = d3.svg.line()
                .interpolate(interpolation)
                .x(function(d, i) { return x(i); })
                .y(function(d, i) { return y(d); });

            // Area
            var area = d3.svg.area()
                .interpolate(interpolation)
                .x(function(d,i) { 
                    return x(i); 
                })
                .y0(height)
                .y1(function(d) { 
                    return y(d); 
                });


            // Create SVG
            // ------------------------------

            // Container
            var container = d3Container.append('svg');

            // SVG element
            var svg = container
                .attr('width', width + margin.left + margin.right)
                .attr('height', height + margin.top + margin.bottom)
                .append("g")
                    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


            // Add mask for animation
            // ------------------------------

            // Add clip path
            var clip = svg.append("defs")
                .append("clipPath")
                .attr('id', function(d, i) { return "load-clip-" + element.substring(1); });

            // Add clip shape
            var clips = clip.append("rect")
                .attr('class', 'load-clip')
                .attr("width", 0)
                .attr("height", height);

            // Animate mask
            clips
                .transition()
                    .duration(1000)
                    .ease('linear')
                    .attr("width", width);


            //
            // Append chart elements
            //

            // Main path
            var path = svg.append("g")
                .attr("clip-path", function(d, i) { return "url(#load-clip-" + element.substring(1) + ")"; })
                .append("path")
                    .datum(data)
                    .attr("transform", "translate(" + x(0) + ",0)");

            // Add path based on chart type
            if(chartType == "area") {
                path.attr("d", area).attr('class', 'd3-area').style("fill", color); // area
            }
            else {
                path.attr("d", line).attr("class", "d3-line d3-line-medium").style('stroke', color); // line
            }

            // Animate path
            path
                .style('opacity', 0)
                .transition()
                    .duration(500)
                    .style('opacity', 1);



            // Set update interval. For demo only
            // ------------------------------

            setInterval(function() {

                // push a new data point onto the back
                data.push(Math.floor(Math.random() * qty) + 5);

                // pop the old data point off the front
                data.shift();

                update();

            }, interval);



            // Update random data. For demo only
            // ------------------------------

            function update() {

                // Redraw the path and slide it to the left
                path
                    .attr("transform", null)
                    .transition()
                        .duration(duration)
                        .ease("linear")
                        .attr("transform", "translate(" + x(0) + ",0)");

                // Update path type
                if(chartType == "area") {
                    path.attr("d", area).attr('class', 'd3-area').style("fill", color);
                }
                else {
                    path.attr("d", line).attr("class", "d3-line d3-line-medium").style('stroke', color);
                }
            }



            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', resizeSparklines);

            // Call function on sidebar width change
            $(document).on('click', '.sidebar-control', resizeSparklines);

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function resizeSparklines() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width + margin.left + margin.right);

                // Width of appended group
                svg.attr("width", width + margin.left + margin.right);

                // Horizontal range
                x.range([0, width]);


                // Chart elements
                // -------------------------

                // Clip mask
                clips.attr("width", width);

                // Line
                svg.select(".d3-line").attr("d", line);

                // Area
                svg.select(".d3-area").attr("d", area);
            }
        }
    };

    

    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _sparklinesWidget("#sparklines_color", "line", 30, 200, "basis", 750, 2000, "rgba(255,255,255,0.75)");
            
        }
    }
}();


// Initialize module
// ------------------------------

// When content loaded
document.addEventListener('DOMContentLoaded', function() {
    Widgetschart.init();
});

//[Dashboard Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)

// ------------------------------

var Widgetschart = function() {

    

    // Simple bar charts
    var _barChartWidget = function(element, barQty, height, animate, easing, duration, delay, color, tooltip) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if(element) {


            // Basic setup
            // ------------------------------

            // Add data set
            var bardata = [];
            for (var i=0; i < barQty; i++) {
                bardata.push(Math.round(Math.random() * 10) + 10);
            }

            // Main variables
            var d3Container = d3.select(element),
                width = d3Container.node().getBoundingClientRect().width;
            


            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.scale.ordinal()
                .rangeBands([0, width], 0.3);

            // Vertical
            var y = d3.scale.linear()
                .range([0, height]);



            // Set input domains
            // ------------------------------

            // Horizontal
            x.domain(d3.range(0, bardata.length));

            // Vertical
            y.domain([0, d3.max(bardata)]);



            // Create chart
            // ------------------------------

            // Add svg element
            var container = d3Container.append('svg');

            // Add SVG group
            var svg = container
                .attr('width', width)
                .attr('height', height)
                .append('g');



            //
            // Append chart elements
            //

            // Bars
            var bars = svg.selectAll('rect')
                .data(bardata)
                .enter()
                .append('rect')
                    .attr('class', 'd3-random-bars')
                    .attr('width', x.rangeBand())
                    .attr('x', function(d,i) {
                        return x(i);
                    })
                    .style('fill', color);



            // Tooltip
            // ------------------------------

            // Initiate
            var tip = d3.tip()
                .attr('class', 'd3-tip')
                .offset([-10, 0]);

            // Show and hide
            if(tooltip == "hours" || tooltip == "goal" || tooltip == "members") {
                bars.call(tip)
                    .on('mouseover', tip.show)
                    .on('mouseout', tip.hide);
            }

            // Daily meetings tooltip content
            if(tooltip == "hours") {
                tip.html(function (d, i) {
                    return "<div class='text-center'>" +
                            "<h6 class='mb-0'>" + d + "</h6>" +
                            "<span class='font-size-16'>meetings</span>" +
                            "<div class='font-size-16'>" + i + ":00" + "</div>" +
                        "</div>";
                });
            }

            // Statements tooltip content
            if(tooltip == "goal") {
                tip.html(function (d, i) {
                    return "<div class='text-center'>" +
                            "<h6 class='mb-0'>" + d + "</h6>" +
                            "<span class='font-size-16'>statements</span>" +
                            "<div class='font-size-16'>" + i + ":00" + "</div>" +
                        "</div>";
                });
            }

            // Online members tooltip content
            if(tooltip == "members") {
                tip.html(function (d, i) {
                    return "<div class='text-center bg-dark p-5'>" +
                            "<h6 class='mb-0'>" + d + "0" + "</h6>" +
                            "<span class='font-size-14'>members</span>" +
                            "<div class='font-size-14'>" + i + ":00" + "</div>" +
                        "</div>";
                });
            }



            // Bar loading animation
            // ------------------------------

            // Choose between animated or static
            if(animate) {
                withAnimation();
            } else {
                withoutAnimation();
            }

            // Animate on load
            function withAnimation() {
                bars
                    .attr('height', 0)
                    .attr('y', height)
                    .transition()
                        .attr('height', function(d) {
                            return y(d);
                        })
                        .attr('y', function(d) {
                            return height - y(d);
                        })
                        .delay(function(d, i) {
                            return i * delay;
                        })
                        .duration(duration)
                        .ease(easing);
            }

            // Load without animateion
            function withoutAnimation() {
                bars
                    .attr('height', function(d) {
                        return y(d);
                    })
                    .attr('y', function(d) {
                        return height - y(d);
                    });
            }



            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', barsResize);

            // Call function on sidebar width change
            $(document).on('click', '.sidebar-control', barsResize);

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function barsResize() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width);

                // Width of appended group
                svg.attr("width", width);

                // Horizontal range
                x.rangeBands([0, width], 0.3);


                // Chart elements
                // -------------------------

                // Bars
                svg.selectAll('.d3-random-bars')
                    .attr('width', x.rangeBand())
                    .attr('x', function(d,i) {
                        return x(i);
                    });
            }
        }
    };


    // Simple sparklines
    var _sparklinesWidget = function(element, chartType, qty, chartHeight, interpolation, duration, interval, color) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if(element) {


            // Basic setup
            // ------------------------------

            // Define main variables
            var d3Container = d3.select(element),
                margin = {top: 0, right: 0, bottom: 0, left: 0},
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right,
                height = chartHeight - margin.top - margin.bottom;


            // Generate random data (for demo only)
            var data = [];
            for (var i=0; i < qty; i++) {
                data.push(Math.floor(Math.random() * qty) + 5);
            }


            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.scale.linear().range([0, width]);

            // Vertical
            var y = d3.scale.linear().range([height - 5, 5]);


            // Set input domains
            // ------------------------------

            // Horizontal
            x.domain([1, qty - 3]);

            // Vertical
            y.domain([0, qty]);
                

            // Construct chart layout
            // ------------------------------

            // Line
            var line = d3.svg.line()
                .interpolate(interpolation)
                .x(function(d, i) { return x(i); })
                .y(function(d, i) { return y(d); });

            // Area
            var area = d3.svg.area()
                .interpolate(interpolation)
                .x(function(d,i) { 
                    return x(i); 
                })
                .y0(height)
                .y1(function(d) { 
                    return y(d); 
                });


            // Create SVG
            // ------------------------------

            // Container
            var container = d3Container.append('svg');

            // SVG element
            var svg = container
                .attr('width', width + margin.left + margin.right)
                .attr('height', height + margin.top + margin.bottom)
                .append("g")
                    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


            // Add mask for animation
            // ------------------------------

            // Add clip path
            var clip = svg.append("defs")
                .append("clipPath")
                .attr('id', function(d, i) { return "load-clip-" + element.substring(1); });

            // Add clip shape
            var clips = clip.append("rect")
                .attr('class', 'load-clip')
                .attr("width", 0)
                .attr("height", height);

            // Animate mask
            clips
                .transition()
                    .duration(1000)
                    .ease('linear')
                    .attr("width", width);


            //
            // Append chart elements
            //

            // Main path
            var path = svg.append("g")
                .attr("clip-path", function(d, i) { return "url(#load-clip-" + element.substring(1) + ")"; })
                .append("path")
                    .datum(data)
                    .attr("transform", "translate(" + x(0) + ",0)");

            // Add path based on chart type
            if(chartType == "area") {
                path.attr("d", area).attr('class', 'd3-area').style("fill", color); // area
            }
            else {
                path.attr("d", line).attr("class", "d3-line d3-line-medium").style('stroke', color); // line
            }

            // Animate path
            path
                .style('opacity', 0)
                .transition()
                    .duration(500)
                    .style('opacity', 1);



            // Set update interval. For demo only
            // ------------------------------

            setInterval(function() {

                // push a new data point onto the back
                data.push(Math.floor(Math.random() * qty) + 5);

                // pop the old data point off the front
                data.shift();

                update();

            }, interval);



            // Update random data. For demo only
            // ------------------------------

            function update() {

                // Redraw the path and slide it to the left
                path
                    .attr("transform", null)
                    .transition()
                        .duration(duration)
                        .ease("linear")
                        .attr("transform", "translate(" + x(0) + ",0)");

                // Update path type
                if(chartType == "area") {
                    path.attr("d", area).attr('class', 'd3-area').style("fill", color);
                }
                else {
                    path.attr("d", line).attr("class", "d3-line d3-line-medium").style('stroke', color);
                }
            }



            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', resizeSparklines);

            // Call function on sidebar width change
            $(document).on('click', '.sidebar-control', resizeSparklines);

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function resizeSparklines() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width + margin.left + margin.right);

                // Width of appended group
                svg.attr("width", width + margin.left + margin.right);

                // Horizontal range
                x.range([0, width]);


                // Chart elements
                // -------------------------

                // Clip mask
                clips.attr("width", width);

                // Line
                svg.select(".d3-line").attr("d", line);

                // Area
                svg.select(".d3-area").attr("d", area);
            }
        }
    };

    

    //
    // Return objects assigned to module
    //

    return {
        init: function() {

            _barChartWidget("#chart_bar_basic", 24, 50, true, "elastic", 1200, 50, "#3e8ef7", "members");

            _sparklinesWidget("#sparklines_basic", "area", 30, 50, "basis", 750, 2000, "#0bb2d4");
            
        }
    }
}();


// Initialize module
// ------------------------------

// When content loaded
document.addEventListener('DOMContentLoaded', function() {
    Widgetschart.init();
});



// donut chart
$('.donut').peity('donut');

// ------------------------------
    // Basic bar chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('basic-bar'));

        // specify chart configuration item and data
        var option = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '3%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Site A','Site B']
                },
                toolbox: {
                    show : true,
                    feature : {

                        magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                color: ["#689f38", "#389f99"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec']
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'Site A',
                        type:'bar',
                        data:[7.2, 5.3, 6.1, 32.1, 23.1, 89.2, 158.4, 178.1, 36.4, 22.7, 7.1, 9.4],
                        markPoint : {
                            data : [
                                {type : 'max', name: 'Max'},
                                {type : 'min', name: 'Min'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name: 'Average'}
                            ]
                        }
                    },
                    {
                        name:'Site B',
                        type:'bar',
                        data:[19.4, 7.9, 8.9, 27.9, 24.8, 88.1, 167.8, 197.5, 47.1, 16.7, 7.1, 1.5],
                        markPoint : {
                            data : [
                                {name : 'The highest year', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                                {name : 'Year minimum', value : 2.3, xAxis: 11, yAxis: 3}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name : 'Average'}
                            ]
                        }
                    }
                ]
            };
        // use configuration item and data specified to show chart
        myChart.setOption(option);

//[custom Javascript]



// Fullscreen
$(function () {
	'use strict'
	// Composite line charts, the second using values supplied via javascript
    		
		$("#linechart").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#ff4c52',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#ff4c52',
			maxSpotColor: '#ff4c52',
		});
		$("#linechart2").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#faa700',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#faa700',
			maxSpotColor: '#faa700',
		});
		$("#linechart3").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'line',
			width: '100%',
			height: '45',
			lineColor: '#17b3a3',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#ff4c52',
			maxSpotColor: '#ff4c52',
		});
		$("#linechart4").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '50%',
			height: '100',
			lineColor: '#17b3a3',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#ff4c52',
			maxSpotColor: '#ff4c52',
		});
	
		$("#barchart").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'bar',
			height: '38',
			width: '100%',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#3e8ef7',
		});
		$("#barchart2").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'bar',
			height: '38',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#3e8ef7',
		});
		$("#barchart3").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'bar',
			height: '45',
			width: '100%',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#ff4c52',
		});
		$("#barchart4").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'bar',
			height: '100',
			width: '50%',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#ff4c52',
		});
	
		$("#discretechart").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'discrete',
			width: '50',
			height: '38',
			lineColor: '#7231F5',
		});
		$("#discretechart2").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'discrete',
			width: '50',
			height: '38',
			lineColor: '#7231F5',
		});
		$("#discretechart3").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'discrete',
			width: '180',
			height: '45',
			lineColor: '#0bb2d4',
		});
		$("#discretechart4").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'discrete',
			width: '100',
			height: '100',
			lineColor: '#0bb2d4',
		});
		
		$("#linearea").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100%',
			height: '80',
			lineColor: '#17b3a3',
			fillColor: '#17b3a3',
			lineWidth: 2,
		});
		$("#linearea2").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'line',
			width: '100%',
			height: '45',
			lineColor: '#0bb2d4',
			fillColor: '#0bb2d4',
			lineWidth: 2,
		});
		$("#linearea3").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '50%',
			height: '100',
			lineColor: '#0bb2d4',
			fillColor: '#0bb2d4',
			lineWidth: 1,
		});
		
		$("#baralc").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'bar',
			height: '80',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#faa700',
		});
		
		$("#lineIncrease").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '98%',
			height: '92',
			lineWidth: 2,
			lineColor: '#ffffff',
			fillColor: "rgba(255, 255, 255, 0)",
			spotColor: '#ffffff',
			minSpotColor: '#ffffff',
			maxSpotColor: '#ffffff',
			spotRadius: 1,
		});
		
		$("#lineToday").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100%',
			height: '70',
			lineColor: '#ffffff',
			fillColor: 'rgba(255, 255, 255, 0)',
			lineWidth: 2,
			spotRadius: 3,
		});
		
		$("#baranl").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'bar',
			height: '70',
			barColor: '#ff4c52',
			barWidth: 7,
    		barSpacing: 5,
		});
		
		$("#lineTo").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100%',
			height: '70',
			lineColor: '#ffffff',
			fillColor: 'rgba(255, 255, 255, 0)',
			lineWidth: 3,
			spotColor: '#ffffff',
			highlightSpotColor: '#ffffff',
			highlightLineColor: '#ffffff',
			spotRadius: 3,
		});
		
		// donut chart
		$('.donut').peity('donut');
		
		// bar chart
		$(".bar").peity("bar");	
	
		
		$('.countnm').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 1000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	
}); // End of use strict
		
// easypie chart
	$(function() {
		'use strict'
		$('.easypie').easyPieChart({
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
		var chart = window.chart = $('.easypie').data('easyPieChart');
		$('.js_update').on('click', function() {
			chart.update(Math.random()*200-100);
		});
	});// End of use strict

// ------------------------------

var Widgetschart = function() {

    

    // Simple bar charts
    var _barChartWidget = function(element, barQty, height, animate, easing, duration, delay, color, tooltip) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if(element) {


            // Basic setup
            // ------------------------------

            // Add data set
            var bardata = [];
            for (var i=0; i < barQty; i++) {
                bardata.push(Math.round(Math.random() * 10) + 10);
            }

            // Main variables
            var d3Container = d3.select(element),
                width = d3Container.node().getBoundingClientRect().width;
            


            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.scale.ordinal()
                .rangeBands([0, width], 0.3);

            // Vertical
            var y = d3.scale.linear()
                .range([0, height]);



            // Set input domains
            // ------------------------------

            // Horizontal
            x.domain(d3.range(0, bardata.length));

            // Vertical
            y.domain([0, d3.max(bardata)]);



            // Create chart
            // ------------------------------

            // Add svg element
            var container = d3Container.append('svg');

            // Add SVG group
            var svg = container
                .attr('width', width)
                .attr('height', height)
                .append('g');



            //
            // Append chart elements
            //

            // Bars
            var bars = svg.selectAll('rect')
                .data(bardata)
                .enter()
                .append('rect')
                    .attr('class', 'd3-random-bars')
                    .attr('width', x.rangeBand())
                    .attr('x', function(d,i) {
                        return x(i);
                    })
                    .style('fill', color);



            // Tooltip
            // ------------------------------

            // Initiate
            var tip = d3.tip()
                .attr('class', 'd3-tip')
                .offset([-10, 0]);

            // Show and hide
            if(tooltip == "hours" || tooltip == "goal" || tooltip == "members") {
                bars.call(tip)
                    .on('mouseover', tip.show)
                    .on('mouseout', tip.hide);
            }

            // Daily meetings tooltip content
            if(tooltip == "hours") {
                tip.html(function (d, i) {
                    return "<div class='text-center'>" +
                            "<h6 class='mb-0'>" + d + "</h6>" +
                            "<span class='font-size-16'>meetings</span>" +
                            "<div class='font-size-16'>" + i + ":00" + "</div>" +
                        "</div>";
                });
            }

            // Statements tooltip content
            if(tooltip == "goal") {
                tip.html(function (d, i) {
                    return "<div class='text-center'>" +
                            "<h6 class='mb-0'>" + d + "</h6>" +
                            "<span class='font-size-16'>statements</span>" +
                            "<div class='font-size-16'>" + i + ":00" + "</div>" +
                        "</div>";
                });
            }

            // Online members tooltip content
            if(tooltip == "members") {
                tip.html(function (d, i) {
                    return "<div class='text-center bg-dark p-5'>" +
                            "<h6 class='mb-0'>" + d + "0" + "</h6>" +
                            "<span class='font-size-14'>members</span>" +
                            "<div class='font-size-14'>" + i + ":00" + "</div>" +
                        "</div>";
                });
            }



            // Bar loading animation
            // ------------------------------

            // Choose between animated or static
            if(animate) {
                withAnimation();
            } else {
                withoutAnimation();
            }

            // Animate on load
            function withAnimation() {
                bars
                    .attr('height', 0)
                    .attr('y', height)
                    .transition()
                        .attr('height', function(d) {
                            return y(d);
                        })
                        .attr('y', function(d) {
                            return height - y(d);
                        })
                        .delay(function(d, i) {
                            return i * delay;
                        })
                        .duration(duration)
                        .ease(easing);
            }

            // Load without animateion
            function withoutAnimation() {
                bars
                    .attr('height', function(d) {
                        return y(d);
                    })
                    .attr('y', function(d) {
                        return height - y(d);
                    });
            }



            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', barsResize);

            // Call function on sidebar width change
            $(document).on('click', '.sidebar-control', barsResize);

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function barsResize() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width);

                // Width of appended group
                svg.attr("width", width);

                // Horizontal range
                x.rangeBands([0, width], 0.3);


                // Chart elements
                // -------------------------

                // Bars
                svg.selectAll('.d3-random-bars')
                    .attr('width', x.rangeBand())
                    .attr('x', function(d,i) {
                        return x(i);
                    });
            }
        }
    };

    // Simple line chart
    var _lineChartWidget = function(element, chartHeight, lineColor, pathColor, pointerLineColor, pointerBgColor) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if(element) {


            // Basic setup
            // ------------------------------

            // Add data set
            var dataset = [
                {
                    "date": "04/13/14",
                    "alpha": "60"
                }, {
                    "date": "04/14/14",
                    "alpha": "35"
                }, {
                    "date": "04/15/14",
                    "alpha": "65"
                }, {
                    "date": "04/16/14",
                    "alpha": "50"
                }, {
                    "date": "04/17/14",
                    "alpha": "65"
                }, {
                    "date": "04/18/14",
                    "alpha": "20"
                }, {
                    "date": "04/19/14",
                    "alpha": "60"
                }
            ];

            // Main variables
            var d3Container = d3.select(element),
                margin = {top: 0, right: 0, bottom: 0, left: 0},
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right,
                height = chartHeight - margin.top - margin.bottom,
                padding = 20;

            // Format date
            var parseDate = d3.time.format("%m/%d/%y").parse,
                formatDate = d3.time.format("%a, %B %e");


            // Add tooltip
            // ------------------------------

            var tooltip = d3.tip()
                .attr('class', 'd3-tip')
                .html(function (d) {
                    return "<ul class='list-unstyled mb-1 bg-dark p-5'>" +
                        "<li>" + "<div class='my-1'><i class='fa fa-check mr-2'></i>" + formatDate(d.date) + "</div>" + "</li>" +
                        "<li>" + "Sales: &nbsp;" + "<span class='float-right'>" + d.alpha + "</span>" + "</li>" +
                        "<li>" + "Revenue: &nbsp; " + "<span class='float-right'>" + "$" + (d.alpha * 0).toFixed(2) + "</span>" + "</li>" + 
                    "</ul>";
                });


            // Create chart
            // ------------------------------

            // Add svg element
            var container = d3Container.append('svg');

            // Add SVG group
            var svg = container
                    .attr('width', width + margin.left + margin.right)
                    .attr('height', height + margin.top + margin.bottom)
                    .append("g")
                        .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
                        .call(tooltip);


            // Load data
            // ------------------------------

            dataset.forEach(function (d) {
                d.date = parseDate(d.date);
                d.alpha = +d.alpha;
            });


            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.time.scale()
                .range([padding, width - padding]);

            // Vertical
            var y = d3.scale.linear()
                .range([height, 5]);


            // Set input domains
            // ------------------------------

            // Horizontal
            x.domain(d3.extent(dataset, function (d) {
                return d.date;
            }));

            // Vertical
            y.domain([0, d3.max(dataset, function (d) {
                return Math.max(d.alpha);
            })]);


            // Construct chart layout
            // ------------------------------

            // Line
            var line = d3.svg.line()
                .x(function(d) {
                    return x(d.date);
                })
                .y(function(d) {
                    return y(d.alpha);
                });


            //
            // Append chart elements
            //

            // Add mask for animation
            // ------------------------------

            // Add clip path
            var clip = svg.append("defs")
                .append("clipPath")
                .attr("id", "clip-line-small");

            // Add clip shape
            var clipRect = clip.append("rect")
                .attr('class', 'clip')
                .attr("width", 0)
                .attr("height", height);

            // Animate mask
            clipRect
                  .transition()
                      .duration(1000)
                      .ease('linear')
                      .attr("width", width);


            // Line
            // ------------------------------

            // Path
            var path = svg.append('path')
                .attr({
                    'd': line(dataset),
                    "clip-path": "url(#clip-line-small)",
                    'class': 'd3-line d3-line-medium'
                })
                .style('stroke', lineColor);

            // Animate path
            svg.select('.line-tickets')
                .transition()
                    .duration(1000)
                    .ease('linear');


            // Add vertical guide lines
            // ------------------------------

            // Bind data
            var guide = svg.append('g')
                .selectAll('.d3-line-guides-group')
                .data(dataset);

            // Append lines
            guide
                .enter()
                .append('line')
                    .attr('class', 'd3-line-guides')
                    .attr('x1', function (d, i) {
                        return x(d.date);
                    })
                    .attr('y1', function (d, i) {
                        return height;
                    })
                    .attr('x2', function (d, i) {
                        return x(d.date);
                    })
                    .attr('y2', function (d, i) {
                        return height;
                    })
                    .style('stroke', pathColor)
                    .style('stroke-dasharray', '4,2')
                    .style('shape-rendering', 'crispEdges');

            // Animate guide lines
            guide
                .transition()
                    .duration(1000)
                    .delay(function(d, i) { return i * 150; })
                    .attr('y2', function (d, i) {
                        return y(d.alpha);
                    });


            // Alpha app points
            // ------------------------------

            // Add points
            var points = svg.insert('g')
                .selectAll('.d3-line-circle')
                .data(dataset)
                .enter()
                .append('circle')
                    .attr('class', 'd3-line-circle d3-line-circle-medium')
                    .attr("cx", line.x())
                    .attr("cy", line.y())
                    .attr("r", 3)
                    .style({
                        'stroke': pointerLineColor,
                        'fill': pointerBgColor
                    });

            // Animate points on page load
            points
                .style('opacity', 0)
                .transition()
                    .duration(250)
                    .ease('linear')
                    .delay(1000)
                    .style('opacity', 1);

            // Add user interaction
            points
                .on("mouseover", function (d) {
                    tooltip.offset([-10, 0]).show(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 4);
                })

                // Hide tooltip
                .on("mouseout", function (d) {
                    tooltip.hide(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 3);
                });

            // Change tooltip direction of first point
            d3.select(points[0][0])
                .on("mouseover", function (d) {
                    tooltip.offset([0, 10]).direction('e').show(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 4);
                })
                .on("mouseout", function (d) {
                    tooltip.direction('n').hide(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 3);
                });

            // Change tooltip direction of last point
            d3.select(points[0][points.size() - 1])
                .on("mouseover", function (d) {
                    tooltip.offset([0, -10]).direction('w').show(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 4);
                })
                .on("mouseout", function (d) {
                    tooltip.direction('n').hide(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 3);
                });


            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', lineChartResize);

            // Call function on sidebar width change
            $(document).on('click', '.sidebar-control', lineChartResize);

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function lineChartResize() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width + margin.left + margin.right);

                // Width of appended group
                svg.attr("width", width + margin.left + margin.right);

                // Horizontal range
                x.range([padding, width - padding]);


                // Chart elements
                // -------------------------

                // Mask
                clipRect.attr("width", width);

                // Line path
                svg.selectAll('.d3-line').attr("d", line(dataset));

                // Circles
                svg.selectAll('.d3-line-circle').attr("cx", line.x());

                // Guide lines
                svg.selectAll('.d3-line-guides')
                    .attr('x1', function (d, i) {
                        return x(d.date);
                    })
                    .attr('x2', function (d, i) {
                        return x(d.date);
                    });
            }
        }
    };

    // Simple sparklines
    var _sparklinesWidget = function(element, chartType, qty, chartHeight, interpolation, duration, interval, color) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if(element) {


            // Basic setup
            // ------------------------------

            // Define main variables
            var d3Container = d3.select(element),
                margin = {top: 0, right: 0, bottom: 0, left: 0},
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right,
                height = chartHeight - margin.top - margin.bottom;


            // Generate random data (for demo only)
            var data = [];
            for (var i=0; i < qty; i++) {
                data.push(Math.floor(Math.random() * qty) + 5);
            }


            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.scale.linear().range([0, width]);

            // Vertical
            var y = d3.scale.linear().range([height - 5, 5]);


            // Set input domains
            // ------------------------------

            // Horizontal
            x.domain([1, qty - 3]);

            // Vertical
            y.domain([0, qty]);
                

            // Construct chart layout
            // ------------------------------

            // Line
            var line = d3.svg.line()
                .interpolate(interpolation)
                .x(function(d, i) { return x(i); })
                .y(function(d, i) { return y(d); });

            // Area
            var area = d3.svg.area()
                .interpolate(interpolation)
                .x(function(d,i) { 
                    return x(i); 
                })
                .y0(height)
                .y1(function(d) { 
                    return y(d); 
                });


            // Create SVG
            // ------------------------------

            // Container
            var container = d3Container.append('svg');

            // SVG element
            var svg = container
                .attr('width', width + margin.left + margin.right)
                .attr('height', height + margin.top + margin.bottom)
                .append("g")
                    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


            // Add mask for animation
            // ------------------------------

            // Add clip path
            var clip = svg.append("defs")
                .append("clipPath")
                .attr('id', function(d, i) { return "load-clip-" + element.substring(1); });

            // Add clip shape
            var clips = clip.append("rect")
                .attr('class', 'load-clip')
                .attr("width", 0)
                .attr("height", height);

            // Animate mask
            clips
                .transition()
                    .duration(1000)
                    .ease('linear')
                    .attr("width", width);


            //
            // Append chart elements
            //

            // Main path
            var path = svg.append("g")
                .attr("clip-path", function(d, i) { return "url(#load-clip-" + element.substring(1) + ")"; })
                .append("path")
                    .datum(data)
                    .attr("transform", "translate(" + x(0) + ",0)");

            // Add path based on chart type
            if(chartType == "area") {
                path.attr("d", area).attr('class', 'd3-area').style("fill", color); // area
            }
            else {
                path.attr("d", line).attr("class", "d3-line d3-line-medium").style('stroke', color); // line
            }

            // Animate path
            path
                .style('opacity', 0)
                .transition()
                    .duration(500)
                    .style('opacity', 1);



            // Set update interval. For demo only
            // ------------------------------

            setInterval(function() {

                // push a new data point onto the back
                data.push(Math.floor(Math.random() * qty) + 5);

                // pop the old data point off the front
                data.shift();

                update();

            }, interval);



            // Update random data. For demo only
            // ------------------------------

            function update() {

                // Redraw the path and slide it to the left
                path
                    .attr("transform", null)
                    .transition()
                        .duration(duration)
                        .ease("linear")
                        .attr("transform", "translate(" + x(0) + ",0)");

                // Update path type
                if(chartType == "area") {
                    path.attr("d", area).attr('class', 'd3-area').style("fill", color);
                }
                else {
                    path.attr("d", line).attr("class", "d3-line d3-line-medium").style('stroke', color);
                }
            }



            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', resizeSparklines);

            // Call function on sidebar width change
            $(document).on('click', '.sidebar-control', resizeSparklines);

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function resizeSparklines() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width + margin.left + margin.right);

                // Width of appended group
                svg.attr("width", width + margin.left + margin.right);

                // Horizontal range
                x.range([0, width]);


                // Chart elements
                // -------------------------

                // Clip mask
                clips.attr("width", width);

                // Line
                svg.select(".d3-line").attr("d", line);

                // Area
                svg.select(".d3-area").attr("d", area);
            }
        }
    };

    

    //
    // Return objects assigned to module
    //

    return {
        init: function() {

            _barChartWidget("#chart_bar_basic", 24, 50, true, "elastic", 1200, 50, "#3e8ef7", "members");
            _barChartWidget("#chart_bar_color", 24, 50, true, "elastic", 1200, 50, "rgba(255,255,255,0.75)", "members");

            _lineChartWidget('#line_chart_simple', 50, '#0bb2d4', '#0bb2d4', '#0bb2d4', '#fff');
            _lineChartWidget('#line_chart_color', 50, '#fff', 'rgba(255,255,255,0.5)', '#fff', '#29B6F6');

            _sparklinesWidget("#sparklines_basic", "area", 30, 50, "basis", 750, 2000, "#0bb2d4");
            _sparklinesWidget("#sparklines_color", "area", 30, 50, "basis", 750, 2000, "rgba(255,255,255,0.75)");
            
        }
    }
}();


// Initialize module
// ------------------------------

// When content loaded
document.addEventListener('DOMContentLoaded', function() {
    Widgetschart.init();
});

//[chartjs Javascript]



$(function () {

    'use strict';
      
  //----chart1
      //Get the context of the Chart canvas element we want to select
      var dasChartjs = document.getElementById("chartjs1").getContext("2d");
      // Create Linear Gradient
      var blue_trans_gradient = dasChartjs.createLinearGradient(0, 0, 0, 100);
      blue_trans_gradient.addColorStop(0, 'rgba(247, 147, 26,1)');
      blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
      // Chart Options
      var DASStats = {
          responsive: true,
          maintainAspectRatio: false,
          datasetStrokeWidth : 3,
          pointDotStrokeWidth : 4,
          tooltipFillColor: "rgba(247, 147, 26,0.8)",
          legend: {
              display: false,
          },
          hover: {
              mode: 'label'
          },
          scales: {
              xAxes: [{
                  display: false,
              }],
              yAxes: [{
                  display: false,
                  ticks: {
                      min: 0,
                      max: 85
                  },
              }]
          },
          title: {
              display: false,
              fontColor: "#FFF",
              fullWidth: false,
              fontSize: 30,
              text: '52%'
          }
      };
  
      // Chart Data
      var DASMonthData = {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
          datasets: [{
              label: "abc",
              data: [20, 18, 35, 60, 38, 40, 70],
              backgroundColor: blue_trans_gradient,
              borderColor: "#F7931A",
              borderWidth: 1.5,
              strokeColor : "#F7931A",
              pointRadius: 0,
          }]
      };
  
      var DASCardconfig = {
          type: 'line',
  
          // Chart Options
          options : DASStats,
  
          // Chart Data
          data : DASMonthData
      };
  
      // Create the chart
      var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
      
      
      //----chart2
      //Get the context of the Chart canvas element we want to select
      var dasChartjs = document.getElementById("chartjs2").getContext("2d");
      // Create Linear Gradient
      var blue_trans_gradient = dasChartjs.createLinearGradient(0, 0, 0, 100);
      blue_trans_gradient.addColorStop(0, 'rgba(131, 131, 131,1)');
      blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
      // Chart Options
      var DASStats = {
          responsive: true,
          maintainAspectRatio: false,
          datasetStrokeWidth : 3,
          pointDotStrokeWidth : 4,
          tooltipFillColor: "rgba(131, 131, 131,0.8)",
          legend: {
              display: false,
          },
          hover: {
              mode: 'label'
          },
          scales: {
              xAxes: [{
                  display: false,
              }],
              yAxes: [{
                  display: false,
                  ticks: {
                      min: 0,
                      max: 85
                  },
              }]
          },
          title: {
              display: false,
              fontColor: "#FFF",
              fullWidth: false,
              fontSize: 30,
              text: '52%'
          }
      };
  
      // Chart Data
      var DASMonthData = {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
          datasets: [{
              label: "abc",
              data: [40, 30, 60, 40, 45, 30, 60],
              backgroundColor: blue_trans_gradient,
              borderColor: "#838383",
              borderWidth: 1.5,
              strokeColor : "#838383",
              pointRadius: 0,
          }]
      };
  
      var DASCardconfig = {
          type: 'line',
          // Chart Options
          options : DASStats,
          // Chart Data
          data : DASMonthData
      };
  
      // Create the chart
      var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
  
      //----chart3
      //Get the context of the Chart canvas element we want to select
      var dasChartjs = document.getElementById("chartjs3").getContext("2d");
      // Create Linear Gradient
      var blue_trans_gradient = dasChartjs.createLinearGradient(0, 0, 0, 100);
      blue_trans_gradient.addColorStop(0, 'rgba(73, 152, 6,1)');
      blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
      // Chart Options
      var DASStats = {
          responsive: true,
          maintainAspectRatio: false,
          datasetStrokeWidth : 3,
          pointDotStrokeWidth : 4,
          tooltipFillColor: "rgba(73, 152, 6,0.8)",
          legend: {
              display: false,
          },
          hover: {
              mode: 'label'
          },
          scales: {
              xAxes: [{
                  display: false,
              }],
              yAxes: [{
                  display: false,
                  ticks: {
                      min: 0,
                      max: 85
                  },
              }]
          },
          title: {
              display: false,
              fontColor: "#FFF",
              fullWidth: false,
              fontSize: 30,
              text: '52%'
          }
      };
  
      // Chart Data
      var DASMonthData = {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
          datasets: [{
              label: "abc",
              data: [70, 20, 35, 60, 20, 40, 30],
              backgroundColor: blue_trans_gradient,
              borderColor: "#499806",
              borderWidth: 1.5,
              strokeColor : "#499806",
              pointRadius: 0,
          }]
      };
  
      var DASCardconfig = {
          type: 'line',
  
          // Chart Options
          options : DASStats,
  
          // Chart Data
          data : DASMonthData
      };
  
      // Create the chart
      var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
      
      
       //----chart4
      //Get the context of the Chart canvas element we want to select
      var dasChartjs = document.getElementById("chartjs4").getContext("2d");
      // Create Linear Gradient
      var blue_trans_gradient = dasChartjs.createLinearGradient(0, 0, 0, 100);
      blue_trans_gradient.addColorStop(0, 'rgba(28, 117, 188,1)');
      blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
      // Chart Options
      var DASStats = {
          responsive: true,
          maintainAspectRatio: false,
          datasetStrokeWidth : 3,
          pointDotStrokeWidth : 4,
          tooltipFillColor: "rgba(28, 117, 188,0.8)",
          legend: {
              display: false,
          },
          hover: {
              mode: 'label'
          },
          scales: {
              xAxes: [{
                  display: false,
              }],
              yAxes: [{
                  display: false,
                  ticks: {
                      min: 0,
                      max: 85
                  },
              }]
          },
          title: {
              display: false,
              fontColor: "#FFF",
              fullWidth: false,
              fontSize: 30,
              text: '52%'
          }
      };
  
      // Chart Data
      var DASMonthData = {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
          datasets: [{
              label: "abc",
              data: [20, 50, 65, 30, 24, 60, 40],
              backgroundColor: blue_trans_gradient,
              borderColor: "#1c75bc",
              borderWidth: 1.5,
              strokeColor : "#1c75bc",
              pointRadius: 0,
          }]
      };
  
      var DASCardconfig = {
          type: 'line',
  
          // Chart Options
          options : DASStats,
  
          // Chart Data
          data : DASMonthData
      };
  
      // Create the chart
      var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
      
  }); // End of use strict

  /* ------------------------------------------------------------------------------
 *
 *  # CSS3 animations
 *
 *  Demo JS code for animations_css3.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var AnimationsCSS3 = function() {


    // CSS3 animations
    var _componentAnimationCSS = function() {

        // Toggle animations
        $('body').on('click', '.animation', function (e) {

            // Get animation class from 'data' attribute
            var animation = $(this).data('animation');

            // Apply animation once per click
            $(this).parents('.box').addClass('animated ' + animation).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass('animated ' + animation);
            });
            e.preventDefault();
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentAnimationCSS();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    AnimationsCSS3.init();
});

$(function() {
	
    'use strict'
  
      $.fn.raty.defaults.path = '../../images/rating/';
  
      // Default
      $('#default-star-rating').raty();
  
      // Default Score
      $('#score-rating').raty({
          score: 3
      });
  
      // Number of stars
      $('#no-of-stars').raty({
          number: 10
      });
  
      // Maximum number of stars
      $('#max-number-stars').raty({
          numberMax: 5,
          number: 100
      });
  
      // Read Only
      $('#read-only-stars').raty({
          readOnly: true,
          score: 3
      });
  
      // No Rated Message
      $('#no-rated-msg').raty({
          half: true,
          readOnly: true
      });
  
      // Cancel Star
      $('#cancel-star').raty({
          cancel: true
      });
  
      // Space
      $('#space-star').raty({
          space: false
      });
  
      // Single
      $('#single-star').raty({
          single: true
      });
  
      // Half Star
      $('#half-star').raty({
          half: true,
      });
  
      // Star Half
      $('#star-half').raty({
          half: true,
          starHalf: 'star-half.png'
      });
  
      // Round Enabled
      $('#round-enabled').raty({
          score: 3.26
      });
  
      // Round Disabled
      $('#round-disabled').raty({
          halfShow: false,
          score: 3.26
      });
  
      // Custom Icon
      $('#custom-icon-star').raty({
          starOff: 'heart.png',
          starOn: 'like.png'
      });
  
      // Icon Range
      $('#icon-range').raty({
          iconRange: [
              { range: 1, on: 'wi wi-day-rain-wind font-size-18', off: 'wi wi-day-cloudy font-size-18' },
              { range: 2, on: 'wi wi-day-sleet font-size-18', off: 'wi wi-day-sleet-storm font-size-18' },
              { range: 3, on: 'wi wi-day-snow font-size-18', off: 'wi wi-day-storm-showers font-size-18' },
              { range: 4, on: 'wi wi-night-alt-snow font-size-18', off: 'wi wi-night-alt-thunderstorm font-size-18' },
              { range: 5, on: 'wi wi-night-snow-thunderstorm font-size-18', off: 'wi wi-night-snow-wind font-size-18' }
          ],
          starType: 'i'
      });
  
  });// End of use strict

  //[timer contact Javascript]

//Project:	Sunny Admin - Responsive Admin Template

$(function () {
    "use strict";

    
		// set the date we're counting down to
		var target_date = new Date('Jan, 31, 2019').getTime();

		// variables for time units
		var days, hours, minutes, seconds;

		// get tag element
		var countdown = document.getElementById('countdown');

		// update the tag with id "countdown" every 1 second
		setInterval(function () {

			// find the amount of "seconds" between now and target
			var current_date = new Date().getTime();
			var seconds_left = (target_date - current_date) / 1000;

			// do some time calculations
			days = parseInt(seconds_left / 86400);
			seconds_left = seconds_left % 86400;

			hours = parseInt(seconds_left / 3600);
			seconds_left = seconds_left % 3600;

			minutes = parseInt(seconds_left / 60);
			seconds = parseInt(seconds_left % 60);

			// format countdown string + set tag value
			countdown.innerHTML = '<div class="days timer col mb-30"> <div class="b-1 p-30 rounded">' + days +  ' <div class="text">Days</div></div></div> <div class="hours timer col mb-30"> <div class="b-1 p-30 rounded">' + hours + ' <div class="text">Hours</div></div></div> <div class="minutes timer col mb-30"> <div class="b-1 p-30 rounded">' + minutes + ' <div class="text">Minutes</div></div></div> <div class="seconds timer col mb-30"> <div class="b-1 p-30 rounded">' + seconds + ' <div class="text">Seconds</div></div></div>';  

		}, 1000);
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   

		$('#slimtest1').slimScroll({
            height: '300px'
        });
        $('#slimtest2').slimScroll({
            height: '300px'
        });
        $('#slimtest3').slimScroll({
            position: 'left'
            , height: '300px'
            , railVisible: true
            , alwaysVisible: true
        });
        $('#slimtest4').slimScroll({
            color: '#0bb2d4'
            , size: '10px'
            , height: '300px'
            , alwaysVisible: true
        });
	
  }); // End of use strict

  //[Dashboard Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

    'use strict';
      
      
      
      
      var options = {
            series: [44, 55],
            chart: {
            type: 'donut',
               height: 150,
                width: 150,
          },
          legend: {
                show: false,
          },
          dataLabels: {
              enabled: false,
            },
          plotOptions: {
              pie: {
                customScale: 0.8,
                donut: {
                  size: '50%',
                },
                offsetY: 0,
              },
              stroke: {
                colors: undefined
              }
            },
          colors:['#00BC8B', '#caffe5'],
          };
  
          var chart = new ApexCharts(document.querySelector("#chart41"), options);
          chart.render();
      
      
          
      
      
      var options = {
            series: [44, 55],
            chart: {
            type: 'donut',
               height: 150,
                width: 150,
          },
          legend: {
                show: false,
          },
          dataLabels: {
              enabled: false,
            },
          plotOptions: {
              pie: {
                customScale: 0.8,
                donut: {
                  size: '50%',
                },
                offsetY: 0,
              },
              stroke: {
                colors: undefined
              }
            },
          colors:['#0F5EF7', '#e1f0ff'],
          };
  
          var chart = new ApexCharts(document.querySelector("#chart42"), options);
          chart.render();
      
      
      
      
      
      
      
      var options = {
          series: [{
              name: "Profit",
              data: [0, 40, 110, 70, 100, 60, 130, 55, 140, 125]
          }],
          chart: {
              foreColor:"#bac0c7",
            height: 385,
            type: 'line',
            zoom: {
              enabled: false
            }
          },
          colors:['#0F5EF7'],
          dataLabels: {
            enabled: false,
          },
          stroke: {
                show: true,
              curve: 'smooth',
              lineCap: 'butt',
              colors: undefined,
              width: 5,
              dashArray: 0, 
          },		
          markers: {
              size: 5,
              colors: '#ffffff',
              strokeColors: '#0F5EF7',
              strokeWidth: 3,
              strokeOpacity: 0.9,
              strokeDashArray: 0,
              fillOpacity: 1,
              discrete: [],
              shape: "circle",
              radius: 5,
              offsetX: 0,
              offsetY: 0,
              onClick: undefined,
              onDblClick: undefined,
              hover: {
                size: undefined,
                sizeOffset: 3
              }
          },	
          grid: {
              borderColor: '#f7f7f7', 
            row: {
              colors: ['transparent'], // takes an array which will be repeated on columns
              opacity: 0
            },			
            yaxis: {
              lines: {
                show: true,
              },
            },
          },
          xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            labels: {
              show: true,        
            },
            axisBorder: {
              show: true
            },
            axisTicks: {
              show: true
            },
            tooltip: {
              enabled: true,        
            },
          },
          yaxis: {
            labels: {
              show: true,
              formatter: function (val) {
                return val + "K";
              }
            }
          
          },
        };
        var chart = new ApexCharts(document.querySelector("#charts_widget_43_chart"), options);
        chart.render();
      
      
      
      var options = {
            series: [{
              name: "Revenue",
              data: [60, 71, 75, 91, 80, 70]
          }],
            chart: {
            height: 150,
            type: 'area',
            zoom: {
              enabled: false
            },			  
            toolbar: {
              show: false,
            }
          },
          dataLabels: {
            enabled: false
          },
          stroke: {
            curve: 'stepline'
          },
          colors: ['#7a15f7'],
          grid: {			
              show: false,
              padding: {
                top: 0,
                bottom: -20,
                right: 0,
                left: -10
              },
          },
          
           legend: {
                show: false,
           },
          xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
              labels: {
                    show: false,
              },
              axisBorder: {
                    show: false,
              },
              axisTicks: {
                    show: false,
              },
              },
          
          yaxis: {
            labels: {
                    show: false,
              }
          },
          };
  
          var chart = new ApexCharts(document.querySelector("#revenue1"), options);
          chart.render();
      
      
      
      
      
      var options = {
            series: [{
              name: "Revenue",
              data: [91, 80, 70, 60, 71, 75]
          }],
            chart: {
            height: 150,
            type: 'area',
            zoom: {
              enabled: false
            },			  
            toolbar: {
              show: false,
            }
          },
          dataLabels: {
            enabled: false
          },
          stroke: {
            curve: 'stepline'
          },
          colors: ['#FFB800'],
          grid: {			
              show: false,
              padding: {
                top: 0,
                bottom: -20,
                right: 0,
                left: -10
              },
          },
          
           legend: {
                show: false,
           },
          xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
              labels: {
                    show: false,
              },
              axisBorder: {
                    show: false,
              },
              axisTicks: {
                    show: false,
              },
              },
          
          yaxis: {
            labels: {
                    show: false,
              }
          },
          };
  
          var chart = new ApexCharts(document.querySelector("#revenue2"), options);
          chart.render();
      
      
  
      
      
          
          var options = {
            series: [{
            name: 'Net Profit',
            data: [44, 55, 57, 56, 61, 58, 63]
          }, {
            name: 'Revenue',
            data: [76, 85, 101, 98, 87, 105, 91]
          }],
            chart: {
            type: 'bar',
            foreColor:"#bac0c7",
            height: 290,
                toolbar: {
                  show: false,
                }
          },
          plotOptions: {
            bar: {
              horizontal: false,
              columnWidth: '30%',
              endingShape: 'rounded'
            },
          },
          dataLabels: {
            enabled: false,
          },
          grid: {
              show: true,			
          },
          stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
          },
          colors: ['#EF3737', '#0F5EF7'],
          xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
              
          },
          yaxis: {
            
          },
           legend: {
                show: false,
           },
          fill: {
            opacity: 1
          },
          tooltip: {
            y: {
              formatter: function (val) {
                return "$ " + val + " thousands"
              }
            },
              marker: {
                show: false,
            },
          }
          };
  
          var chart = new ApexCharts(document.querySelector("#recent_trend"), options);
          chart.render();
      
      
      
  }); // End of use strict

  //[Data Table Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the Data Table

$(function () {
    "use strict";

    $('#example1').DataTable();
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
	
	
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
	
	$('#tickets').DataTable({
	  'paging'      : true,
	  'lengthChange': true,
	  'searching'   : true,
	  'ordering'    : true,
	  'info'        : true,
	  'autoWidth'   : false,
	});
	
	$('#productorder').DataTable({
	  'paging'      : true,
	  'lengthChange': true,
	  'searching'   : true,
	  'ordering'    : true,
	  'info'        : true,
	  'autoWidth'   : false,
	});
	

	$('#complex_header').DataTable();
	
	//--------Individual column searching
	
    // Setup - add a text input to each footer cell
    $('#example5 tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example5').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
	
	
	//---------------Form inputs
	var table = $('#example6').DataTable();
 
    $('button').click( function() {
        var data = table.$('input, select').serialize();
        alert(
            "The following data would have been submitted to the server: \n\n"+
            data.substr( 0, 120 )+'...'
        );
        return false;
    } );
	
	
	
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   

	var datepaginator = function() {
		return {
			init: function() {
				$("#paginator1").datepaginator(), 
				$("#paginator2").datepaginator({
					size: "large"
				}),
				$("#paginator3").datepaginator({
					size: "small"
				}), 
				$("#paginator4").datepaginator({
					onSelectedDateChanged: function(a, t) {
						alert("Selected date: " + moment(t).format("Do, MMM YYYY"))
					}
				})
			}
		}
	}();
	jQuery(document).ready(function() {
		datepaginator.init()
	}); 
	
  }); // End of use strict


  $(function() {
    "use strict";
    // ------------------------------
    // Basic bar chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('basic-bar'));

        // specify chart configuration item and data
        var option = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '3%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Site A','Site B']
                },
                toolbox: {
                    show : true,
                    feature : {

                        magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                color: ["#38649f", "#389f99"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec']
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'Site A',
                        type:'bar',
                        data:[7.2, 5.3, 6.1, 32.1, 23.1, 89.2, 158.4, 178.1, 36.4, 22.7, 7.1, 9.4],
                        markPoint : {
                            data : [
                                {type : 'max', name: 'Max'},
                                {type : 'min', name: 'Min'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name: 'Average'}
                            ]
                        }
                    },
                    {
                        name:'Site B',
                        type:'bar',
                        data:[19.4, 7.9, 8.9, 27.9, 24.8, 88.1, 167.8, 197.5, 47.1, 16.7, 7.1, 1.5],
                        markPoint : {
                            data : [
                                {name : 'The highest year', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                                {name : 'Year minimum', value : 2.3, xAxis: 11, yAxis: 3}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name : 'Average'}
                            ]
                        }
                    }
                ]
            };
        // use configuration item and data specified to show chart
        myChart.setOption(option);
    
    
    // ------------------------------
    // Stacked bar chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var stackedChart = echarts.init(document.getElementById('stacked-bar'));

        // specify chart configuration item and data
        var option = {
                // Setup grid
                grid: {
                    x: 40,
                    x2: 40,
                    y: 45,
                    y2: 25
                },

                // Add tooltip
                tooltip : {
                    trigger: 'axis',
                    axisPointer : {            // Axis indicator axis trigger effective
                        type : 'shadow'        // The default is a straight line, optionally: 'line' | 'shadow'
                    }
                },

                // Add legend
                legend: {
                    data: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5']
                },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ff8f00', '#ee1044'],

                // Horizontal axis
                xAxis: [{
                    type: 'value',
                }],

                // Vertical axis
                yAxis: [{
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                }],

                // Add series
                series : [
                    {
                        name:'Data1',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[321, 269, 358, 369, 348, 312, 299]
                    },
                    {
                        name:'Data2',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[159, 147, 123, 136, 87, 199, 248]
                    },
                    {
                        name:'Data3',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[269, 248, 158, 325, 248, 279, 357]
                    },
                    {
                        name:'Data4',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[101, 198, 247, 136, 178, 388, 499]
                    },
                    {
                        name:'Data5',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[869, 965, 975, 752, 1254, 1458, 875]
                    }
                ]
            };
        // use configuration item and data specified to show chart
        stackedChart.setOption(option);
       
    
        //***************************
       // Stacked chart
       //***************************
        
        
        //***************************
       // Stacked Area chart
       //***************************
        var stackedbarcolumnChart = echarts.init(document.getElementById('stacked-column'));
        var option = {
            
             // Setup grid
                grid: {
                    x: 40,
                    x2: 40,
                    y: 45,
                    y2: 25
                },

                // Add tooltip
                tooltip : {
                    trigger: 'axis',
                    axisPointer : {            // Axis indicator axis trigger effective
                        type : 'shadow'        // The default is a straight line, optionally: 'line' | 'shadow'
                    }
                },

                // Add legend
                legend: {
                    data: [  'Data1', 'Data2', 'Data3', 'Data4', 'Data5', 'Data7']
                },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ff8f00', '#ee1044'],

                // Enable drag recalculate
                calculable: true,

                // Horizontal axis
                xAxis: [{
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                }],

                // Vertical axis
                yAxis: [{
                    type: 'value',
                }],

                // Add series
                series : [
                    
                    {
                        name:'Data1',
                        type:'bar',
                        stack: 'data1',
                        data:[178, 241, 210, 147, 299, 358, 487]
                    },
                    {
                        name:'Data2',
                        type:'bar',
                        data:[875, 845, 985, 1254, 1425, 1235, 1425],
                        markLine : {
                            itemStyle:{
                                normal:{
                                    lineStyle:{
                                        type: 'dashed'
                                    }
                                }
                            },
                            data : [
                                [{type : 'min'}, {type : 'max'}]
                            ]
                        }
                    },
                    {
                        name:'Data3',
                        type:'bar',
                        barWidth : 12,
                        stack: 'data',
                        data:[654, 758, 754, 854, 1245, 1100, 1140]
                    },
                    {
                        name:'Data4',
                        type:'bar',
                        stack: 'data',
                        data:[104, 134, 125, 158, 245, 236, 278]
                    },
                    {
                        name:'Data5',
                        type:'bar',
                        stack: 'data',
                        data:[54, 123, 147, 85, 165, 158, 123]
                    },
                    {
                        name:'Data6',
                        type:'bar',
                        stack: 'data',
                        data:[21, 84, 79, 86, 135, 158, 210]
                    }
                ]
                // Add series
                
        };
        stackedbarcolumnChart.setOption(option);
        
    // ------------------------------
    // Basic line chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var barbasicChart = echarts.init(document.getElementById('bar-basic'));

        var option = {

             // Setup grid
                grid: {
                    x: 60,
                    x2: 40,
                    y: 45,
                    y2: 25
                },

                // Add tooltip
                tooltip: {
                    trigger: 'axis'
                },

                // Add legend
                legend: {
                    data: ['2018', '2019']
                },

                // Add custom colors
                color: ['#ee1044', '#389f99'],

                // Horizontal axis
                xAxis: [{
                    type: 'value',
                    boundaryGap: [0, 0.01]
                }],

                // Vertical axis
                yAxis: [{
                    type: 'category',
                    data: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5', 'Data6']
                }],

                // Add series
                series : [
                    {
                        name:'2018',
                        type:'bar',
                        data:[845, 542, 348, 298, 548, 398]
                    },
                    {
                        name:'2019',
                        type:'bar',
                        data:[689, 754, 498, 123, 489, 598]
                    }
                ]
        };
        // use configuration item and data specified to show chart
        barbasicChart.setOption(option);
    
    
       //------------------------------------------------------
       // Resize chart on menu width change and window resize
       //------------------------------------------------------
        $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".sidebartoggler").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                        stackedChart.resize();
                        stackedbarcolumnChart.resize();
                        barbasicChart.resize();
                    }, 200);
                }
            });
});

if( $('#e_chart_2').length > 0 ){
    var eChart_1 = echarts.init(document.getElementById('e_chart_2'));
    var option = {
    title : {
        show:false
    },
    grid: {
        bottom: 40
    },
    color: ['#689f38', '#38649f'],	
    toolbox: {
        show:false
    },
    tooltip: {
            trigger: 'axis',
            backgroundColor: 'rgba(33,33,33,1)',
            borderRadius:0,
            padding:10,
            axisPointer: {
                type: 'cross',
                label: {
                    backgroundColor: 'rgba(33,33,33,1)'
                }
            },
            textStyle: {
                color: '#fff',
                fontStyle: 'normal',
                fontWeight: 'normal',
                fontFamily: "'Nunito Sans', sans-serif",
                fontSize: 12
            }	
        },
    legend: {
        show:false
    },
    dataZoom: [
        {
            show: false,
        }
    ],
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
            data : [
                '2009/6/12 2:00', '2009/6/12 3:00', '2009/6/12 4:00', '2009/6/12 5:00', '2009/6/12 6:00', '2009/6/12 7:00', '2009/6/12 8:00', '2009/6/12 9:00', '2009/6/12 10:00', '2009/6/12 11:00', '2009/6/12 12:00', '2009/6/12 13:00', '2009/6/12 14:00', '2009/6/12 15:00', '2009/6/12 16:00', '2009/6/12 17:00', '2009/6/12 18:00', '2009/6/12 19:00', '2009/6/12 20:00', '2009/6/12 21:00', '2009/6/12 22:00', '2009/6/12 23:00',
                '2009/6/13 0:00', '2009/6/13 1:00', '2009/6/13 2:00', '2009/6/13 3:00', '2009/6/13 4:00', '2009/6/13 5:00', '2009/6/13 6:00', '2009/6/13 7:00', '2009/6/13 8:00', '2009/6/13 9:00', '2009/6/13 10:00', '2009/6/13 11:00', '2009/6/13 12:00', '2009/6/13 13:00', '2009/6/13 14:00', '2009/6/13 15:00', '2009/6/13 16:00', '2009/6/13 17:00', '2009/6/13 18:00', '2009/6/13 19:00', '2009/6/13 20:00', '2009/6/13 21:00', '2009/6/13 22:00', '2009/6/13 23:00',
                '2009/6/14 0:00', '2009/6/14 1:00', '2009/6/14 2:00', '2009/6/14 3:00', '2009/6/14 4:00', '2009/6/14 5:00', '2009/6/14 6:00', '2009/6/14 7:00', '2009/6/14 8:00', '2009/6/14 9:00', '2009/6/14 10:00', '2009/6/14 11:00', '2009/6/14 12:00', '2009/6/14 13:00', '2009/6/14 14:00', '2009/6/14 15:00', '2009/6/14 16:00', '2009/6/14 17:00', '2009/6/14 18:00', '2009/6/14 19:00', '2009/6/14 20:00', '2009/6/14 21:00', '2009/6/14 22:00', '2009/6/14 23:00',
                '2009/6/15 0:00', '2009/6/15 1:00', '2009/6/15 2:00', '2009/6/15 3:00', '2009/6/15 4:00', '2009/6/15 5:00', '2009/6/15 6:00', '2009/6/15 7:00', '2009/6/15 8:00', '2009/6/15 9:00', '2009/6/15 10:00', '2009/6/15 11:00', '2009/6/15 12:00', '2009/6/15 13:00', '2009/6/15 14:00', '2009/6/15 15:00', '2009/6/15 16:00', '2009/6/15 17:00', '2009/6/15 18:00', '2009/6/15 19:00', '2009/6/15 20:00', '2009/6/15 21:00', '2009/6/15 22:00', '2009/6/15 23:00',
                '2009/6/15 0:00', '2009/6/16 1:00', '2009/6/16 2:00', '2009/6/16 3:00', '2009/6/16 4:00', '2009/6/16 5:00', '2009/6/16 6:00', '2009/6/16 7:00', '2009/6/16 8:00', '2009/6/16 9:00', '2009/6/16 10:00', '2009/6/16 11:00', '2009/6/16 12:00', '2009/6/16 13:00', '2009/6/16 14:00', '2009/6/16 15:00', '2009/6/16 16:00', '2009/6/16 17:00', '2009/6/16 18:00', '2009/6/16 19:00', '2009/6/16 20:00', '2009/6/16 21:00', '2009/6/16 22:00', '2009/6/16 23:00',
                '2009/6/15 0:00', '2009/6/17 1:00', '2009/6/17 2:00', '2009/6/17 3:00', '2009/6/17 4:00', '2009/6/17 5:00', '2009/6/17 6:00', '2009/6/17 7:00', '2009/6/17 8:00', '2009/6/17 9:00', '2009/6/17 10:00', '2009/6/17 11:00', '2009/6/17 12:00', '2009/6/17 13:00', '2009/6/17 14:00', '2009/6/17 15:00', '2009/6/17 16:00', '2009/6/17 17:00', '2009/6/17 18:00', '2009/6/17 19:00', '2009/6/17 20:00', '2009/6/17 21:00', '2009/6/17 22:00', '2009/6/17 23:00',
                '2009/6/18 0:00', '2009/6/18 1:00', '2009/6/18 2:00', '2009/6/18 3:00', '2009/6/18 4:00', '2009/6/18 5:00', '2009/6/18 6:00', '2009/6/18 7:00', '2009/6/18 8:00', '2009/6/18 9:00', '2009/6/18 10:00', '2009/6/18 11:00', '2009/6/18 12:00', '2009/6/18 13:00', '2009/6/18 14:00', '2009/6/18 15:00', '2009/6/18 16:00', '2009/6/18 17:00', '2009/6/18 18:00', '2009/6/18 19:00', '2009/6/18 20:00', '2009/6/18 21:00', '2009/6/18 22:00', '2009/6/18 23:00',
                '2009/6/15 0:00', '2009/6/19 1:00', '2009/6/19 2:00', '2009/6/19 3:00', '2009/6/19 4:00', '2009/6/19 5:00', '2009/6/19 6:00', '2009/6/19 7:00', '2009/6/19 8:00', '2009/6/19 9:00', '2009/6/19 10:00', '2009/6/19 11:00', '2009/6/19 12:00', '2009/6/19 13:00', '2009/6/19 14:00', '2009/6/19 15:00', '2009/6/19 16:00', '2009/6/19 17:00', '2009/6/19 18:00', '2009/6/19 19:00', '2009/6/19 20:00', '2009/6/19 21:00', '2009/6/19 22:00', '2009/6/19 23:00',
                '2009/6/20 0:00', '2009/6/20 1:00', '2009/6/20 2:00', '2009/6/20 3:00', '2009/6/20 4:00', '2009/6/20 5:00', '2009/6/20 6:00', '2009/6/20 7:00', '2009/6/20 8:00', '2009/6/20 9:00', '2009/6/20 10:00', '2009/6/20 11:00', '2009/6/20 12:00', '2009/6/20 13:00', '2009/6/20 14:00', '2009/6/20 15:00', '2009/6/20 16:00', '2009/6/20 17:00', '2009/6/20 18:00', '2009/6/20 19:00', '2009/6/20 20:00', '2009/6/20 21:00', '2009/6/20 22:00', '2009/6/20 23:00',
                '2009/6/21 0:00', '2009/6/21 1:00', '2009/6/21 2:00', '2009/6/21 3:00', '2009/6/21 4:00', '2009/6/21 5:00', '2009/6/21 6:00', '2009/6/21 7:00', '2009/6/21 8:00', '2009/6/21 9:00', '2009/6/21 10:00', '2009/6/21 11:00', '2009/6/21 12:00', '2009/6/21 13:00', '2009/6/21 14:00', '2009/6/21 15:00', '2009/6/21 16:00', '2009/6/21 17:00', '2009/6/21 18:00', '2009/6/21 19:00', '2009/6/21 20:00', '2009/6/21 21:00', '2009/6/21 22:00', '2009/6/21 23:00',
                '2009/6/22 0:00', '2009/6/22 1:00', '2009/6/22 2:00', '2009/6/22 3:00', '2009/6/22 4:00', '2009/6/22 5:00', '2009/6/22 6:00', '2009/6/22 7:00', '2009/6/22 8:00', '2009/6/22 9:00', '2009/6/22 10:00', '2009/6/22 11:00', '2009/6/22 12:00', '2009/6/22 13:00', '2009/6/22 14:00', '2009/6/22 15:00', '2009/6/22 16:00', '2009/6/22 17:00', '2009/6/22 18:00', '2009/6/22 19:00', '2009/6/22 20:00', '2009/6/22 21:00', '2009/6/22 22:00', '2009/6/22 23:00',
                '2009/6/23 0:00', '2009/6/23 1:00', '2009/6/23 2:00', '2009/6/23 3:00', '2009/6/23 4:00', '2009/6/23 5:00', '2009/6/23 6:00', '2009/6/23 7:00', '2009/6/23 8:00', '2009/6/23 9:00', '2009/6/23 10:00', '2009/6/23 11:00', '2009/6/23 12:00', '2009/6/23 13:00', '2009/6/23 14:00', '2009/6/23 15:00', '2009/6/23 16:00', '2009/6/23 17:00', '2009/6/23 18:00', '2009/6/23 19:00', '2009/6/23 20:00', '2009/6/23 21:00', '2009/6/23 22:00', '2009/6/23 23:00',
                '2009/6/24 0:00', '2009/6/24 1:00', '2009/6/24 2:00', '2009/6/24 3:00', '2009/6/24 4:00', '2009/6/24 5:00', '2009/6/24 6:00', '2009/6/24 7:00', '2009/6/24 8:00', '2009/6/24 9:00', '2009/6/24 10:00', '2009/6/24 11:00', '2009/6/24 12:00', '2009/6/24 13:00', '2009/6/24 14:00', '2009/6/24 15:00', '2009/6/24 16:00', '2009/6/24 17:00', '2009/6/24 18:00', '2009/6/24 19:00', '2009/6/24 20:00', '2009/6/24 21:00', '2009/6/24 22:00', '2009/6/24 23:00',
                '2009/6/25 0:00', '2009/6/25 1:00', '2009/6/25 2:00', '2009/6/25 3:00', '2009/6/25 4:00', '2009/6/25 5:00', '2009/6/25 6:00', '2009/6/25 7:00', '2009/6/25 8:00', '2009/6/25 9:00', '2009/6/25 10:00', '2009/6/25 11:00', '2009/6/25 12:00', '2009/6/25 13:00', '2009/6/25 14:00', '2009/6/25 15:00', '2009/6/25 16:00', '2009/6/25 17:00', '2009/6/25 18:00', '2009/6/25 19:00', '2009/6/25 20:00', '2009/6/25 21:00', '2009/6/25 22:00', '2009/6/25 23:00',
                '2009/6/26 0:00', '2009/6/26 1:00', '2009/6/26 2:00', '2009/6/26 3:00', '2009/6/26 4:00', '2009/6/26 5:00', '2009/6/26 6:00', '2009/6/26 7:00', '2009/6/26 8:00', '2009/6/26 9:00', '2009/6/26 10:00', '2009/6/26 11:00', '2009/6/26 12:00', '2009/6/26 13:00', '2009/6/26 14:00', '2009/6/26 15:00', '2009/6/26 16:00', '2009/6/26 17:00', '2009/6/26 18:00', '2009/6/26 19:00', '2009/6/26 20:00', '2009/6/26 21:00', '2009/6/26 22:00', '2009/6/26 23:00',
                '2009/6/27 0:00', '2009/6/27 1:00', '2009/6/27 2:00', '2009/6/27 3:00', '2009/6/27 4:00', '2009/6/27 5:00', '2009/6/27 6:00', '2009/6/27 7:00', '2009/6/27 8:00', '2009/6/27 9:00', '2009/6/27 10:00', '2009/6/27 11:00', '2009/6/27 12:00', '2009/6/27 13:00', '2009/6/27 14:00', '2009/6/27 15:00', '2009/6/27 16:00', '2009/6/27 17:00', '2009/6/27 18:00', '2009/6/27 19:00', '2009/6/27 20:00', '2009/6/27 21:00', '2009/6/27 22:00', '2009/6/27 23:00',

                '2009/6/28 0:00', '2009/6/28 1:00', '2009/6/28 2:00', '2009/6/28 3:00', '2009/6/28 4:00', '2009/6/28 5:00', '2009/6/28 6:00', '2009/6/28 7:00', '2009/6/28 8:00', '2009/6/28 9:00', '2009/6/28 10:00', '2009/6/28 11:00', '2009/6/28 12:00', '2009/6/28 13:00', '2009/6/28 14:00', '2009/6/28 15:00', '2009/6/28 16:00', '2009/6/28 17:00', '2009/6/28 18:00', '2009/6/28 19:00', '2009/6/28 20:00', '2009/6/28 21:00', '2009/6/28 22:00', '2009/6/28 23:00',
                '2009/6/29 0:00', '2009/6/29 1:00', '2009/6/29 2:00', '2009/6/29 3:00', '2009/6/29 4:00', '2009/6/29 5:00', '2009/6/29 6:00', '2009/6/29 7:00', '2009/6/29 8:00', '2009/6/29 9:00', '2009/6/29 10:00', '2009/6/29 11:00', '2009/6/29 12:00', '2009/6/29 13:00', '2009/6/29 14:00', '2009/6/29 15:00', '2009/6/29 16:00', '2009/6/29 17:00', '2009/6/29 18:00', '2009/6/29 19:00', '2009/6/29 20:00', '2009/6/29 21:00', '2009/6/29 22:00', '2009/6/29 23:00',
                '2009/6/30 0:00', '2009/6/30 1:00', '2009/6/30 2:00', '2009/6/30 3:00', '2009/6/30 4:00', '2009/6/30 5:00', '2009/6/30 6:00', '2009/6/30 7:00', '2009/6/30 8:00', '2009/6/30 9:00', '2009/6/30 10:00', '2009/6/30 11:00', '2009/6/30 12:00', '2009/6/30 13:00', '2009/6/30 14:00', '2009/6/30 15:00', '2009/6/30 16:00', '2009/6/30 17:00', '2009/6/30 18:00', '2009/6/30 19:00', '2009/6/30 20:00', '2009/6/30 21:00', '2009/6/30 22:00', '2009/6/30 23:00',
                '2009/7/1 0:00', '2009/7/1 1:00', '2009/7/1 2:00', '2009/7/1 3:00', '2009/7/1 4:00', '2009/7/1 5:00', '2009/7/1 6:00', '2009/7/1 7:00', '2009/7/1 8:00', '2009/7/1 9:00', '2009/7/1 10:00', '2009/7/1 11:00', '2009/7/1 12:00', '2009/7/1 13:00', '2009/7/1 14:00', '2009/7/1 15:00', '2009/7/1 16:00', '2009/7/1 17:00', '2009/7/1 18:00', '2009/7/1 19:00', '2009/7/1 20:00', '2009/7/1 21:00', '2009/7/1 22:00', '2009/7/1 23:00',
                '2009/7/2 0:00', '2009/7/2 1:00', '2009/7/2 2:00', '2009/7/2 3:00', '2009/7/2 4:00', '2009/7/2 5:00', '2009/7/2 6:00', '2009/7/2 7:00', '2009/7/2 8:00', '2009/7/2 9:00', '2009/7/2 10:00', '2009/7/2 11:00', '2009/7/2 12:00', '2009/7/2 13:00', '2009/7/2 14:00', '2009/7/2 15:00', '2009/7/2 16:00', '2009/7/2 17:00', '2009/7/2 18:00', '2009/7/2 19:00', '2009/7/2 20:00', '2009/7/2 21:00', '2009/7/2 22:00', '2009/7/2 23:00',
                '2009/7/3 0:00', '2009/7/3 1:00', '2009/7/3 2:00', '2009/7/3 3:00', '2009/7/3 4:00', '2009/7/3 5:00', '2009/7/3 6:00', '2009/7/3 7:00', '2009/7/3 8:00', '2009/7/3 9:00', '2009/7/3 10:00', '2009/7/3 11:00', '2009/7/3 12:00', '2009/7/3 13:00', '2009/7/3 14:00', '2009/7/3 15:00', '2009/7/3 16:00', '2009/7/3 17:00', '2009/7/3 18:00', '2009/7/3 19:00', '2009/7/3 20:00', '2009/7/3 21:00', '2009/7/3 22:00', '2009/7/3 23:00',
                '2009/7/4 0:00', '2009/7/4 1:00', '2009/7/4 2:00', '2009/7/4 3:00', '2009/7/4 4:00', '2009/7/4 5:00', '2009/7/4 6:00', '2009/7/4 7:00', '2009/7/4 8:00', '2009/7/4 9:00', '2009/7/4 10:00', '2009/7/4 11:00', '2009/7/4 12:00', '2009/7/4 13:00', '2009/7/4 14:00', '2009/7/4 15:00', '2009/7/4 16:00', '2009/7/4 17:00', '2009/7/4 18:00', '2009/7/4 19:00', '2009/7/4 20:00', '2009/7/4 21:00', '2009/7/4 22:00', '2009/7/4 23:00',
                '2009/7/5 0:00', '2009/7/5 1:00', '2009/7/5 2:00', '2009/7/5 3:00', '2009/7/5 4:00', '2009/7/5 5:00', '2009/7/5 6:00', '2009/7/5 7:00', '2009/7/5 8:00', '2009/7/5 9:00', '2009/7/5 10:00', '2009/7/5 11:00', '2009/7/5 12:00', '2009/7/5 13:00', '2009/7/5 14:00', '2009/7/5 15:00', '2009/7/5 16:00', '2009/7/5 17:00', '2009/7/5 18:00', '2009/7/5 19:00', '2009/7/5 20:00', '2009/7/5 21:00', '2009/7/5 22:00', '2009/7/5 23:00',
                '2009/7/6 0:00', '2009/7/6 1:00', '2009/7/6 2:00', '2009/7/6 3:00', '2009/7/6 4:00', '2009/7/6 5:00', '2009/7/6 6:00', '2009/7/6 7:00', '2009/7/6 8:00', '2009/7/6 9:00', '2009/7/6 10:00', '2009/7/6 11:00', '2009/7/6 12:00', '2009/7/6 13:00', '2009/7/6 14:00', '2009/7/6 15:00', '2009/7/6 16:00', '2009/7/6 17:00', '2009/7/6 18:00', '2009/7/6 19:00', '2009/7/6 20:00', '2009/7/6 21:00', '2009/7/6 22:00', '2009/7/6 23:00',
                '2009/7/7 0:00', '2009/7/7 1:00', '2009/7/7 2:00', '2009/7/7 3:00', '2009/7/7 4:00', '2009/7/7 5:00', '2009/7/7 6:00', '2009/7/7 7:00', '2009/7/7 8:00', '2009/7/7 9:00', '2009/7/7 10:00', '2009/7/7 11:00', '2009/7/7 12:00', '2009/7/7 13:00', '2009/7/7 14:00', '2009/7/7 15:00', '2009/7/7 16:00', '2009/7/7 17:00', '2009/7/7 18:00', '2009/7/7 19:00', '2009/7/7 20:00', '2009/7/7 21:00', '2009/7/7 22:00', '2009/7/7 23:00',
                '2009/7/8 0:00', '2009/7/8 1:00', '2009/7/8 2:00', '2009/7/8 3:00', '2009/7/8 4:00', '2009/7/8 5:00', '2009/7/8 6:00', '2009/7/8 7:00', '2009/7/8 8:00', '2009/7/8 9:00', '2009/7/8 10:00', '2009/7/8 11:00', '2009/7/8 12:00', '2009/7/8 13:00', '2009/7/8 14:00', '2009/7/8 15:00', '2009/7/8 16:00', '2009/7/8 17:00', '2009/7/8 18:00', '2009/7/8 19:00', '2009/7/8 20:00', '2009/7/8 21:00', '2009/7/8 22:00', '2009/7/8 23:00',
                '2009/7/9 0:00', '2009/7/9 1:00', '2009/7/9 2:00', '2009/7/9 3:00', '2009/7/9 4:00', '2009/7/9 5:00', '2009/7/9 6:00', '2009/7/9 7:00', '2009/7/9 8:00', '2009/7/9 9:00', '2009/7/9 10:00', '2009/7/9 11:00', '2009/7/9 12:00', '2009/7/9 13:00', '2009/7/9 14:00', '2009/7/9 15:00', '2009/7/9 16:00', '2009/7/9 17:00', '2009/7/9 18:00', '2009/7/9 19:00', '2009/7/9 20:00', '2009/7/9 21:00', '2009/7/9 22:00', '2009/7/9 23:00',
                '2009/7/10 0:00', '2009/7/10 1:00', '2009/7/10 2:00', '2009/7/10 3:00', '2009/7/10 4:00', '2009/7/10 5:00', '2009/7/10 6:00', '2009/7/10 7:00', '2009/7/10 8:00', '2009/7/10 9:00', '2009/7/10 10:00', '2009/7/10 11:00', '2009/7/10 12:00', '2009/7/10 13:00', '2009/7/10 14:00', '2009/7/10 15:00', '2009/7/10 16:00', '2009/7/10 17:00', '2009/7/10 18:00', '2009/7/10 19:00', '2009/7/10 20:00', '2009/7/10 21:00', '2009/7/10 22:00', '2009/7/10 23:00',
                '2009/7/11 0:00', '2009/7/11 1:00', '2009/7/11 2:00', '2009/7/11 3:00', '2009/7/11 4:00', '2009/7/11 5:00', '2009/7/11 6:00', '2009/7/11 7:00', '2009/7/11 8:00', '2009/7/11 9:00', '2009/7/11 10:00', '2009/7/11 11:00', '2009/7/11 12:00', '2009/7/11 13:00', '2009/7/11 14:00', '2009/7/11 15:00', '2009/7/11 16:00', '2009/7/11 17:00', '2009/7/11 18:00', '2009/7/11 19:00', '2009/7/11 20:00', '2009/7/11 21:00', '2009/7/11 22:00', '2009/7/11 23:00',
                '2009/7/12 0:00', '2009/7/12 1:00', '2009/7/12 2:00', '2009/7/12 3:00', '2009/7/12 4:00', '2009/7/12 5:00', '2009/7/12 6:00', '2009/7/12 7:00', '2009/7/12 8:00', '2009/7/12 9:00', '2009/7/12 10:00', '2009/7/12 11:00', '2009/7/12 12:00', '2009/7/12 13:00', '2009/7/12 14:00', '2009/7/12 15:00', '2009/7/12 16:00', '2009/7/12 17:00', '2009/7/12 18:00', '2009/7/12 19:00', '2009/7/12 20:00', '2009/7/12 21:00', '2009/7/12 22:00', '2009/7/12 23:00',
                '2009/7/13 0:00', '2009/7/13 1:00', '2009/7/13 2:00', '2009/7/13 3:00', '2009/7/13 4:00', '2009/7/13 5:00', '2009/7/13 6:00', '2009/7/13 7:00', '2009/7/13 8:00', '2009/7/13 9:00', '2009/7/13 10:00', '2009/7/13 11:00', '2009/7/13 12:00', '2009/7/13 13:00', '2009/7/13 14:00', '2009/7/13 15:00', '2009/7/13 16:00', '2009/7/13 17:00', '2009/7/13 18:00', '2009/7/13 19:00', '2009/7/13 20:00', '2009/7/13 21:00', '2009/7/13 22:00', '2009/7/13 23:00',
                '2009/7/14 0:00', '2009/7/14 1:00', '2009/7/14 2:00', '2009/7/14 3:00', '2009/7/14 4:00', '2009/7/14 5:00', '2009/7/14 6:00', '2009/7/14 7:00', '2009/7/14 8:00', '2009/7/14 9:00', '2009/7/14 10:00', '2009/7/14 11:00', '2009/7/14 12:00', '2009/7/14 13:00', '2009/7/14 14:00', '2009/7/14 15:00', '2009/7/14 16:00', '2009/7/14 17:00', '2009/7/14 18:00', '2009/7/14 19:00', '2009/7/14 20:00', '2009/7/14 21:00', '2009/7/14 22:00', '2009/7/14 23:00',
                '2009/7/15 0:00', '2009/7/15 1:00', '2009/7/15 2:00', '2009/7/15 3:00', '2009/7/15 4:00', '2009/7/15 5:00', '2009/7/15 6:00', '2009/7/15 7:00', '2009/7/15 8:00', '2009/7/15 9:00', '2009/7/15 10:00', '2009/7/15 11:00', '2009/7/15 12:00', '2009/7/15 13:00', '2009/7/15 14:00', '2009/7/15 15:00', '2009/7/15 16:00', '2009/7/15 17:00', '2009/7/15 18:00', '2009/7/15 19:00', '2009/7/15 20:00', '2009/7/15 21:00', '2009/7/15 22:00', '2009/7/15 23:00',
                '2009/7/16 0:00', '2009/7/16 1:00', '2009/7/16 2:00', '2009/7/16 3:00', '2009/7/16 4:00', '2009/7/16 5:00', '2009/7/16 6:00', '2009/7/16 7:00', '2009/7/16 8:00', '2009/7/16 9:00', '2009/7/16 10:00', '2009/7/16 11:00', '2009/7/16 12:00', '2009/7/16 13:00', '2009/7/16 14:00', '2009/7/16 15:00', '2009/7/16 16:00', '2009/7/16 17:00', '2009/7/16 18:00', '2009/7/16 19:00', '2009/7/16 20:00', '2009/7/16 21:00', '2009/7/16 22:00', '2009/7/16 23:00',
                '2009/7/17 0:00', '2009/7/17 1:00', '2009/7/17 2:00', '2009/7/17 3:00', '2009/7/17 4:00', '2009/7/17 5:00', '2009/7/17 6:00', '2009/7/17 7:00', '2009/7/17 8:00', '2009/7/17 9:00', '2009/7/17 10:00', '2009/7/17 11:00', '2009/7/17 12:00', '2009/7/17 13:00', '2009/7/17 14:00', '2009/7/17 15:00', '2009/7/17 16:00', '2009/7/17 17:00', '2009/7/17 18:00', '2009/7/17 19:00', '2009/7/17 20:00', '2009/7/17 21:00', '2009/7/17 22:00', '2009/7/17 23:00',
                '2009/7/18 0:00', '2009/7/18 1:00', '2009/7/18 2:00', '2009/7/18 3:00', '2009/7/18 4:00', '2009/7/18 5:00', '2009/7/18 6:00', '2009/7/18 7:00', '2009/7/18 8:00', '2009/7/18 9:00', '2009/7/18 10:00', '2009/7/18 11:00', '2009/7/18 12:00', '2009/7/18 13:00', '2009/7/18 14:00', '2009/7/18 15:00', '2009/7/18 16:00', '2009/7/18 17:00', '2009/7/18 18:00', '2009/7/18 19:00', '2009/7/18 20:00', '2009/7/18 21:00', '2009/7/18 22:00', '2009/7/18 23:00',
                '2009/7/19 0:00', '2009/7/19 1:00', '2009/7/19 2:00', '2009/7/19 3:00', '2009/7/19 4:00', '2009/7/19 5:00', '2009/7/19 6:00', '2009/7/19 7:00', '2009/7/19 8:00', '2009/7/19 9:00', '2009/7/19 10:00', '2009/7/19 11:00', '2009/7/19 12:00', '2009/7/19 13:00', '2009/7/19 14:00', '2009/7/19 15:00', '2009/7/19 16:00', '2009/7/19 17:00', '2009/7/19 18:00', '2009/7/19 19:00', '2009/7/19 20:00', '2009/7/19 21:00', '2009/7/19 22:00', '2009/7/19 23:00',
                '2009/7/20 0:00', '2009/7/20 1:00', '2009/7/20 2:00', '2009/7/20 3:00', '2009/7/20 4:00', '2009/7/20 5:00', '2009/7/20 6:00', '2009/7/20 7:00', '2009/7/20 8:00', '2009/7/20 9:00', '2009/7/20 10:00', '2009/7/20 11:00', '2009/7/20 12:00', '2009/7/20 13:00', '2009/7/20 14:00', '2009/7/20 15:00', '2009/7/20 16:00', '2009/7/20 17:00', '2009/7/20 18:00', '2009/7/20 19:00', '2009/7/20 20:00', '2009/7/20 21:00', '2009/7/20 22:00', '2009/7/20 23:00',
                '2009/7/21 0:00', '2009/7/21 1:00', '2009/7/21 2:00', '2009/7/21 3:00', '2009/7/21 4:00', '2009/7/21 5:00', '2009/7/21 6:00', '2009/7/21 7:00', '2009/7/21 8:00', '2009/7/21 9:00', '2009/7/21 10:00', '2009/7/21 11:00', '2009/7/21 12:00', '2009/7/21 13:00', '2009/7/21 14:00', '2009/7/21 15:00', '2009/7/21 16:00', '2009/7/21 17:00', '2009/7/21 18:00', '2009/7/21 19:00', '2009/7/21 20:00', '2009/7/21 21:00', '2009/7/21 22:00', '2009/7/21 23:00',
                '2009/7/22 0:00', '2009/7/22 1:00', '2009/7/22 2:00', '2009/7/22 3:00', '2009/7/22 4:00', '2009/7/22 5:00', '2009/7/22 6:00', '2009/7/22 7:00', '2009/7/22 8:00', '2009/7/22 9:00', '2009/7/22 10:00', '2009/7/22 11:00', '2009/7/22 12:00', '2009/7/22 13:00', '2009/7/22 14:00', '2009/7/22 15:00', '2009/7/22 16:00', '2009/7/22 17:00', '2009/7/22 18:00', '2009/7/22 19:00', '2009/7/22 20:00', '2009/7/22 21:00', '2009/7/22 22:00', '2009/7/22 23:00',
                '2009/7/23 0:00', '2009/7/23 1:00', '2009/7/23 2:00', '2009/7/23 3:00', '2009/7/23 4:00', '2009/7/23 5:00', '2009/7/23 6:00', '2009/7/23 7:00', '2009/7/23 8:00', '2009/7/23 9:00', '2009/7/23 10:00', '2009/7/23 11:00', '2009/7/23 12:00', '2009/7/23 13:00', '2009/7/23 14:00', '2009/7/23 15:00', '2009/7/23 16:00', '2009/7/23 17:00', '2009/7/23 18:00', '2009/7/23 19:00', '2009/7/23 20:00', '2009/7/23 21:00', '2009/7/23 22:00', '2009/7/23 23:00',
                '2009/7/24 0:00', '2009/7/24 1:00', '2009/7/24 2:00', '2009/7/24 3:00', '2009/7/24 4:00', '2009/7/24 5:00', '2009/7/24 6:00', '2009/7/24 7:00', '2009/7/24 8:00', '2009/7/24 9:00', '2009/7/24 10:00', '2009/7/24 11:00', '2009/7/24 12:00', '2009/7/24 13:00', '2009/7/24 14:00', '2009/7/24 15:00', '2009/7/24 16:00', '2009/7/24 17:00', '2009/7/24 18:00', '2009/7/24 19:00', '2009/7/24 20:00', '2009/7/24 21:00', '2009/7/24 22:00', '2009/7/24 23:00',
                '2009/7/25 0:00', '2009/7/25 1:00', '2009/7/25 2:00', '2009/7/25 3:00', '2009/7/25 4:00', '2009/7/25 5:00', '2009/7/25 6:00', '2009/7/25 7:00', '2009/7/25 8:00', '2009/7/25 9:00', '2009/7/25 10:00', '2009/7/25 11:00', '2009/7/25 12:00', '2009/7/25 13:00', '2009/7/25 14:00', '2009/7/25 15:00', '2009/7/25 16:00', '2009/7/25 17:00', '2009/7/25 18:00', '2009/7/25 19:00', '2009/7/25 20:00', '2009/7/25 21:00', '2009/7/25 22:00', '2009/7/25 23:00',
                '2009/7/26 0:00', '2009/7/26 1:00', '2009/7/26 2:00', '2009/7/26 3:00', '2009/7/26 4:00', '2009/7/26 5:00', '2009/7/26 6:00', '2009/7/26 7:00', '2009/7/26 8:00', '2009/7/26 9:00', '2009/7/26 10:00', '2009/7/26 11:00', '2009/7/26 12:00', '2009/7/26 13:00', '2009/7/26 14:00', '2009/7/26 15:00', '2009/7/26 16:00', '2009/7/26 17:00', '2009/7/26 18:00', '2009/7/26 19:00', '2009/7/26 20:00', '2009/7/26 21:00', '2009/7/26 22:00', '2009/7/26 23:00',
                '2009/7/27 0:00', '2009/7/27 1:00', '2009/7/27 2:00', '2009/7/27 3:00', '2009/7/27 4:00', '2009/7/27 5:00', '2009/7/27 6:00', '2009/7/27 7:00', '2009/7/27 8:00', '2009/7/27 9:00', '2009/7/27 10:00', '2009/7/27 11:00', '2009/7/27 12:00', '2009/7/27 13:00', '2009/7/27 14:00', '2009/7/27 15:00', '2009/7/27 16:00', '2009/7/27 17:00', '2009/7/27 18:00', '2009/7/27 19:00', '2009/7/27 20:00', '2009/7/27 21:00', '2009/7/27 22:00', '2009/7/27 23:00',
                '2009/7/28 0:00', '2009/7/28 1:00', '2009/7/28 2:00', '2009/7/28 3:00', '2009/7/28 4:00', '2009/7/28 5:00', '2009/7/28 6:00', '2009/7/28 7:00', '2009/7/28 8:00', '2009/7/28 9:00', '2009/7/28 10:00', '2009/7/28 11:00', '2009/7/28 12:00', '2009/7/28 13:00', '2009/7/28 14:00', '2009/7/28 15:00', '2009/7/28 16:00', '2009/7/28 17:00', '2009/7/28 18:00', '2009/7/28 19:00', '2009/7/28 20:00', '2009/7/28 21:00', '2009/7/28 22:00', '2009/7/28 23:00',
                '2009/7/29 0:00', '2009/7/29 1:00', '2009/7/29 2:00', '2009/7/29 3:00', '2009/7/29 4:00', '2009/7/29 5:00', '2009/7/29 6:00', '2009/7/29 7:00', '2009/7/29 8:00', '2009/7/29 9:00', '2009/7/29 10:00', '2009/7/29 11:00', '2009/7/29 12:00', '2009/7/29 13:00', '2009/7/29 14:00', '2009/7/29 15:00', '2009/7/29 16:00', '2009/7/29 17:00', '2009/7/29 18:00', '2009/7/29 19:00', '2009/7/29 20:00', '2009/7/29 21:00', '2009/7/29 22:00', '2009/7/29 23:00',
                '2009/7/30 0:00', '2009/7/30 1:00', '2009/7/30 2:00', '2009/7/30 3:00', '2009/7/30 4:00', '2009/7/30 5:00', '2009/7/30 6:00', '2009/7/30 7:00', '2009/7/30 8:00', '2009/7/30 9:00', '2009/7/30 10:00', '2009/7/30 11:00', '2009/7/30 12:00', '2009/7/30 13:00', '2009/7/30 14:00', '2009/7/30 15:00', '2009/7/30 16:00', '2009/7/30 17:00', '2009/7/30 18:00', '2009/7/30 19:00', '2009/7/30 20:00', '2009/7/30 21:00', '2009/7/30 22:00', '2009/7/30 23:00',
                '2009/7/31 0:00', '2009/7/31 1:00', '2009/7/31 2:00', '2009/7/31 3:00', '2009/7/31 4:00', '2009/7/31 5:00', '2009/7/31 6:00', '2009/7/31 7:00', '2009/7/31 8:00', '2009/7/31 9:00', '2009/7/31 10:00', '2009/7/31 11:00', '2009/7/31 12:00', '2009/7/31 13:00', '2009/7/31 14:00', '2009/7/31 15:00', '2009/7/31 16:00', '2009/7/31 17:00', '2009/7/31 18:00', '2009/7/31 19:00', '2009/7/31 20:00', '2009/7/31 21:00', '2009/7/31 22:00', '2009/7/31 23:00',
                '2009/8/1 0:00', '2009/8/1 1:00', '2009/8/1 2:00', '2009/8/1 3:00', '2009/8/1 4:00', '2009/8/1 5:00', '2009/8/1 6:00', '2009/8/1 7:00', '2009/8/1 8:00', '2009/8/1 9:00', '2009/8/1 10:00', '2009/8/1 11:00', '2009/8/1 12:00', '2009/8/1 13:00', '2009/8/1 14:00', '2009/8/1 15:00', '2009/8/1 16:00', '2009/8/1 17:00', '2009/8/1 18:00', '2009/8/1 19:00', '2009/8/1 20:00', '2009/8/1 21:00', '2009/8/1 22:00', '2009/8/1 23:00', '2009/8/2 0:00', '2009/8/2 1:00', '2009/8/2 2:00', '2009/8/2 3:00', '2009/8/2 4:00', '2009/8/2 5:00', '2009/8/2 6:00', '2009/8/2 7:00', '2009/8/2 8:00', '2009/8/2 9:00', '2009/8/2 10:00', '2009/8/2 11:00', '2009/8/2 12:00', '2009/8/2 13:00', '2009/8/2 14:00', '2009/8/2 15:00', '2009/8/2 16:00', '2009/8/2 17:00', '2009/8/2 18:00', '2009/8/2 19:00', '2009/8/2 20:00', '2009/8/2 21:00', '2009/8/2 22:00', '2009/8/2 23:00', '2009/8/3 0:00', '2009/8/3 1:00', '2009/8/3 2:00', '2009/8/3 3:00', '2009/8/3 4:00', '2009/8/3 5:00', '2009/8/3 6:00', '2009/8/3 7:00', '2009/8/3 8:00', '2009/8/3 9:00', '2009/8/3 10:00', '2009/8/3 11:00', '2009/8/3 12:00', '2009/8/3 13:00', '2009/8/3 14:00', '2009/8/3 15:00', '2009/8/3 16:00', '2009/8/3 17:00', '2009/8/3 18:00', '2009/8/3 19:00', '2009/8/3 20:00', '2009/8/3 21:00', '2009/8/3 22:00', '2009/8/3 23:00', '2009/8/4 0:00', '2009/8/4 1:00', '2009/8/4 2:00', '2009/8/4 3:00', '2009/8/4 4:00', '2009/8/4 5:00', '2009/8/4 6:00', '2009/8/4 7:00', '2009/8/4 8:00', '2009/8/4 9:00', '2009/8/4 10:00', '2009/8/4 11:00', '2009/8/4 12:00', '2009/8/4 13:00', '2009/8/4 14:00', '2009/8/4 15:00', '2009/8/4 16:00', '2009/8/4 17:00', '2009/8/4 18:00', '2009/8/4 19:00', '2009/8/4 20:00', '2009/8/4 21:00', '2009/8/4 22:00', '2009/8/4 23:00', '2009/8/5 0:00', '2009/8/5 1:00', '2009/8/5 2:00', '2009/8/5 3:00', '2009/8/5 4:00', '2009/8/5 5:00', '2009/8/5 6:00', '2009/8/5 7:00', '2009/8/5 8:00', '2009/8/5 9:00', '2009/8/5 10:00', '2009/8/5 11:00', '2009/8/5 12:00', '2009/8/5 13:00', '2009/8/5 14:00', '2009/8/5 15:00', '2009/8/5 16:00', '2009/8/5 17:00', '2009/8/5 18:00', '2009/8/5 19:00', '2009/8/5 20:00', '2009/8/5 21:00', '2009/8/5 22:00', '2009/8/5 23:00', '2009/8/6 0:00', '2009/8/6 1:00', '2009/8/6 2:00', '2009/8/6 3:00', '2009/8/6 4:00', '2009/8/6 5:00', '2009/8/6 6:00', '2009/8/6 7:00', '2009/8/6 8:00', '2009/8/6 9:00', '2009/8/6 10:00', '2009/8/6 11:00', '2009/8/6 12:00', '2009/8/6 13:00', '2009/8/6 14:00', '2009/8/6 15:00', '2009/8/6 16:00', '2009/8/6 17:00', '2009/8/6 18:00', '2009/8/6 19:00', '2009/8/6 20:00', '2009/8/6 21:00', '2009/8/6 22:00', '2009/8/6 23:00', '2009/8/7 0:00', '2009/8/7 1:00', '2009/8/7 2:00', '2009/8/7 3:00', '2009/8/7 4:00', '2009/8/7 5:00', '2009/8/7 6:00', '2009/8/7 7:00', '2009/8/7 8:00', '2009/8/7 9:00', '2009/8/7 10:00', '2009/8/7 11:00', '2009/8/7 12:00', '2009/8/7 13:00', '2009/8/7 14:00', '2009/8/7 15:00', '2009/8/7 16:00', '2009/8/7 17:00', '2009/8/7 18:00', '2009/8/7 19:00', '2009/8/7 20:00', '2009/8/7 21:00', '2009/8/7 22:00', '2009/8/7 23:00', '2009/8/8 0:00', '2009/8/8 1:00', '2009/8/8 2:00', '2009/8/8 3:00', '2009/8/8 4:00', '2009/8/8 5:00', '2009/8/8 6:00', '2009/8/8 7:00', '2009/8/8 8:00', '2009/8/8 9:00', '2009/8/8 10:00', '2009/8/8 11:00', '2009/8/8 12:00', '2009/8/8 13:00', '2009/8/8 14:00', '2009/8/8 15:00', '2009/8/8 16:00', '2009/8/8 17:00', '2009/8/8 18:00', '2009/8/8 19:00', '2009/8/8 20:00', '2009/8/8 21:00', '2009/8/8 22:00', '2009/8/8 23:00', '2009/8/9 0:00', '2009/8/9 1:00', '2009/8/9 2:00', '2009/8/9 3:00', '2009/8/9 4:00', '2009/8/9 5:00', '2009/8/9 6:00', '2009/8/9 7:00', '2009/8/9 8:00', '2009/8/9 9:00', '2009/8/9 10:00', '2009/8/9 11:00', '2009/8/9 12:00', '2009/8/9 13:00', '2009/8/9 14:00', '2009/8/9 15:00', '2009/8/9 16:00', '2009/8/9 17:00', '2009/8/9 18:00', '2009/8/9 19:00', '2009/8/9 20:00', '2009/8/9 21:00', '2009/8/9 22:00', '2009/8/9 23:00', '2009/8/10 0:00', '2009/8/10 1:00', '2009/8/10 2:00', '2009/8/10 3:00', '2009/8/10 4:00', '2009/8/10 5:00', '2009/8/10 6:00', '2009/8/10 7:00', '2009/8/10 8:00', '2009/8/10 9:00', '2009/8/10 10:00', '2009/8/10 11:00', '2009/8/10 12:00', '2009/8/10 13:00', '2009/8/10 14:00', '2009/8/10 15:00', '2009/8/10 16:00', '2009/8/10 17:00', '2009/8/10 18:00', '2009/8/10 19:00', '2009/8/10 20:00', '2009/8/10 21:00', '2009/8/10 22:00', '2009/8/10 23:00', '2009/8/11 0:00', '2009/8/11 1:00', '2009/8/11 2:00', '2009/8/11 3:00', '2009/8/11 4:00', '2009/8/11 5:00', '2009/8/11 6:00', '2009/8/11 7:00', '2009/8/11 8:00', '2009/8/11 9:00', '2009/8/11 10:00', '2009/8/11 11:00', '2009/8/11 12:00', '2009/8/11 13:00', '2009/8/11 14:00', '2009/8/11 15:00', '2009/8/11 16:00', '2009/8/11 17:00', '2009/8/11 18:00', '2009/8/11 19:00', '2009/8/11 20:00', '2009/8/11 21:00', '2009/8/11 22:00', '2009/8/11 23:00', '2009/8/12 0:00', '2009/8/12 1:00', '2009/8/12 2:00', '2009/8/12 3:00', '2009/8/12 4:00', '2009/8/12 5:00', '2009/8/12 6:00', '2009/8/12 7:00', '2009/8/12 8:00', '2009/8/12 9:00', '2009/8/12 10:00', '2009/8/12 11:00', '2009/8/12 12:00', '2009/8/12 13:00', '2009/8/12 14:00', '2009/8/12 15:00', '2009/8/12 16:00', '2009/8/12 17:00', '2009/8/12 18:00', '2009/8/12 19:00', '2009/8/12 20:00', '2009/8/12 21:00', '2009/8/12 22:00', '2009/8/12 23:00', '2009/8/13 0:00', '2009/8/13 1:00', '2009/8/13 2:00', '2009/8/13 3:00', '2009/8/13 4:00', '2009/8/13 5:00', '2009/8/13 6:00', '2009/8/13 7:00', '2009/8/13 8:00', '2009/8/13 9:00', '2009/8/13 10:00', '2009/8/13 11:00', '2009/8/13 12:00', '2009/8/13 13:00', '2009/8/13 14:00', '2009/8/13 15:00', '2009/8/13 16:00', '2009/8/13 17:00', '2009/8/13 18:00', '2009/8/13 19:00', '2009/8/13 20:00', '2009/8/13 21:00', '2009/8/13 22:00', '2009/8/13 23:00', '2009/8/14 0:00', '2009/8/14 1:00', '2009/8/14 2:00', '2009/8/14 3:00', '2009/8/14 4:00', '2009/8/14 5:00', '2009/8/14 6:00', '2009/8/14 7:00', '2009/8/14 8:00', '2009/8/14 9:00', '2009/8/14 10:00', '2009/8/14 11:00', '2009/8/14 12:00', '2009/8/14 13:00', '2009/8/14 14:00', '2009/8/14 15:00', '2009/8/14 16:00', '2009/8/14 17:00', '2009/8/14 18:00', '2009/8/14 19:00', '2009/8/14 20:00', '2009/8/14 21:00', '2009/8/14 22:00', '2009/8/14 23:00', '2009/8/15 0:00', '2009/8/15 1:00', '2009/8/15 2:00', '2009/8/15 3:00', '2009/8/15 4:00', '2009/8/15 5:00', '2009/8/15 6:00', '2009/8/15 7:00', '2009/8/15 8:00', '2009/8/15 9:00', '2009/8/15 10:00', '2009/8/15 11:00', '2009/8/15 12:00', '2009/8/15 13:00', '2009/8/15 14:00', '2009/8/15 15:00', '2009/8/15 16:00', '2009/8/15 17:00', '2009/8/15 18:00', '2009/8/15 19:00', '2009/8/15 20:00', '2009/8/15 21:00', '2009/8/15 22:00', '2009/8/15 23:00', '2009/8/16 0:00', '2009/8/16 1:00', '2009/8/16 2:00', '2009/8/16 3:00', '2009/8/16 4:00', '2009/8/16 5:00', '2009/8/16 6:00', '2009/8/16 7:00', '2009/8/16 8:00', '2009/8/16 9:00', '2009/8/16 10:00', '2009/8/16 11:00', '2009/8/16 12:00', '2009/8/16 13:00', '2009/8/16 14:00', '2009/8/16 15:00', '2009/8/16 16:00', '2009/8/16 17:00', '2009/8/16 18:00', '2009/8/16 19:00', '2009/8/16 20:00', '2009/8/16 21:00', '2009/8/16 22:00', '2009/8/16 23:00', '2009/8/17 0:00', '2009/8/17 1:00', '2009/8/17 2:00', '2009/8/17 3:00', '2009/8/17 4:00', '2009/8/17 5:00', '2009/8/17 6:00', '2009/8/17 7:00', '2009/8/17 8:00', '2009/8/17 9:00', '2009/8/17 10:00', '2009/8/17 11:00', '2009/8/17 12:00', '2009/8/17 13:00', '2009/8/17 14:00', '2009/8/17 15:00', '2009/8/17 16:00', '2009/8/17 17:00', '2009/8/17 18:00', '2009/8/17 19:00', '2009/8/17 20:00', '2009/8/17 21:00', '2009/8/17 22:00', '2009/8/17 23:00', '2009/8/18 0:00', '2009/8/18 1:00', '2009/8/18 2:00', '2009/8/18 3:00', '2009/8/18 4:00', '2009/8/18 5:00', '2009/8/18 6:00', '2009/8/18 7:00', '2009/8/18 8:00', '2009/8/18 9:00', '2009/8/18 10:00', '2009/8/18 11:00', '2009/8/18 12:00', '2009/8/18 13:00', '2009/8/18 14:00', '2009/8/18 15:00', '2009/8/18 16:00', '2009/8/18 17:00', '2009/8/18 18:00', '2009/8/18 19:00', '2009/8/18 20:00', '2009/8/18 21:00', '2009/8/18 22:00', '2009/8/18 23:00', '2009/8/19 0:00', '2009/8/19 1:00', '2009/8/19 2:00', '2009/8/19 3:00', '2009/8/19 4:00', '2009/8/19 5:00', '2009/8/19 6:00', '2009/8/19 7:00', '2009/8/19 8:00', '2009/8/19 9:00', '2009/8/19 10:00', '2009/8/19 11:00', '2009/8/19 12:00', '2009/8/19 13:00', '2009/8/19 14:00', '2009/8/19 15:00', '2009/8/19 16:00', '2009/8/19 17:00', '2009/8/19 18:00', '2009/8/19 19:00', '2009/8/19 20:00', '2009/8/19 21:00', '2009/8/19 22:00', '2009/8/19 23:00', '2009/8/20 0:00', '2009/8/20 1:00', '2009/8/20 2:00', '2009/8/20 3:00', '2009/8/20 4:00', '2009/8/20 5:00', '2009/8/20 6:00', '2009/8/20 7:00', '2009/8/20 8:00', '2009/8/20 9:00', '2009/8/20 10:00', '2009/8/20 11:00', '2009/8/20 12:00', '2009/8/20 13:00', '2009/8/20 14:00', '2009/8/20 15:00', '2009/8/20 16:00', '2009/8/20 17:00', '2009/8/20 18:00', '2009/8/20 19:00', '2009/8/20 20:00', '2009/8/20 21:00', '2009/8/20 22:00', '2009/8/20 23:00', '2009/8/21 0:00', '2009/8/21 1:00', '2009/8/21 2:00', '2009/8/21 3:00', '2009/8/21 4:00', '2009/8/21 5:00', '2009/8/21 6:00', '2009/8/21 7:00', '2009/8/21 8:00', '2009/8/21 9:00', '2009/8/21 10:00', '2009/8/21 11:00', '2009/8/21 12:00', '2009/8/21 13:00', '2009/8/21 14:00', '2009/8/21 15:00', '2009/8/21 16:00', '2009/8/21 17:00', '2009/8/21 18:00', '2009/8/21 19:00', '2009/8/21 20:00', '2009/8/21 21:00', '2009/8/21 22:00', '2009/8/21 23:00', '2009/8/22 0:00', '2009/8/22 1:00', '2009/8/22 2:00', '2009/8/22 3:00', '2009/8/22 4:00', '2009/8/22 5:00', '2009/8/22 6:00', '2009/8/22 7:00', '2009/8/22 8:00', '2009/8/22 9:00', '2009/8/22 10:00', '2009/8/22 11:00', '2009/8/22 12:00', '2009/8/22 13:00', '2009/8/22 14:00', '2009/8/22 15:00', '2009/8/22 16:00', '2009/8/22 17:00', '2009/8/22 18:00', '2009/8/22 19:00', '2009/8/22 20:00', '2009/8/22 21:00', '2009/8/22 22:00', '2009/8/22 23:00', '2009/8/23 0:00', '2009/8/23 1:00', '2009/8/23 2:00', '2009/8/23 3:00', '2009/8/23 4:00', '2009/8/23 5:00', '2009/8/23 6:00', '2009/8/23 7:00', '2009/8/23 8:00', '2009/8/23 9:00', '2009/8/23 10:00', '2009/8/23 11:00', '2009/8/23 12:00', '2009/8/23 13:00', '2009/8/23 14:00', '2009/8/23 15:00', '2009/8/23 16:00', '2009/8/23 17:00', '2009/8/23 18:00', '2009/8/23 19:00', '2009/8/23 20:00', '2009/8/23 21:00', '2009/8/23 22:00', '2009/8/23 23:00', '2009/8/24 0:00', '2009/8/24 1:00', '2009/8/24 2:00', '2009/8/24 3:00', '2009/8/24 4:00', '2009/8/24 5:00', '2009/8/24 6:00', '2009/8/24 7:00', '2009/8/24 8:00', '2009/8/24 9:00', '2009/8/24 10:00', '2009/8/24 11:00', '2009/8/24 12:00', '2009/8/24 13:00', '2009/8/24 14:00', '2009/8/24 15:00', '2009/8/24 16:00', '2009/8/24 17:00', '2009/8/24 18:00', '2009/8/24 19:00', '2009/8/24 20:00', '2009/8/24 21:00', '2009/8/24 22:00', '2009/8/24 23:00', '2009/8/25 0:00', '2009/8/25 1:00', '2009/8/25 2:00', '2009/8/25 3:00', '2009/8/25 4:00', '2009/8/25 5:00', '2009/8/25 6:00', '2009/8/25 7:00', '2009/8/25 8:00', '2009/8/25 9:00', '2009/8/25 10:00', '2009/8/25 11:00', '2009/8/25 12:00', '2009/8/25 13:00', '2009/8/25 14:00', '2009/8/25 15:00', '2009/8/25 16:00', '2009/8/25 17:00', '2009/8/25 18:00', '2009/8/25 19:00', '2009/8/25 20:00', '2009/8/25 21:00', '2009/8/25 22:00', '2009/8/25 23:00', '2009/8/26 0:00', '2009/8/26 1:00', '2009/8/26 2:00', '2009/8/26 3:00', '2009/8/26 4:00', '2009/8/26 5:00', '2009/8/26 6:00', '2009/8/26 7:00', '2009/8/26 8:00', '2009/8/26 9:00', '2009/8/26 10:00', '2009/8/26 11:00', '2009/8/26 12:00', '2009/8/26 13:00', '2009/8/26 14:00', '2009/8/26 15:00', '2009/8/26 16:00', '2009/8/26 17:00', '2009/8/26 18:00', '2009/8/26 19:00', '2009/8/26 20:00', '2009/8/26 21:00', '2009/8/26 22:00', '2009/8/26 23:00', '2009/8/27 0:00', '2009/8/27 1:00', '2009/8/27 2:00', '2009/8/27 3:00', '2009/8/27 4:00', '2009/8/27 5:00', '2009/8/27 6:00', '2009/8/27 7:00', '2009/8/27 8:00', '2009/8/27 9:00', '2009/8/27 10:00', '2009/8/27 11:00', '2009/8/27 12:00', '2009/8/27 13:00', '2009/8/27 14:00', '2009/8/27 15:00', '2009/8/27 16:00', '2009/8/27 17:00', '2009/8/27 18:00', '2009/8/27 19:00', '2009/8/27 20:00', '2009/8/27 21:00', '2009/8/27 22:00', '2009/8/27 23:00', '2009/8/28 0:00', '2009/8/28 1:00', '2009/8/28 2:00', '2009/8/28 3:00', '2009/8/28 4:00', '2009/8/28 5:00', '2009/8/28 6:00', '2009/8/28 7:00', '2009/8/28 8:00', '2009/8/28 9:00', '2009/8/28 10:00', '2009/8/28 11:00', '2009/8/28 12:00', '2009/8/28 13:00', '2009/8/28 14:00', '2009/8/28 15:00', '2009/8/28 16:00', '2009/8/28 17:00', '2009/8/28 18:00', '2009/8/28 19:00', '2009/8/28 20:00', '2009/8/28 21:00', '2009/8/28 22:00', '2009/8/28 23:00', '2009/8/29 0:00', '2009/8/29 1:00', '2009/8/29 2:00', '2009/8/29 3:00', '2009/8/29 4:00', '2009/8/29 5:00', '2009/8/29 6:00', '2009/8/29 7:00', '2009/8/29 8:00', '2009/8/29 9:00', '2009/8/29 10:00', '2009/8/29 11:00', '2009/8/29 12:00', '2009/8/29 13:00', '2009/8/29 14:00', '2009/8/29 15:00', '2009/8/29 16:00', '2009/8/29 17:00', '2009/8/29 18:00', '2009/8/29 19:00', '2009/8/29 20:00', '2009/8/29 21:00', '2009/8/29 22:00', '2009/8/29 23:00', '2009/8/30 0:00', '2009/8/30 1:00', '2009/8/30 2:00', '2009/8/30 3:00', '2009/8/30 4:00', '2009/8/30 5:00', '2009/8/30 6:00', '2009/8/30 7:00', '2009/8/30 8:00', '2009/8/30 9:00', '2009/8/30 10:00', '2009/8/30 11:00', '2009/8/30 12:00', '2009/8/30 13:00', '2009/8/30 14:00', '2009/8/30 15:00', '2009/8/30 16:00', '2009/8/30 17:00', '2009/8/30 18:00', '2009/8/30 19:00', '2009/8/30 20:00', '2009/8/30 21:00', '2009/8/30 22:00', '2009/8/30 23:00', '2009/8/31 0:00', '2009/8/31 1:00', '2009/8/31 2:00', '2009/8/31 3:00', '2009/8/31 4:00', '2009/8/31 5:00', '2009/8/31 6:00', '2009/8/31 7:00', '2009/8/31 8:00', '2009/8/31 9:00', '2009/8/31 10:00', '2009/8/31 11:00', '2009/8/31 12:00', '2009/8/31 13:00', '2009/8/31 14:00', '2009/8/31 15:00', '2009/8/31 16:00', '2009/8/31 17:00', '2009/8/31 18:00', '2009/8/31 19:00', '2009/8/31 20:00', '2009/8/31 21:00', '2009/8/31 22:00', '2009/8/31 23:00',
                '2009/9/1 0:00', '2009/9/1 1:00', '2009/9/1 2:00', '2009/9/1 3:00', '2009/9/1 4:00', '2009/9/1 5:00', '2009/9/1 6:00', '2009/9/1 7:00', '2009/9/1 8:00', '2009/9/1 9:00', '2009/9/1 10:00', '2009/9/1 11:00', '2009/9/1 12:00', '2009/9/1 13:00', '2009/9/1 14:00', '2009/9/1 15:00', '2009/9/1 16:00', '2009/9/1 17:00', '2009/9/1 18:00', '2009/9/1 19:00', '2009/9/1 20:00', '2009/9/1 21:00', '2009/9/1 22:00', '2009/9/1 23:00', '2009/9/2 0:00', '2009/9/2 1:00', '2009/9/2 2:00', '2009/9/2 3:00', '2009/9/2 4:00', '2009/9/2 5:00', '2009/9/2 6:00', '2009/9/2 7:00', '2009/9/2 8:00', '2009/9/2 9:00', '2009/9/2 10:00', '2009/9/2 11:00', '2009/9/2 12:00', '2009/9/2 13:00', '2009/9/2 14:00', '2009/9/2 15:00', '2009/9/2 16:00', '2009/9/2 17:00', '2009/9/2 18:00', '2009/9/2 19:00', '2009/9/2 20:00', '2009/9/2 21:00', '2009/9/2 22:00', '2009/9/2 23:00', '2009/9/3 0:00', '2009/9/3 1:00', '2009/9/3 2:00', '2009/9/3 3:00', '2009/9/3 4:00', '2009/9/3 5:00', '2009/9/3 6:00', '2009/9/3 7:00', '2009/9/3 8:00', '2009/9/3 9:00', '2009/9/3 10:00', '2009/9/3 11:00', '2009/9/3 12:00', '2009/9/3 13:00', '2009/9/3 14:00', '2009/9/3 15:00', '2009/9/3 16:00', '2009/9/3 17:00', '2009/9/3 18:00', '2009/9/3 19:00', '2009/9/3 20:00', '2009/9/3 21:00', '2009/9/3 22:00', '2009/9/3 23:00', '2009/9/4 0:00', '2009/9/4 1:00', '2009/9/4 2:00', '2009/9/4 3:00', '2009/9/4 4:00', '2009/9/4 5:00', '2009/9/4 6:00', '2009/9/4 7:00', '2009/9/4 8:00', '2009/9/4 9:00', '2009/9/4 10:00', '2009/9/4 11:00', '2009/9/4 12:00', '2009/9/4 13:00', '2009/9/4 14:00', '2009/9/4 15:00', '2009/9/4 16:00', '2009/9/4 17:00', '2009/9/4 18:00', '2009/9/4 19:00', '2009/9/4 20:00', '2009/9/4 21:00', '2009/9/4 22:00', '2009/9/4 23:00', '2009/9/5 0:00', '2009/9/5 1:00', '2009/9/5 2:00', '2009/9/5 3:00', '2009/9/5 4:00', '2009/9/5 5:00', '2009/9/5 6:00', '2009/9/5 7:00', '2009/9/5 8:00', '2009/9/5 9:00', '2009/9/5 10:00', '2009/9/5 11:00', '2009/9/5 12:00', '2009/9/5 13:00', '2009/9/5 14:00', '2009/9/5 15:00', '2009/9/5 16:00', '2009/9/5 17:00', '2009/9/5 18:00', '2009/9/5 19:00', '2009/9/5 20:00', '2009/9/5 21:00', '2009/9/5 22:00', '2009/9/5 23:00', '2009/9/6 0:00', '2009/9/6 1:00', '2009/9/6 2:00', '2009/9/6 3:00', '2009/9/6 4:00', '2009/9/6 5:00', '2009/9/6 6:00', '2009/9/6 7:00', '2009/9/6 8:00', '2009/9/6 9:00', '2009/9/6 10:00', '2009/9/6 11:00', '2009/9/6 12:00', '2009/9/6 13:00', '2009/9/6 14:00', '2009/9/6 15:00', '2009/9/6 16:00', '2009/9/6 17:00', '2009/9/6 18:00', '2009/9/6 19:00', '2009/9/6 20:00', '2009/9/6 21:00', '2009/9/6 22:00', '2009/9/6 23:00', '2009/9/7 0:00', '2009/9/7 1:00', '2009/9/7 2:00', '2009/9/7 3:00', '2009/9/7 4:00', '2009/9/7 5:00', '2009/9/7 6:00', '2009/9/7 7:00', '2009/9/7 8:00', '2009/9/7 9:00', '2009/9/7 10:00', '2009/9/7 11:00', '2009/9/7 12:00', '2009/9/7 13:00', '2009/9/7 14:00', '2009/9/7 15:00', '2009/9/7 16:00', '2009/9/7 17:00', '2009/9/7 18:00', '2009/9/7 19:00', '2009/9/7 20:00', '2009/9/7 21:00', '2009/9/7 22:00', '2009/9/7 23:00', '2009/9/8 0:00', '2009/9/8 1:00', '2009/9/8 2:00', '2009/9/8 3:00', '2009/9/8 4:00', '2009/9/8 5:00', '2009/9/8 6:00', '2009/9/8 7:00', '2009/9/8 8:00', '2009/9/8 9:00', '2009/9/8 10:00', '2009/9/8 11:00', '2009/9/8 12:00', '2009/9/8 13:00', '2009/9/8 14:00', '2009/9/8 15:00', '2009/9/8 16:00', '2009/9/8 17:00', '2009/9/8 18:00', '2009/9/8 19:00', '2009/9/8 20:00', '2009/9/8 21:00', '2009/9/8 22:00', '2009/9/8 23:00', '2009/9/9 0:00', '2009/9/9 1:00', '2009/9/9 2:00', '2009/9/9 3:00', '2009/9/9 4:00', '2009/9/9 5:00', '2009/9/9 6:00', '2009/9/9 7:00', '2009/9/9 8:00', '2009/9/9 9:00', '2009/9/9 10:00', '2009/9/9 11:00', '2009/9/9 12:00', '2009/9/9 13:00', '2009/9/9 14:00', '2009/9/9 15:00', '2009/9/9 16:00', '2009/9/9 17:00', '2009/9/9 18:00', '2009/9/9 19:00', '2009/9/9 20:00', '2009/9/9 21:00', '2009/9/9 22:00', '2009/9/9 23:00', '2009/9/10 0:00', '2009/9/10 1:00', '2009/9/10 2:00', '2009/9/10 3:00', '2009/9/10 4:00', '2009/9/10 5:00', '2009/9/10 6:00', '2009/9/10 7:00', '2009/9/10 8:00', '2009/9/10 9:00', '2009/9/10 10:00', '2009/9/10 11:00', '2009/9/10 12:00', '2009/9/10 13:00', '2009/9/10 14:00', '2009/9/10 15:00', '2009/9/10 16:00', '2009/9/10 17:00', '2009/9/10 18:00', '2009/9/10 19:00', '2009/9/10 20:00', '2009/9/10 21:00', '2009/9/10 22:00', '2009/9/10 23:00', '2009/9/11 0:00', '2009/9/11 1:00', '2009/9/11 2:00', '2009/9/11 3:00', '2009/9/11 4:00', '2009/9/11 5:00', '2009/9/11 6:00', '2009/9/11 7:00', '2009/9/11 8:00', '2009/9/11 9:00', '2009/9/11 10:00', '2009/9/11 11:00', '2009/9/11 12:00', '2009/9/11 13:00', '2009/9/11 14:00', '2009/9/11 15:00', '2009/9/11 16:00', '2009/9/11 17:00', '2009/9/11 18:00', '2009/9/11 19:00', '2009/9/11 20:00', '2009/9/11 21:00', '2009/9/11 22:00', '2009/9/11 23:00', '2009/9/12 0:00', '2009/9/12 1:00', '2009/9/12 2:00', '2009/9/12 3:00', '2009/9/12 4:00', '2009/9/12 5:00', '2009/9/12 6:00', '2009/9/12 7:00', '2009/9/12 8:00', '2009/9/12 9:00', '2009/9/12 10:00', '2009/9/12 11:00', '2009/9/12 12:00', '2009/9/12 13:00', '2009/9/12 14:00', '2009/9/12 15:00', '2009/9/12 16:00', '2009/9/12 17:00', '2009/9/12 18:00', '2009/9/12 19:00', '2009/9/12 20:00', '2009/9/12 21:00', '2009/9/12 22:00', '2009/9/12 23:00', '2009/9/13 0:00', '2009/9/13 1:00', '2009/9/13 2:00', '2009/9/13 3:00', '2009/9/13 4:00', '2009/9/13 5:00', '2009/9/13 6:00', '2009/9/13 7:00', '2009/9/13 8:00', '2009/9/13 9:00', '2009/9/13 10:00', '2009/9/13 11:00', '2009/9/13 12:00', '2009/9/13 13:00', '2009/9/13 14:00', '2009/9/13 15:00', '2009/9/13 16:00', '2009/9/13 17:00', '2009/9/13 18:00', '2009/9/13 19:00', '2009/9/13 20:00', '2009/9/13 21:00', '2009/9/13 22:00', '2009/9/13 23:00', '2009/9/14 0:00', '2009/9/14 1:00', '2009/9/14 2:00', '2009/9/14 3:00', '2009/9/14 4:00', '2009/9/14 5:00', '2009/9/14 6:00', '2009/9/14 7:00', '2009/9/14 8:00', '2009/9/14 9:00', '2009/9/14 10:00', '2009/9/14 11:00', '2009/9/14 12:00', '2009/9/14 13:00', '2009/9/14 14:00', '2009/9/14 15:00', '2009/9/14 16:00', '2009/9/14 17:00', '2009/9/14 18:00', '2009/9/14 19:00', '2009/9/14 20:00', '2009/9/14 21:00', '2009/9/14 22:00', '2009/9/14 23:00', '2009/9/15 0:00', '2009/9/15 1:00', '2009/9/15 2:00', '2009/9/15 3:00', '2009/9/15 4:00', '2009/9/15 5:00', '2009/9/15 6:00', '2009/9/15 7:00', '2009/9/15 8:00', '2009/9/15 9:00', '2009/9/15 10:00', '2009/9/15 11:00', '2009/9/15 12:00', '2009/9/15 13:00', '2009/9/15 14:00', '2009/9/15 15:00', '2009/9/15 16:00', '2009/9/15 17:00', '2009/9/15 18:00', '2009/9/15 19:00', '2009/9/15 20:00', '2009/9/15 21:00', '2009/9/15 22:00', '2009/9/15 23:00', '2009/9/16 0:00', '2009/9/16 1:00', '2009/9/16 2:00', '2009/9/16 3:00', '2009/9/16 4:00', '2009/9/16 5:00', '2009/9/16 6:00', '2009/9/16 7:00', '2009/9/16 8:00', '2009/9/16 9:00', '2009/9/16 10:00', '2009/9/16 11:00', '2009/9/16 12:00', '2009/9/16 13:00', '2009/9/16 14:00', '2009/9/16 15:00', '2009/9/16 16:00', '2009/9/16 17:00', '2009/9/16 18:00', '2009/9/16 19:00', '2009/9/16 20:00', '2009/9/16 21:00', '2009/9/16 22:00', '2009/9/16 23:00', '2009/9/17 0:00', '2009/9/17 1:00', '2009/9/17 2:00', '2009/9/17 3:00', '2009/9/17 4:00', '2009/9/17 5:00', '2009/9/17 6:00', '2009/9/17 7:00', '2009/9/17 8:00', '2009/9/17 9:00', '2009/9/17 10:00', '2009/9/17 11:00', '2009/9/17 12:00', '2009/9/17 13:00', '2009/9/17 14:00', '2009/9/17 15:00', '2009/9/17 16:00', '2009/9/17 17:00', '2009/9/17 18:00', '2009/9/17 19:00', '2009/9/17 20:00', '2009/9/17 21:00', '2009/9/17 22:00', '2009/9/17 23:00', '2009/9/18 0:00', '2009/9/18 1:00', '2009/9/18 2:00', '2009/9/18 3:00', '2009/9/18 4:00', '2009/9/18 5:00', '2009/9/18 6:00', '2009/9/18 7:00', '2009/9/18 8:00', '2009/9/18 9:00', '2009/9/18 10:00', '2009/9/18 11:00', '2009/9/18 12:00', '2009/9/18 13:00', '2009/9/18 14:00', '2009/9/18 15:00', '2009/9/18 16:00', '2009/9/18 17:00', '2009/9/18 18:00', '2009/9/18 19:00', '2009/9/18 20:00', '2009/9/18 21:00', '2009/9/18 22:00', '2009/9/18 23:00', '2009/9/19 0:00', '2009/9/19 1:00', '2009/9/19 2:00', '2009/9/19 3:00', '2009/9/19 4:00', '2009/9/19 5:00', '2009/9/19 6:00', '2009/9/19 7:00', '2009/9/19 8:00', '2009/9/19 9:00', '2009/9/19 10:00', '2009/9/19 11:00', '2009/9/19 12:00', '2009/9/19 13:00', '2009/9/19 14:00', '2009/9/19 15:00', '2009/9/19 16:00', '2009/9/19 17:00', '2009/9/19 18:00', '2009/9/19 19:00', '2009/9/19 20:00', '2009/9/19 21:00', '2009/9/19 22:00', '2009/9/19 23:00', '2009/9/20 0:00', '2009/9/20 1:00', '2009/9/20 2:00', '2009/9/20 3:00', '2009/9/20 4:00', '2009/9/20 5:00', '2009/9/20 6:00', '2009/9/20 7:00', '2009/9/20 8:00', '2009/9/20 9:00', '2009/9/20 10:00', '2009/9/20 11:00', '2009/9/20 12:00', '2009/9/20 13:00', '2009/9/20 14:00', '2009/9/20 15:00', '2009/9/20 16:00', '2009/9/20 17:00', '2009/9/20 18:00', '2009/9/20 19:00', '2009/9/20 20:00', '2009/9/20 21:00', '2009/9/20 22:00', '2009/9/20 23:00', '2009/9/21 0:00', '2009/9/21 1:00', '2009/9/21 2:00', '2009/9/21 3:00', '2009/9/21 4:00', '2009/9/21 5:00', '2009/9/21 6:00', '2009/9/21 7:00', '2009/9/21 8:00', '2009/9/21 9:00', '2009/9/21 10:00', '2009/9/21 11:00', '2009/9/21 12:00', '2009/9/21 13:00', '2009/9/21 14:00', '2009/9/21 15:00', '2009/9/21 16:00', '2009/9/21 17:00', '2009/9/21 18:00', '2009/9/21 19:00', '2009/9/21 20:00', '2009/9/21 21:00', '2009/9/21 22:00', '2009/9/21 23:00', '2009/9/22 0:00', '2009/9/22 1:00', '2009/9/22 2:00', '2009/9/22 3:00', '2009/9/22 4:00', '2009/9/22 5:00', '2009/9/22 6:00', '2009/9/22 7:00', '2009/9/22 8:00', '2009/9/22 9:00', '2009/9/22 10:00', '2009/9/22 11:00', '2009/9/22 12:00', '2009/9/22 13:00', '2009/9/22 14:00', '2009/9/22 15:00', '2009/9/22 16:00', '2009/9/22 17:00', '2009/9/22 18:00', '2009/9/22 19:00', '2009/9/22 20:00', '2009/9/22 21:00', '2009/9/22 22:00', '2009/9/22 23:00', '2009/9/23 0:00', '2009/9/23 1:00', '2009/9/23 2:00', '2009/9/23 3:00', '2009/9/23 4:00', '2009/9/23 5:00', '2009/9/23 6:00', '2009/9/23 7:00', '2009/9/23 8:00', '2009/9/23 9:00', '2009/9/23 10:00', '2009/9/23 11:00', '2009/9/23 12:00', '2009/9/23 13:00', '2009/9/23 14:00', '2009/9/23 15:00', '2009/9/23 16:00', '2009/9/23 17:00', '2009/9/23 18:00', '2009/9/23 19:00', '2009/9/23 20:00', '2009/9/23 21:00', '2009/9/23 22:00', '2009/9/23 23:00', '2009/9/24 0:00', '2009/9/24 1:00', '2009/9/24 2:00', '2009/9/24 3:00', '2009/9/24 4:00', '2009/9/24 5:00', '2009/9/24 6:00', '2009/9/24 7:00', '2009/9/24 8:00', '2009/9/24 9:00', '2009/9/24 10:00', '2009/9/24 11:00', '2009/9/24 12:00', '2009/9/24 13:00', '2009/9/24 14:00', '2009/9/24 15:00', '2009/9/24 16:00', '2009/9/24 17:00', '2009/9/24 18:00', '2009/9/24 19:00', '2009/9/24 20:00', '2009/9/24 21:00', '2009/9/24 22:00', '2009/9/24 23:00', '2009/9/25 0:00', '2009/9/25 1:00', '2009/9/25 2:00', '2009/9/25 3:00', '2009/9/25 4:00', '2009/9/25 5:00', '2009/9/25 6:00', '2009/9/25 7:00', '2009/9/25 8:00', '2009/9/25 9:00', '2009/9/25 10:00', '2009/9/25 11:00', '2009/9/25 12:00', '2009/9/25 13:00', '2009/9/25 14:00', '2009/9/25 15:00', '2009/9/25 16:00', '2009/9/25 17:00', '2009/9/25 18:00', '2009/9/25 19:00', '2009/9/25 20:00', '2009/9/25 21:00', '2009/9/25 22:00', '2009/9/25 23:00', '2009/9/26 0:00', '2009/9/26 1:00', '2009/9/26 2:00', '2009/9/26 3:00', '2009/9/26 4:00', '2009/9/26 5:00', '2009/9/26 6:00', '2009/9/26 7:00', '2009/9/26 8:00', '2009/9/26 9:00', '2009/9/26 10:00', '2009/9/26 11:00', '2009/9/26 12:00', '2009/9/26 13:00', '2009/9/26 14:00', '2009/9/26 15:00', '2009/9/26 16:00', '2009/9/26 17:00', '2009/9/26 18:00', '2009/9/26 19:00', '2009/9/26 20:00', '2009/9/26 21:00', '2009/9/26 22:00', '2009/9/26 23:00', '2009/9/27 0:00', '2009/9/27 1:00', '2009/9/27 2:00', '2009/9/27 3:00', '2009/9/27 4:00', '2009/9/27 5:00', '2009/9/27 6:00', '2009/9/27 7:00', '2009/9/27 8:00', '2009/9/27 9:00', '2009/9/27 10:00', '2009/9/27 11:00', '2009/9/27 12:00', '2009/9/27 13:00', '2009/9/27 14:00', '2009/9/27 15:00', '2009/9/27 16:00', '2009/9/27 17:00', '2009/9/27 18:00', '2009/9/27 19:00', '2009/9/27 20:00', '2009/9/27 21:00', '2009/9/27 22:00', '2009/9/27 23:00', '2009/9/28 0:00', '2009/9/28 1:00', '2009/9/28 2:00', '2009/9/28 3:00', '2009/9/28 4:00', '2009/9/28 5:00', '2009/9/28 6:00', '2009/9/28 7:00', '2009/9/28 8:00', '2009/9/28 9:00', '2009/9/28 10:00', '2009/9/28 11:00', '2009/9/28 12:00', '2009/9/28 13:00', '2009/9/28 14:00', '2009/9/28 15:00', '2009/9/28 16:00', '2009/9/28 17:00', '2009/9/28 18:00', '2009/9/28 19:00', '2009/9/28 20:00', '2009/9/28 21:00', '2009/9/28 22:00', '2009/9/28 23:00', '2009/9/29 0:00', '2009/9/29 1:00', '2009/9/29 2:00', '2009/9/29 3:00', '2009/9/29 4:00', '2009/9/29 5:00', '2009/9/29 6:00', '2009/9/29 7:00', '2009/9/29 8:00', '2009/9/29 9:00', '2009/9/29 10:00', '2009/9/29 11:00', '2009/9/29 12:00', '2009/9/29 13:00', '2009/9/29 14:00', '2009/9/29 15:00', '2009/9/29 16:00', '2009/9/29 17:00', '2009/9/29 18:00', '2009/9/29 19:00', '2009/9/29 20:00', '2009/9/29 21:00', '2009/9/29 22:00', '2009/9/29 23:00', '2009/9/30 0:00', '2009/9/30 1:00', '2009/9/30 2:00', '2009/9/30 3:00', '2009/9/30 4:00', '2009/9/30 5:00', '2009/9/30 6:00', '2009/9/30 7:00', '2009/9/30 8:00', '2009/9/30 9:00', '2009/9/30 10:00', '2009/9/30 11:00', '2009/9/30 12:00', '2009/9/30 13:00', '2009/9/30 14:00', '2009/9/30 15:00', '2009/9/30 16:00', '2009/9/30 17:00', '2009/9/30 18:00', '2009/9/30 19:00', '2009/9/30 20:00', '2009/9/30 21:00', '2009/9/30 22:00', '2009/9/30 23:00',
                '2009/10/1 0:00', '2009/10/1 1:00', '2009/10/1 2:00', '2009/10/1 3:00', '2009/10/1 4:00', '2009/10/1 5:00', '2009/10/1 6:00', '2009/10/1 7:00', '2009/10/1 8:00', '2009/10/1 9:00', '2009/10/1 10:00', '2009/10/1 11:00', '2009/10/1 12:00', '2009/10/1 13:00', '2009/10/1 14:00', '2009/10/1 15:00', '2009/10/1 16:00', '2009/10/1 17:00', '2009/10/1 18:00', '2009/10/1 19:00', '2009/10/1 20:00', '2009/10/1 21:00', '2009/10/1 22:00', '2009/10/1 23:00', '2009/10/2 0:00', '2009/10/2 1:00', '2009/10/2 2:00', '2009/10/2 3:00', '2009/10/2 4:00', '2009/10/2 5:00', '2009/10/2 6:00', '2009/10/2 7:00', '2009/10/2 8:00', '2009/10/2 9:00', '2009/10/2 10:00', '2009/10/2 11:00', '2009/10/2 12:00', '2009/10/2 13:00', '2009/10/2 14:00', '2009/10/2 15:00', '2009/10/2 16:00', '2009/10/2 17:00', '2009/10/2 18:00', '2009/10/2 19:00', '2009/10/2 20:00', '2009/10/2 21:00', '2009/10/2 22:00', '2009/10/2 23:00', '2009/10/3 0:00', '2009/10/3 1:00', '2009/10/3 2:00', '2009/10/3 3:00', '2009/10/3 4:00', '2009/10/3 5:00', '2009/10/3 6:00', '2009/10/3 7:00', '2009/10/3 8:00', '2009/10/3 9:00', '2009/10/3 10:00', '2009/10/3 11:00', '2009/10/3 12:00', '2009/10/3 13:00', '2009/10/3 14:00', '2009/10/3 15:00', '2009/10/3 16:00', '2009/10/3 17:00', '2009/10/3 18:00', '2009/10/3 19:00', '2009/10/3 20:00', '2009/10/3 21:00', '2009/10/3 22:00', '2009/10/3 23:00', '2009/10/4 0:00', '2009/10/4 1:00', '2009/10/4 2:00', '2009/10/4 3:00', '2009/10/4 4:00', '2009/10/4 5:00', '2009/10/4 6:00', '2009/10/4 7:00', '2009/10/4 8:00', '2009/10/4 9:00', '2009/10/4 10:00', '2009/10/4 11:00', '2009/10/4 12:00', '2009/10/4 13:00', '2009/10/4 14:00', '2009/10/4 15:00', '2009/10/4 16:00', '2009/10/4 17:00', '2009/10/4 18:00', '2009/10/4 19:00', '2009/10/4 20:00', '2009/10/4 21:00', '2009/10/4 22:00', '2009/10/4 23:00', '2009/10/5 0:00', '2009/10/5 1:00', '2009/10/5 2:00', '2009/10/5 3:00', '2009/10/5 4:00', '2009/10/5 5:00', '2009/10/5 6:00', '2009/10/5 7:00', '2009/10/5 8:00', '2009/10/5 9:00', '2009/10/5 10:00', '2009/10/5 11:00', '2009/10/5 12:00', '2009/10/5 13:00', '2009/10/5 14:00', '2009/10/5 15:00', '2009/10/5 16:00', '2009/10/5 17:00', '2009/10/5 18:00', '2009/10/5 19:00', '2009/10/5 20:00', '2009/10/5 21:00', '2009/10/5 22:00', '2009/10/5 23:00', '2009/10/6 0:00', '2009/10/6 1:00', '2009/10/6 2:00', '2009/10/6 3:00', '2009/10/6 4:00', '2009/10/6 5:00', '2009/10/6 6:00', '2009/10/6 7:00', '2009/10/6 8:00', '2009/10/6 9:00', '2009/10/6 10:00', '2009/10/6 11:00', '2009/10/6 12:00', '2009/10/6 13:00', '2009/10/6 14:00', '2009/10/6 15:00', '2009/10/6 16:00', '2009/10/6 17:00', '2009/10/6 18:00', '2009/10/6 19:00', '2009/10/6 20:00', '2009/10/6 21:00', '2009/10/6 22:00', '2009/10/6 23:00', '2009/10/7 0:00', '2009/10/7 1:00', '2009/10/7 2:00', '2009/10/7 3:00', '2009/10/7 4:00', '2009/10/7 5:00', '2009/10/7 6:00', '2009/10/7 7:00', '2009/10/7 8:00', '2009/10/7 9:00', '2009/10/7 10:00', '2009/10/7 11:00', '2009/10/7 12:00', '2009/10/7 13:00', '2009/10/7 14:00', '2009/10/7 15:00', '2009/10/7 16:00', '2009/10/7 17:00', '2009/10/7 18:00', '2009/10/7 19:00', '2009/10/7 20:00', '2009/10/7 21:00', '2009/10/7 22:00', '2009/10/7 23:00', '2009/10/8 0:00', '2009/10/8 1:00', '2009/10/8 2:00', '2009/10/8 3:00', '2009/10/8 4:00', '2009/10/8 5:00', '2009/10/8 6:00', '2009/10/8 7:00', '2009/10/8 8:00', '2009/10/8 9:00', '2009/10/8 10:00', '2009/10/8 11:00', '2009/10/8 12:00', '2009/10/8 13:00', '2009/10/8 14:00', '2009/10/8 15:00', '2009/10/8 16:00', '2009/10/8 17:00', '2009/10/8 18:00', '2009/10/8 19:00', '2009/10/8 20:00', '2009/10/8 21:00', '2009/10/8 22:00', '2009/10/8 23:00', '2009/10/9 0:00', '2009/10/9 1:00', '2009/10/9 2:00', '2009/10/9 3:00', '2009/10/9 4:00', '2009/10/9 5:00', '2009/10/9 6:00', '2009/10/9 7:00', '2009/10/9 8:00', '2009/10/9 9:00', '2009/10/9 10:00', '2009/10/9 11:00', '2009/10/9 12:00', '2009/10/9 13:00', '2009/10/9 14:00', '2009/10/9 15:00', '2009/10/9 16:00', '2009/10/9 17:00', '2009/10/9 18:00', '2009/10/9 19:00', '2009/10/9 20:00', '2009/10/9 21:00', '2009/10/9 22:00', '2009/10/9 23:00', '2009/10/10 0:00', '2009/10/10 1:00', '2009/10/10 2:00', '2009/10/10 3:00', '2009/10/10 4:00', '2009/10/10 5:00', '2009/10/10 6:00', '2009/10/10 7:00', '2009/10/10 8:00', '2009/10/10 9:00', '2009/10/10 10:00', '2009/10/10 11:00', '2009/10/10 12:00', '2009/10/10 13:00', '2009/10/10 14:00', '2009/10/10 15:00', '2009/10/10 16:00', '2009/10/10 17:00', '2009/10/10 18:00', '2009/10/10 19:00', '2009/10/10 20:00', '2009/10/10 21:00', '2009/10/10 22:00', '2009/10/10 23:00', '2009/10/11 0:00', '2009/10/11 1:00', '2009/10/11 2:00', '2009/10/11 3:00', '2009/10/11 4:00', '2009/10/11 5:00', '2009/10/11 6:00', '2009/10/11 7:00', '2009/10/11 8:00', '2009/10/11 9:00', '2009/10/11 10:00', '2009/10/11 11:00', '2009/10/11 12:00', '2009/10/11 13:00', '2009/10/11 14:00', '2009/10/11 15:00', '2009/10/11 16:00', '2009/10/11 17:00', '2009/10/11 18:00', '2009/10/11 19:00', '2009/10/11 20:00', '2009/10/11 21:00', '2009/10/11 22:00', '2009/10/11 23:00', '2009/10/12 0:00', '2009/10/12 1:00', '2009/10/12 2:00', '2009/10/12 3:00', '2009/10/12 4:00', '2009/10/12 5:00', '2009/10/12 6:00', '2009/10/12 7:00', '2009/10/12 8:00', '2009/10/12 9:00', '2009/10/12 10:00', '2009/10/12 11:00', '2009/10/12 12:00', '2009/10/12 13:00', '2009/10/12 14:00', '2009/10/12 15:00', '2009/10/12 16:00', '2009/10/12 17:00', '2009/10/12 18:00', '2009/10/12 19:00', '2009/10/12 20:00', '2009/10/12 21:00', '2009/10/12 22:00', '2009/10/12 23:00', '2009/10/13 0:00', '2009/10/13 1:00', '2009/10/13 2:00', '2009/10/13 3:00', '2009/10/13 4:00', '2009/10/13 5:00', '2009/10/13 6:00', '2009/10/13 7:00', '2009/10/13 8:00', '2009/10/13 9:00', '2009/10/13 10:00', '2009/10/13 11:00', '2009/10/13 12:00', '2009/10/13 13:00', '2009/10/13 14:00', '2009/10/13 15:00', '2009/10/13 16:00', '2009/10/13 17:00', '2009/10/13 18:00', '2009/10/13 19:00', '2009/10/13 20:00', '2009/10/13 21:00', '2009/10/13 22:00', '2009/10/13 23:00', '2009/10/14 0:00', '2009/10/14 1:00', '2009/10/14 2:00', '2009/10/14 3:00', '2009/10/14 4:00', '2009/10/14 5:00', '2009/10/14 6:00', '2009/10/14 7:00', '2009/10/14 8:00', '2009/10/14 9:00', '2009/10/14 10:00', '2009/10/14 11:00', '2009/10/14 12:00', '2009/10/14 13:00', '2009/10/14 14:00', '2009/10/14 15:00', '2009/10/14 16:00', '2009/10/14 17:00', '2009/10/14 18:00', '2009/10/14 19:00', '2009/10/14 20:00', '2009/10/14 21:00', '2009/10/14 22:00', '2009/10/14 23:00', '2009/10/15 0:00', '2009/10/15 1:00', '2009/10/15 2:00', '2009/10/15 3:00', '2009/10/15 4:00', '2009/10/15 5:00', '2009/10/15 6:00', '2009/10/15 7:00', '2009/10/15 8:00', '2009/10/15 9:00', '2009/10/15 10:00', '2009/10/15 11:00', '2009/10/15 12:00', '2009/10/15 13:00', '2009/10/15 14:00', '2009/10/15 15:00', '2009/10/15 16:00', '2009/10/15 17:00', '2009/10/15 18:00', '2009/10/15 19:00', '2009/10/15 20:00', '2009/10/15 21:00', '2009/10/15 22:00', '2009/10/15 23:00', '2009/10/16 0:00', '2009/10/16 1:00', '2009/10/16 2:00', '2009/10/16 3:00', '2009/10/16 4:00', '2009/10/16 5:00', '2009/10/16 6:00', '2009/10/16 7:00', '2009/10/16 8:00', '2009/10/16 9:00', '2009/10/16 10:00', '2009/10/16 11:00', '2009/10/16 12:00', '2009/10/16 13:00', '2009/10/16 14:00', '2009/10/16 15:00', '2009/10/16 16:00', '2009/10/16 17:00', '2009/10/16 18:00', '2009/10/16 19:00', '2009/10/16 20:00', '2009/10/16 21:00', '2009/10/16 22:00', '2009/10/16 23:00', '2009/10/17 0:00', '2009/10/17 1:00', '2009/10/17 2:00', '2009/10/17 3:00', '2009/10/17 4:00', '2009/10/17 5:00', '2009/10/17 6:00', '2009/10/17 7:00', '2009/10/17 8:00', '2009/10/17 9:00', '2009/10/17 10:00', '2009/10/17 11:00', '2009/10/17 12:00', '2009/10/17 13:00', '2009/10/17 14:00', '2009/10/17 15:00', '2009/10/17 16:00', '2009/10/17 17:00', '2009/10/17 18:00', '2009/10/17 19:00', '2009/10/17 20:00', '2009/10/17 21:00', '2009/10/17 22:00', '2009/10/17 23:00', '2009/10/18 0:00', '2009/10/18 1:00', '2009/10/18 2:00', '2009/10/18 3:00', '2009/10/18 4:00', '2009/10/18 5:00', '2009/10/18 6:00', '2009/10/18 7:00', '2009/10/18 8:00'
            ].map(function (str) {
                return str.replace(' ', '\n')
            })
        }
    ],
    yAxis: [
        {
            name: '(m^3/s)',
            type: 'value',
            max: 500,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
        },
        {
            name: '(mm)',
            nameLocation: 'start',
            max: 5,
            type: 'value',
            inverse: true,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
        }
    ],
    series: [
        {
            name:'1',
            type:'line',
            animation: false,
            areaStyle: {
                normal: {}
            },
            lineStyle: {
                normal: {
                    width: 1
                }
            },
            markArea: {
                silent: true,
                data: [[{
                    xAxis: '2009/9/12\n7:00'
                }, {
                    xAxis: '2009/9/22\n7:00'
                }]]
            },
            data:[
                0.97,0.96,0.96,0.95,0.95,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.87,0.88,0.9,0.93,0.96,0.99,1.03,1.06,1.1,1.14,1.17,1.2,1.23,1.26,1.29,1.33,1.36,1.4,1.43,1.45,1.48,1.49,1.51,1.51,1.5,1.49,1.47,1.44,1.41,1.37,1.34,1.3,1.27,1.24,1.22,1.2,1.19,1.18,1.16,1.15,1.14,1.13,1.12,1.11,1.11,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.09,1.09,1.08,1.07,1.06,1.05,1.04,1.03,1.03,1.02,1.01,1.01,1,0.99,0.98,0.97,0.96,0.96,0.95,0.95,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.85,0.84,0.83,0.82,0.81,0.8,0.8,0.79,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.77,0.75,0.73,0.71,0.68,0.65,0.63,0.61,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.57,0.57,0.57,0.56,0.55,0.55,0.54,0.54,0.53,0.52,0.52,0.51,0.51,0.5,0.5,0.49,0.48,0.48,0.47,0.47,0.47,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.52,0.67,0.9,1.19,1.52,1.87,2.22,2.55,2.84,3.07,3.22,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.24,3.13,2.97,2.77,2.54,2.3,2.05,1.82,1.62,1.46,1.35,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.3,1.26,1.21,1.14,1.06,0.97,0.89,0.81,0.74,0.69,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.63,0.63,0.62,0.62,0.61,0.6,0.59,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.59,0.61,0.63,0.65,0.68,0.71,0.73,0.75,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.77,0.75,0.73,0.71,0.68,0.65,0.63,0.61,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.59,0.59,0.6,0.61,0.62,0.62,0.63,0.63,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.66,0.68,0.69,0.71,0.73,0.74,0.76,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.79,0.81,0.82,0.84,0.86,0.88,0.9,0.92,0.93,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.85,0.84,0.82,0.8,0.78,0.76,0.75,0.73,0.72,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.72,0.73,0.74,0.76,0.78,0.79,0.82,0.84,0.86,0.89,0.91,0.94,0.97,1,1.02,1.05,1.08,1.11,1.14,1.17,1.19,1.22,1.25,1.27,1.29,1.31,1.33,1.35,1.36,1.38,1.39,1.39,1.4,1.4,1.4,1.39,1.37,1.35,1.32,1.29,1.26,1.22,1.18,1.14,1.1,1.05,1.01,0.97,0.93,0.89,0.85,0.82,0.78,0.76,0.74,0.72,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.72,0.73,0.74,0.75,0.77,0.78,0.8,0.82,0.84,0.87,0.89,0.92,0.94,0.97,0.99,1.02,1.05,1.08,1.1,1.13,1.16,1.18,1.21,1.23,1.26,1.28,1.3,1.32,1.34,1.35,1.37,1.38,1.39,1.4,1.41,1.41,1.42,1.42,1.43,1.43,1.43,1.44,1.44,1.44,1.44,1.45,1.45,1.45,1.46,1.46,1.46,1.47,1.47,1.48,1.48,1.49,1.5,1.51,1.54,1.62,1.73,1.88,2.05,2.24,2.45,2.67,2.89,3.11,3.31,3.51,3.69,3.86,4.03,4.18,4.33,4.48,4.62,4.76,4.89,5.02,5.16,5.29,5.43,5.57,5.71,5.86,6.02,6.18,6.36,6.54,6.73,6.93,7.15,7.38,7.62,7.88,8.16,8.46,8.77,9.11,9.46,9.84,10.24,10.67,11.12,11.6,12.3,13.66,16,38.43,82.21,146.6,218.7,226,225.23,223.08,219.78,212,199.82,184.6,168,151.65,137.21,126.31,119.94,115.52,112.06,108.92,105.44,101,94.56,86.36,77.67,69.76,63.9,60.38,57.41,54.84,52.57,50.56,48.71,46.97,45.25,43.48,41.6,39.5,37.19,34.81,32.46,30.27,28.36,26.85,25.86,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.27,24.65,23.7,22.52,21.17,19.75,18.33,16.98,15.8,14.85,14.23,14,14.02,14.08,14.17,14.29,14.44,14.61,14.8,15.01,15.23,15.47,15.71,15.95,16.19,16.43,16.67,16.89,17.1,17.29,17.46,17.61,17.73,17.82,17.88,17.9,17.63,16.88,15.75,14.33,12.71,10.98,9.23,7.56,6.05,4.81,3.92,3.47,3.28,3.1,2.93,2.76,2.61,2.46,2.32,2.19,2.07,1.96,1.85,1.75,1.66,1.58,1.51,1.44,1.39,1.34,1.29,1.26,1.23,1.22,1.2,1.2,1.2,1.2,1.2,1.2,1.21,1.21,1.21,1.21,1.22,1.22,1.22,1.23,1.23,1.23,1.24,1.24,1.25,1.25,1.25,1.26,1.26,1.27,1.27,1.27,1.28,1.28,1.28,1.29,1.29,1.29,1.29,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.29,1.29,1.29,1.29,1.28,1.28,1.28,1.27,1.27,1.26,1.25,1.25,1.24,1.23,1.23,1.22,1.21,1.2,1.16,1.06,0.95,0.83,0.74,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.69,0.69,0.69,0.69,0.69,0.69,0.69,0.69,0.68,0.68,0.68,0.68,0.68,0.68,0.67,0.67,0.67,0.67,0.67,0.67,0.67,0.66,0.66,0.66,0.66,0.66,0.66,0.66,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.66,0.68,0.69,0.71,0.73,0.74,0.76,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.8,0.86,0.95,1.08,1.25,1.46,1.7,1.97,2.28,2.63,3.01,3.42,3.87,4.35,4.86,5.4,5.98,6.59,7.92,10.49,14.04,18.31,23.04,27.98,32.87,37.45,41.46,44.64,46.74,47.5,46.86,45.16,42.77,40.04,37.33,35,32.74,30.21,27.7,25.5,23.9,23.2,23.06,22.94,22.84,22.77,22.72,22.7,22.8,23.23,23.95,24.91,26.04,27.3,28.76,30.7,33.39,37.12,42.15,48.77,65.22,252.1,257,237.32,221.19,212,208.67,206.89,205.2,202.15,189.82,172,165.3,160.49,156.8,153.44,149.62,144.6,138.27,131,123.11,114.9,106.69,98.79,91.5,85.13,80,75.53,71.03,66.65,62.54,58.85,55.73,53.31,51.75,51.2,56.53,68.25,80,91.01,102.03,109,112.37,115.29,117.68,119.48,120.61,121,119.45,115.57,110.52,105.47,101.58,100,99.97,99.94,99.92,99.9,99.88,99.86,99.85,99.84,99.83,99.82,99.81,99.81,99.8,99.8,99.8,122.15,163.65,186,182.96,175.15,164.56,153.18,143,136,131.37,126.98,122.81,118.85,115.09,111.52,108.13,104.9,101.83,98.9,96.11,93.44,90.87,88.41,86.04,83.74,81.51,79.33,77.2,75.1,73.02,70.95,68.88,66.8,64.87,63.14,61.4,59.53,57.67,56,54.6,53.36,52.2,51.05,49.85,48.5,46.87,44.92,42.74,40.42,38.04,35.69,33.46,31.44,29.72,28.38,27.51,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.14,26.97,26.7,26.35,25.95,25.49,25.02,24.53,24.04,23.58,23.16,22.8,22.46,22.11,21.75,21.39,21.03,20.69,20.36,20.05,19.78,19.54,19.35,19.2,19.09,19,18.92,18.85,18.79,18.74,18.68,18.62,18.56,18.49,18.4,18.3,18.17,18.02,17.83,17.63,17.41,17.18,16.93,16.68,16.43,16.18,15.93,15.7,15.47,15.22,14.97,14.71,14.45,14.18,13.93,13.68,13.44,13.21,13,12.8,12.62,12.46,12.31,12.16,12.03,11.89,11.76,11.62,11.48,11.33,11.17,11,10.81,10.59,10.36,10.12,9.86,9.61,9.36,9.12,8.89,8.68,8.5,8.35,8.21,8.08,7.94,7.81,7.68,7.56,7.46,7.36,7.29,7.23,7.19,7.18,7.51,8.42,9.81,11.58,13.63,15.86,18.16,20.44,22.58,24.49,26.06,27.2,28.08,28.95,29.81,30.65,31.48,32.28,33.07,33.82,34.55,35.25,35.92,36.56,37.15,37.71,38.23,38.7,39.13,39.5,39.83,40.1,40.31,40.47,40.57,40.6,40.49,40.16,39.64,38.94,38.09,37.1,36,34.79,33.51,32.17,30.79,29.39,27.99,26.6,25.25,23.96,22.75,21.63,20.63,19.76,19.04,18.49,18.14,18,17.97,17.95,17.94,17.92,17.91,17.9,17.89,17.88,17.87,17.85,17.83,17.8,17.7,17.46,17.13,16.7,16.21,15.68,15.13,14.57,14.04,13.56,13.14,12.8,12.52,12.27,12.02,11.79,11.57,11.37,11.16,10.97,10.78,10.59,10.39,10.2,10.01,9.81,9.63,9.44,9.26,9.08,8.9,8.73,8.56,8.39,8.22,8.06,7.9,7.73,7.57,7.41,7.25,7.09,6.94,6.79,6.65,6.52,6.4,6.28,6.17,6.08,5.98,5.9,5.81,5.73,5.65,5.57,5.49,5.41,5.32,5.23,5.14,5.04,4.94,4.84,4.74,4.63,4.53,4.43,4.33,4.23,4.13,4.03,3.93,3.81,3.69,3.57,3.45,3.33,3.22,3.12,3.04,2.98,2.93,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.9,2.86,2.8,2.71,2.62,2.52,2.42,2.33,2.24,2.18,2.14,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.1,2.06,2,1.91,1.82,1.71,1.61,1.5,1.4,1.32,1.25,1.2,1.16,1.13,1.1,1.06,1.03,1,0.97,0.93,0.9,0.87,0.85,0.82,0.79,0.77,0.74,0.72,0.69,0.67,0.65,0.63,0.61,0.59,0.58,0.56,0.54,0.53,0.52,0.51,0.5,0.49,0.48,0.48,0.47,0.47,0.46,0.46,0.47,0.48,0.5,0.53,0.56,0.59,0.62,0.64,0.67,0.69,0.7,0.71,0.71,0.71,0.71,0.7,0.7,0.7,0.69,0.69,0.69,0.68,0.68,0.67,0.67,0.67,0.66,0.66,0.65,0.65,0.65,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.65,0.65,0.66,0.66,0.67,0.68,0.69,0.69,0.7,0.71,0.73,0.74,0.75,0.76,0.78,0.8,0.81,0.83,0.85,0.87,0.89,0.92,0.94,0.97,0.99,1.02,1.05,1.08,1.11,1.15,1.18,1.32,1.66,2.21,2.97,3.94,5.11,6.5,8.1,9.9,11.92,14.15,16.6,22.3,22.8,24.48,30.38,35.74,42.4,57.14,94.04,112.9,123.4,130.4,130,119.4,120.7,116.8,118.1,119.4,124.8,143.5,204,294,319.2,328.4,365,350.8,347.6,347.6,325,331.6,319.2,308,308,308,308,296.8,300,281,278.4,270.6,271,253.6,233.5,219.2,207.8,205.9,204,189.6,178.8,173.4,160,154.4,146,145,140.5,130.4,126.2,116.8,112.9,106.5,101.6,98.51,82.67,67.3,80.05,76.12,72.3,71.02,69.78,67.3,67.3,68.54,57.6,71.02,66.06,59.12,57.14,55.16,55.16,52.19,52.19,51.2,48.56,44.16,43,45.92,49.44,44.16,36.48,35.74,35,32.36,37.22,32.36,32.36,32.36,33.68,32.36,31.7,35.74,29.72,32.36,30.38,29.72,28.4,28.4,28.4,27.28,25.6,25.04,23.92,22.3,21.8,21.8,21.8,22.8,21.8,25.6,22.8,22.8,17.8,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,15.02,14,14.03,14.11,14.25,14.45,14.72,15.06,15.46,15.95,16.51,17.15,17.87,18.69,19.59,20.59,21.69,22.88,24.18,25.59,27.1,28.73,30.48,32.34,34.33,36.44,38.69,41.06,43.57,46.22,49.01,51.95,55.04,58.27,61.66,65.21,68.92,72.8,88.09,104.9,105.7,110.3,111.6,110.3,106.5,105.7,103.3,100,97.02,98.8,91.07,83.98,88.09,81.36,78.74,77.43,77.43,73.5,74.81,72.63,68.58,66.4,68.54,69.78,67.3,64.82,61.1,59.12,56.15,53.18,50.32,49.44,44.16,36.5,42.4,37.96,37.22,33.68,36.48,35.74,35,35,37.22,37.22,39.44,32.6,34.54,36.48,35.74,34.34,33.68,33.02,31.04,29.72,29.72,29.72,26.16,25.6,29.72,18.3,22.3,21.3,21.8,21.8,20.3,20.8,25.04,25.04,25.6,25.6,25.04,25.6,25.04,25.6,23.92,25.04,21.3,21.8,22.3,21.8,20.8,16.1,20.3,18.3,13.22,19.3,19.3,18.3,14.4,13.86,13.36,12.9,12.48,12.1,11.75,11.43,11.15,10.9,10.67,10.48,10.31,10.16,10.04,9.93,9.85,9.78,9.73,9.69,9.67,9.65,9.65,12.08,8.67,11.7,11.38,10.65,9.84,9.32,9.07,8.85,8.66,8.49,8.35,8.22,8.1,7.98,7.86,7.74,7.61,7.47,7.31,7.14,6.96,6.78,6.58,6.39,6.19,5.99,5.78,5.58,5.39,5.2,5.01,4.83,4.67,4.51,4.37,4.24,4.12,4.02,3.95,3.89,3.85,3.84,4.41,5.77,7.39,8.75,9.32,9.18,9,8.94,8.88,8.83,8.78,8.73,8.68,8.64,8.6,8.56,8.53,8.5,8.47,8.45,8.42,8.4,8.39,8.37,8.36,8.35,8.35,8.34,8.34,8.67,9.65,9.62,9.53,9.4,9.21,8.98,8.7,8.4,8.06,7.69,7.3,6.89,6.47,6.03,5.59,5.14,4.7,4.26,3.83,3.42,3.02,2.65,2.3,1.98,1.7,1.45,1.25,1.09,0.99,0.94,0.92,0.91,0.89,0.87,0.85,0.84,0.82,0.81,0.79,0.78,0.77,0.75,0.74,0.73,0.72,0.71,0.7,0.69,0.68,0.67,0.66,0.65,0.64,0.64,0.63,0.63,0.62,0.62,0.61,0.61,0.61,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.61,0.61,0.61,0.61,0.61,0.61,0.62,0.62,0.62,0.62,0.63,0.63,0.63,0.63,0.63,0.64,0.64,0.64,0.64,0.64,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.64,0.63,0.62,0.6,0.59,0.57,0.55,0.54,0.53,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.51,0.51,0.51,0.5,0.5,0.49,0.48,0.47,0.47,0.46,0.45,0.45,0.44,0.43,0.42,0.42,0.41,0.41,0.41,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.41,0.42,0.43,0.44,0.46,0.48,0.5,0.53,0.55,0.58,0.61,0.64,0.67,0.7,0.73,0.77,0.8,0.83,0.87,0.9,0.93,0.96,0.99,1.02,1.05,1.08,1.1,1.12,1.14,1.16,1.17,1.18,1.19,1.2,1.2,1.2,1.19,1.17,1.15,1.12,1.09,1.06,1.02,0.98,0.94,0.9,0.86,0.82,0.78,0.74,0.7,0.66,0.63,0.6,0.57,0.55,0.53,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.51,0.51,0.5,0.5,0.49,0.49,0.48,0.47,0.47,0.47,0.46,0.46,0.45,0.45,0.45,0.44,0.44,0.44,0.43,0.43,0.43,0.42,0.42,0.42,0.41,0.41,0.41,0.41,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.43,0.43,0.43,0.43,0.43,0.43,0.44,0.44,0.44,0.44,0.44,0.44,0.45,0.45,0.45
            ]
        },
        {
            name:'2',
            type:'line',
            yAxisIndex:1,
            animation: false,
            areaStyle: {
                normal: {}
            },
            lineStyle: {
                normal: {
                    width: 1
                }
            },
            markArea: {
                silent: true,
                data: [[{
                    xAxis: '2009/9/10\n7:00'
                }, {
                    xAxis: '2009/9/20\n7:00'
                }]]
            },
            data: [
                0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.017,0.017,0.017,0.017,0.011,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.021,0.026,0.03,0.036,0.036,0.195,0.221,0.019,0.013,0.017,0.03,0.03,0.03,0.046,0.045,0.038,0.084,0.045,0.045,0.037,0.034,0.035,0.036,0.044,0.052,0.048,0.109,0.033,0.029,0.04,0.042,0.042,0.042,0.073,0.076,0.062,0.066,0.066,0.075,0.096,0.128,0.121,0.128,0.14,0.226,0.143,0.097,0.018,0,0,0,0,0,0.018,0.047,0.054,0.054,0.054,0.036,0.185,0.009,0.038,0.061,0.077,0.091,0.126,0.69,0.182,0.349,0.231,0.146,0.128,0.167,0.1,0.075,0.071,0.071,0.117,0.01,0.002,0.002,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.026,0.038,0.038,0.038,0.076,0.086,0.109,0.213,0.276,0.288,0.297,0.642,1.799,1.236,2.138,0.921,0.497,0.685,0.828,0.41,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.018,0.024,0.024,0.024,0.024,0.006,0.003,0.046,0.046,0.046,0.046,0.043,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.204,0.303,1.028,1.328,1.524,1.41,1.362,1.292,1.191,0.529,0.501,0.944,1.81,2.899,0.859,0.126,0.087,0.047,0,0,0,0,0.011,0.028,0.028,0.028,0.028,0.017,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.099,0.159,0.297,0.309,0.309,0.614,0.818,1.436,1.195,0.553,0.542,0.955,0.898,0.466,0.386,0.556,0.388,0.221,0.192,0.192,0.187,0.166,0.18,0.302,0.158,0.009,0.009,0.009,0.009,0.009,0.007,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.004,0.032,0.032,0.032,0.032,0.082,0.149,0.204,0.247,0.262,0.49,0.51,0.533,0.746,0.847,2.393,1.188,1.114,0.475,0.043,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.017,0.017,0.021,0.042,0.079,0.111,0.126,0.122,0.133,0.846,0.102,0.077,0.067,0.056,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0.011,0.017,0.017,0.017,0.017,0.006,0,0,0,0,0,0.01,0.03,0.054,0.067,0.07,0.25,0.251,0.494,0.065,0.054,0.054,0.064,0.084,0.077,0.101,0.132,0.248,0.069,0.117,0.115,0.087,0.326,0.036,0.009,0.009,0.009,0.009,0.009,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.02,0.039,0.04,0.04,0.04,0.229,0.079,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.023,0.069,0.082,0.082,0.082,0.503,0.774,0.038,0.012,0.012,0.012,0.016,0.02,0.028,0.051,0.06,0.064,0.19,0.15,0.164,0.139,0.13,0.085,0.031,0.023,0.022,0.007,0.005,0.005,0.001,0,0.02,0.048,0.048,0.053,0.056,0.036,0.008,0.008,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.013,0.017,0.036,0.068,0.095,0.233,0.272,0.377,0.722,1.494,3.756,0.954,0.439,0.442,0.462,0.373,0.249,0.214,0.1,0.044,0.037,0.023,0.002,0,0,0,0,0,0,0.02,0.024,0.024,0.024,0.024,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.008,0.017,0.017,0.045,0.186,0.308,0.241,0.241,0.893,4.067,4.494,5.015,3.494,2.057,1.411,0.718,0.407,0.313,0.339,1.537,1.105,0.218,0.136,0.03,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.037,0.448,1.2,1.309,1.309,1.425,1.223,0.471,0.767,0.423,0.273,0.412,0.646,0.481,0.239,0.131,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.044,0.15,0.223,0.388,0.513,0.883,2.828,4.786,5.959,4.95,6.434,6.319,3.35,2.806,4.204,1.395,1.015,1.015,0.836,0.74,0.72,0.615,0.477,0.192,0.046,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.008,0.005,0.005,0.005,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.012,0.012,0.012,0.012,0.011,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.002,0.012,0.028,0.028,0.028,0.138,0.092,0.082,0.082,0.096,0.719,0.155,0.042,0.047,0.129,0.021,0.021,0.014,0.009,0.029,0.067,0.088,0.095,0.095,0.138,0.091,0.032,0.025,0.025,0.003,0,0,0,0,0,0,0,0,0,0,0,0,0.002,0.045,0.228,0.297,0.325,0.339,0.581,1.244,0.796,0.517,0.227,0.053,0.006,0,0,0,0,0,0,0,0,0,0.003,0.005,0.005,0.005,0.005,0.081,0.129,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.014,0.041,0.041,0.041,0.041,0.027,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.009,0.017,0.017,0.017,0.017,0.355,0.174,0.009,0.009,0.012,0.136,0.208,0.208,0.208,0.215,7.359,1.858,0.458,0.053,0.053,0.047,0.045,0.045,0.059,0.136,0.188,0.206,0.21,0.588,1.517,6.02,4.688,4.42,0.624,0.326,0.359,0.553,0.899,0.94,2.95,9.415,5.752,1.092,0.096,0.035,0.026,0.018,0.015,0.011,0.011,0.011,0,0,0,0,0,0,0,0,0,0,0,0.056,0.27,0.314,0.351,0.354,0.609,0.796,1.857,0.848,0.538,0.214,0.178,0.178,0.201,0.231,0.227,0.272,0.397,0.45,1.014,2.917,1.675,0.081,0.059,0.059,0.148,0.075,0.075,0.078,0.236,0.784,0.784,0.784,0.784,0.741,0.115,0.058,0.058,0.058,0.029,0.015,0.015,0.015,0.015,0.012,0.008,0.604,0.985,1.305,2.273,2.528,2.336,2.496,2.281,1.397,1.713,3.259,1.167,0.745,0.548,1.058,0.684,0.728,0.392,0.179,0.283,0.283,0.46,0.08,0.099,0.099,0.099,0.1,0.143,0.137,0.238,0.317,0.262,0.225,0.792,0.426,0.332,0.261,0.11,0.093,0.102,0.171,0.292,0.504,0.605,1.745,2.485,1.964,0.33,0.171,0.259,0.242,0.215,0.366,0.354,0.205,0.203,0.262,0.153,0.13,0.137,0.362,0.691,0.295,0.433,0.154,0.056,0.053,0.053,0.053,0.051,0.047,0.065,0.078,0.091,0.206,0.813,0.102,0.151,0.05,0.024,0.004,0.001,0,0,0,0.021,0.021,0.021,0.021,0.021,0.013,0.013,0.013,0.013,0.013,0.013,0.013,0.013,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.008,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.018,0.021,0.021,0.021,0.021,0.003,0,0,0,0,0,0,0,0,0,0.024,0.173,0.261,0.267,0.267,0.534,1.354,1.772,0.72,0.218,0.018,0.018,0.028,0.036,0.032,0.194,0.082,0.035,0.286,0.027,0.038,0.038,0.027,0.021,0.014,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.016,0.017,0.017,0.031,0.047,0.043,0.056,0.104,0.149,0.179,0.205,0.328,0.998,0.522,1.851,3.727,3.273,2.204,1.169,1.006,1.179,0.74,0.741,1.065,0.925,0.671,0.497,0.431,0.327,0.277,0.126,0.581,0.207,0.359,2.485,0.038,0.036,0.003,0.003,0.003,0.003,0.004,0.098,0.023,0.021,0.021,0.022,0.041,0.041,0.043,0.045,0.043,0.014,0.014,0.014,0.014,0.014,0.014,0.014,0.031,0.046,0.063,0.119,0.107,0.092,0.085,0.065,0.06,0.054,0.042,0.039,0.046,0.044,0.028,0.028,0.02,0.013,0.013,0.013,0.013,0.016,0.032,0.031,0.031,0.031,0.028,0.011,0.011,0.011,0.011,0.011,0.023,0.024,0.024,0.024,0.019,0.015,0.015,0.015,0.015,0.015,0.015,0.013,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.001,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.011,0.017,0.024,0.026,0.061,0.172,0.206,0.213,0.267,0.511,0.668,0.157,0.017,0.017,0.017,0.046,0.054,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.017,0.017,0.017,0.017,0.016,0,0,0,0,0,0,0,0,0,0.01,0.017,0.017,0.017,0.017,0.012,0.017,0.017,0.017,0.017,0.012,0,0,0,0,0,0.003,0.031,0.066,0.093,0.112,0.122,0.202,0.068,0.041,0.022,0.011,0,0,0,0,0,0,0,0,0,0,0,0.002,0.005,0.012,0.021,0.021,0.019,0.033,0.03,0.026,0.026,0.034,0.095,0.024,0.024,0.024,0.023,0.019,0.018,0.018,0.018,0.011,0.03,0.045,0.044,0.044,0.044,0.022,0.009,0.024,0.033,0.033,0.033,0.024,0.009,0,0,0,0,0,0,0.003,0.017,0.017,0.017,0.017,0.014,0,0,0,0,0,0.032,0.032,0.032,0.032,0.032,0.005,0.008,0.009,0.014,0.014,0.009,0.005,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.007,0.009,0.009,0.009,0.009,0.043,0.063,0.084,0.098,0.101,0.213,0.334,0.383,0.43,0.448,0.511,0.801,0.835,1.642,1.614,1.496,1.496,1.476,1.068,0.481,0.22,0.119,0.099,0.07,0.072,0.063,0.076,0.14,0.205,0.28,0.297,0.3,0.479,0.877,1.098,1.611,1.629,1.686,1.686,1.631,1.528,1.862,1.703,1.531,2.196,0.395,0.416,0.453,0.728,0.917,0.986,1.17,2.171,3.011,2.909,3.301,1.377,0.778,0.799,0.947,1.039,0.879,0.76,1.372,1.674,1.674,1.68,1.823,1.793,1.162,0.783,0.216,0.152,0.152,0.152,0.049,0,0,0,0.117,0.127,0.127,0.127,0.127,0.127,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.003,0.005,0.005,0.005,0.005,0.003,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.309,0.364,0.364,0.364,0.364,0.063,0.01,0.01,0.01,0.012,0.015,0.015,0.11,0.55,0.824,0.825,0.829,1.39,1.429,1.342,1.43,1.636,1.717,2.135,2.203,3.191,3.022,1.589,0.86,0.807,0.645,0.595,0.588,0.557,0.552,1.271,0.708,0.677,0.629,0.714,0.203,0.133,0.061,0.062,0.018,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.072,0.29,0.438,0.53,0.557,0.873,1.039,1.04,0.208,0.049,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.03,0.039,0.039,0.039,0.039,0.098,0.008,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.056,0.062,0.065,0.065,0.065,0.047,0.216,0.256,0.315,0.4,0.502,0.449,0.47,0.571,0.814,1.153,0.774,0.202,0.086,0.075,0.071,0.032,0.019,0.003,0.004,0.004,0.004,0.004,0.004,0.004,0.007,0.072,0.153,0.256,0.306,0.404,0.698,0.733,0.823,0.715,0.563,0.404,0.293,0.217,0.213,0.202,0.202,0.294,0.704,0.797,1.359,1.101,0.72,0.514,0.539,0.434,0.389,0.387,0.386,0.375,0.369,0.319,0.239,0.183,0.136,0.062,0.052,0.096,0.119,0.119,0.114,0.127,0.132,0.139,0.169,0.191,0.278,0.254,0.214,0.237,0.221,0.143,0.129,0.125,0.109,0.1,0.087,0.06,0.038,0.029,0.029,0.028,0.048,0.053,0.053,0.111,0.125,0.102,0.097,0.097,0.039,0.02,0.02,0.02,0.014,0.004,0.031,0.043,0.047,0.052,0.08,0.144,0.182,0.176,0.171,0.149,0.112,0.025,0,0,0,0,0,0,0,0.016,0.031,0.031,0.031,0.031,0.015,0,0,0,0,0,0.005,0.005,0.005,0.005,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.005,0.005,0.005,0.005,0.001,0,0,0
            ]
        }
    ]
};

    eChart_1.setOption(option);
    eChart_1.resize();
}if( $('#e_chart_2').length > 0 ){
    var eChart_1 = echarts.init(document.getElementById('e_chart_2'));
    var option = {
    title : {
        show:false
    },
    grid: {
        bottom: 40
    },
    color: ['#689f38', '#38649f'],	
    toolbox: {
        show:false
    },
    tooltip: {
            trigger: 'axis',
            backgroundColor: 'rgba(33,33,33,1)',
            borderRadius:0,
            padding:10,
            axisPointer: {
                type: 'cross',
                label: {
                    backgroundColor: 'rgba(33,33,33,1)'
                }
            },
            textStyle: {
                color: '#fff',
                fontStyle: 'normal',
                fontWeight: 'normal',
                fontFamily: "'Nunito Sans', sans-serif",
                fontSize: 12
            }	
        },
    legend: {
        show:false
    },
    dataZoom: [
        {
            show: false,
        }
    ],
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
            data : [
                '2009/6/12 2:00', '2009/6/12 3:00', '2009/6/12 4:00', '2009/6/12 5:00', '2009/6/12 6:00', '2009/6/12 7:00', '2009/6/12 8:00', '2009/6/12 9:00', '2009/6/12 10:00', '2009/6/12 11:00', '2009/6/12 12:00', '2009/6/12 13:00', '2009/6/12 14:00', '2009/6/12 15:00', '2009/6/12 16:00', '2009/6/12 17:00', '2009/6/12 18:00', '2009/6/12 19:00', '2009/6/12 20:00', '2009/6/12 21:00', '2009/6/12 22:00', '2009/6/12 23:00',
                '2009/6/13 0:00', '2009/6/13 1:00', '2009/6/13 2:00', '2009/6/13 3:00', '2009/6/13 4:00', '2009/6/13 5:00', '2009/6/13 6:00', '2009/6/13 7:00', '2009/6/13 8:00', '2009/6/13 9:00', '2009/6/13 10:00', '2009/6/13 11:00', '2009/6/13 12:00', '2009/6/13 13:00', '2009/6/13 14:00', '2009/6/13 15:00', '2009/6/13 16:00', '2009/6/13 17:00', '2009/6/13 18:00', '2009/6/13 19:00', '2009/6/13 20:00', '2009/6/13 21:00', '2009/6/13 22:00', '2009/6/13 23:00',
                '2009/6/14 0:00', '2009/6/14 1:00', '2009/6/14 2:00', '2009/6/14 3:00', '2009/6/14 4:00', '2009/6/14 5:00', '2009/6/14 6:00', '2009/6/14 7:00', '2009/6/14 8:00', '2009/6/14 9:00', '2009/6/14 10:00', '2009/6/14 11:00', '2009/6/14 12:00', '2009/6/14 13:00', '2009/6/14 14:00', '2009/6/14 15:00', '2009/6/14 16:00', '2009/6/14 17:00', '2009/6/14 18:00', '2009/6/14 19:00', '2009/6/14 20:00', '2009/6/14 21:00', '2009/6/14 22:00', '2009/6/14 23:00',
                '2009/6/15 0:00', '2009/6/15 1:00', '2009/6/15 2:00', '2009/6/15 3:00', '2009/6/15 4:00', '2009/6/15 5:00', '2009/6/15 6:00', '2009/6/15 7:00', '2009/6/15 8:00', '2009/6/15 9:00', '2009/6/15 10:00', '2009/6/15 11:00', '2009/6/15 12:00', '2009/6/15 13:00', '2009/6/15 14:00', '2009/6/15 15:00', '2009/6/15 16:00', '2009/6/15 17:00', '2009/6/15 18:00', '2009/6/15 19:00', '2009/6/15 20:00', '2009/6/15 21:00', '2009/6/15 22:00', '2009/6/15 23:00',
                '2009/6/15 0:00', '2009/6/16 1:00', '2009/6/16 2:00', '2009/6/16 3:00', '2009/6/16 4:00', '2009/6/16 5:00', '2009/6/16 6:00', '2009/6/16 7:00', '2009/6/16 8:00', '2009/6/16 9:00', '2009/6/16 10:00', '2009/6/16 11:00', '2009/6/16 12:00', '2009/6/16 13:00', '2009/6/16 14:00', '2009/6/16 15:00', '2009/6/16 16:00', '2009/6/16 17:00', '2009/6/16 18:00', '2009/6/16 19:00', '2009/6/16 20:00', '2009/6/16 21:00', '2009/6/16 22:00', '2009/6/16 23:00',
                '2009/6/15 0:00', '2009/6/17 1:00', '2009/6/17 2:00', '2009/6/17 3:00', '2009/6/17 4:00', '2009/6/17 5:00', '2009/6/17 6:00', '2009/6/17 7:00', '2009/6/17 8:00', '2009/6/17 9:00', '2009/6/17 10:00', '2009/6/17 11:00', '2009/6/17 12:00', '2009/6/17 13:00', '2009/6/17 14:00', '2009/6/17 15:00', '2009/6/17 16:00', '2009/6/17 17:00', '2009/6/17 18:00', '2009/6/17 19:00', '2009/6/17 20:00', '2009/6/17 21:00', '2009/6/17 22:00', '2009/6/17 23:00',
                '2009/6/18 0:00', '2009/6/18 1:00', '2009/6/18 2:00', '2009/6/18 3:00', '2009/6/18 4:00', '2009/6/18 5:00', '2009/6/18 6:00', '2009/6/18 7:00', '2009/6/18 8:00', '2009/6/18 9:00', '2009/6/18 10:00', '2009/6/18 11:00', '2009/6/18 12:00', '2009/6/18 13:00', '2009/6/18 14:00', '2009/6/18 15:00', '2009/6/18 16:00', '2009/6/18 17:00', '2009/6/18 18:00', '2009/6/18 19:00', '2009/6/18 20:00', '2009/6/18 21:00', '2009/6/18 22:00', '2009/6/18 23:00',
                '2009/6/15 0:00', '2009/6/19 1:00', '2009/6/19 2:00', '2009/6/19 3:00', '2009/6/19 4:00', '2009/6/19 5:00', '2009/6/19 6:00', '2009/6/19 7:00', '2009/6/19 8:00', '2009/6/19 9:00', '2009/6/19 10:00', '2009/6/19 11:00', '2009/6/19 12:00', '2009/6/19 13:00', '2009/6/19 14:00', '2009/6/19 15:00', '2009/6/19 16:00', '2009/6/19 17:00', '2009/6/19 18:00', '2009/6/19 19:00', '2009/6/19 20:00', '2009/6/19 21:00', '2009/6/19 22:00', '2009/6/19 23:00',
                '2009/6/20 0:00', '2009/6/20 1:00', '2009/6/20 2:00', '2009/6/20 3:00', '2009/6/20 4:00', '2009/6/20 5:00', '2009/6/20 6:00', '2009/6/20 7:00', '2009/6/20 8:00', '2009/6/20 9:00', '2009/6/20 10:00', '2009/6/20 11:00', '2009/6/20 12:00', '2009/6/20 13:00', '2009/6/20 14:00', '2009/6/20 15:00', '2009/6/20 16:00', '2009/6/20 17:00', '2009/6/20 18:00', '2009/6/20 19:00', '2009/6/20 20:00', '2009/6/20 21:00', '2009/6/20 22:00', '2009/6/20 23:00',
                '2009/6/21 0:00', '2009/6/21 1:00', '2009/6/21 2:00', '2009/6/21 3:00', '2009/6/21 4:00', '2009/6/21 5:00', '2009/6/21 6:00', '2009/6/21 7:00', '2009/6/21 8:00', '2009/6/21 9:00', '2009/6/21 10:00', '2009/6/21 11:00', '2009/6/21 12:00', '2009/6/21 13:00', '2009/6/21 14:00', '2009/6/21 15:00', '2009/6/21 16:00', '2009/6/21 17:00', '2009/6/21 18:00', '2009/6/21 19:00', '2009/6/21 20:00', '2009/6/21 21:00', '2009/6/21 22:00', '2009/6/21 23:00',
                '2009/6/22 0:00', '2009/6/22 1:00', '2009/6/22 2:00', '2009/6/22 3:00', '2009/6/22 4:00', '2009/6/22 5:00', '2009/6/22 6:00', '2009/6/22 7:00', '2009/6/22 8:00', '2009/6/22 9:00', '2009/6/22 10:00', '2009/6/22 11:00', '2009/6/22 12:00', '2009/6/22 13:00', '2009/6/22 14:00', '2009/6/22 15:00', '2009/6/22 16:00', '2009/6/22 17:00', '2009/6/22 18:00', '2009/6/22 19:00', '2009/6/22 20:00', '2009/6/22 21:00', '2009/6/22 22:00', '2009/6/22 23:00',
                '2009/6/23 0:00', '2009/6/23 1:00', '2009/6/23 2:00', '2009/6/23 3:00', '2009/6/23 4:00', '2009/6/23 5:00', '2009/6/23 6:00', '2009/6/23 7:00', '2009/6/23 8:00', '2009/6/23 9:00', '2009/6/23 10:00', '2009/6/23 11:00', '2009/6/23 12:00', '2009/6/23 13:00', '2009/6/23 14:00', '2009/6/23 15:00', '2009/6/23 16:00', '2009/6/23 17:00', '2009/6/23 18:00', '2009/6/23 19:00', '2009/6/23 20:00', '2009/6/23 21:00', '2009/6/23 22:00', '2009/6/23 23:00',
                '2009/6/24 0:00', '2009/6/24 1:00', '2009/6/24 2:00', '2009/6/24 3:00', '2009/6/24 4:00', '2009/6/24 5:00', '2009/6/24 6:00', '2009/6/24 7:00', '2009/6/24 8:00', '2009/6/24 9:00', '2009/6/24 10:00', '2009/6/24 11:00', '2009/6/24 12:00', '2009/6/24 13:00', '2009/6/24 14:00', '2009/6/24 15:00', '2009/6/24 16:00', '2009/6/24 17:00', '2009/6/24 18:00', '2009/6/24 19:00', '2009/6/24 20:00', '2009/6/24 21:00', '2009/6/24 22:00', '2009/6/24 23:00',
                '2009/6/25 0:00', '2009/6/25 1:00', '2009/6/25 2:00', '2009/6/25 3:00', '2009/6/25 4:00', '2009/6/25 5:00', '2009/6/25 6:00', '2009/6/25 7:00', '2009/6/25 8:00', '2009/6/25 9:00', '2009/6/25 10:00', '2009/6/25 11:00', '2009/6/25 12:00', '2009/6/25 13:00', '2009/6/25 14:00', '2009/6/25 15:00', '2009/6/25 16:00', '2009/6/25 17:00', '2009/6/25 18:00', '2009/6/25 19:00', '2009/6/25 20:00', '2009/6/25 21:00', '2009/6/25 22:00', '2009/6/25 23:00',
                '2009/6/26 0:00', '2009/6/26 1:00', '2009/6/26 2:00', '2009/6/26 3:00', '2009/6/26 4:00', '2009/6/26 5:00', '2009/6/26 6:00', '2009/6/26 7:00', '2009/6/26 8:00', '2009/6/26 9:00', '2009/6/26 10:00', '2009/6/26 11:00', '2009/6/26 12:00', '2009/6/26 13:00', '2009/6/26 14:00', '2009/6/26 15:00', '2009/6/26 16:00', '2009/6/26 17:00', '2009/6/26 18:00', '2009/6/26 19:00', '2009/6/26 20:00', '2009/6/26 21:00', '2009/6/26 22:00', '2009/6/26 23:00',
                '2009/6/27 0:00', '2009/6/27 1:00', '2009/6/27 2:00', '2009/6/27 3:00', '2009/6/27 4:00', '2009/6/27 5:00', '2009/6/27 6:00', '2009/6/27 7:00', '2009/6/27 8:00', '2009/6/27 9:00', '2009/6/27 10:00', '2009/6/27 11:00', '2009/6/27 12:00', '2009/6/27 13:00', '2009/6/27 14:00', '2009/6/27 15:00', '2009/6/27 16:00', '2009/6/27 17:00', '2009/6/27 18:00', '2009/6/27 19:00', '2009/6/27 20:00', '2009/6/27 21:00', '2009/6/27 22:00', '2009/6/27 23:00',

                '2009/6/28 0:00', '2009/6/28 1:00', '2009/6/28 2:00', '2009/6/28 3:00', '2009/6/28 4:00', '2009/6/28 5:00', '2009/6/28 6:00', '2009/6/28 7:00', '2009/6/28 8:00', '2009/6/28 9:00', '2009/6/28 10:00', '2009/6/28 11:00', '2009/6/28 12:00', '2009/6/28 13:00', '2009/6/28 14:00', '2009/6/28 15:00', '2009/6/28 16:00', '2009/6/28 17:00', '2009/6/28 18:00', '2009/6/28 19:00', '2009/6/28 20:00', '2009/6/28 21:00', '2009/6/28 22:00', '2009/6/28 23:00',
                '2009/6/29 0:00', '2009/6/29 1:00', '2009/6/29 2:00', '2009/6/29 3:00', '2009/6/29 4:00', '2009/6/29 5:00', '2009/6/29 6:00', '2009/6/29 7:00', '2009/6/29 8:00', '2009/6/29 9:00', '2009/6/29 10:00', '2009/6/29 11:00', '2009/6/29 12:00', '2009/6/29 13:00', '2009/6/29 14:00', '2009/6/29 15:00', '2009/6/29 16:00', '2009/6/29 17:00', '2009/6/29 18:00', '2009/6/29 19:00', '2009/6/29 20:00', '2009/6/29 21:00', '2009/6/29 22:00', '2009/6/29 23:00',
                '2009/6/30 0:00', '2009/6/30 1:00', '2009/6/30 2:00', '2009/6/30 3:00', '2009/6/30 4:00', '2009/6/30 5:00', '2009/6/30 6:00', '2009/6/30 7:00', '2009/6/30 8:00', '2009/6/30 9:00', '2009/6/30 10:00', '2009/6/30 11:00', '2009/6/30 12:00', '2009/6/30 13:00', '2009/6/30 14:00', '2009/6/30 15:00', '2009/6/30 16:00', '2009/6/30 17:00', '2009/6/30 18:00', '2009/6/30 19:00', '2009/6/30 20:00', '2009/6/30 21:00', '2009/6/30 22:00', '2009/6/30 23:00',
                '2009/7/1 0:00', '2009/7/1 1:00', '2009/7/1 2:00', '2009/7/1 3:00', '2009/7/1 4:00', '2009/7/1 5:00', '2009/7/1 6:00', '2009/7/1 7:00', '2009/7/1 8:00', '2009/7/1 9:00', '2009/7/1 10:00', '2009/7/1 11:00', '2009/7/1 12:00', '2009/7/1 13:00', '2009/7/1 14:00', '2009/7/1 15:00', '2009/7/1 16:00', '2009/7/1 17:00', '2009/7/1 18:00', '2009/7/1 19:00', '2009/7/1 20:00', '2009/7/1 21:00', '2009/7/1 22:00', '2009/7/1 23:00',
                '2009/7/2 0:00', '2009/7/2 1:00', '2009/7/2 2:00', '2009/7/2 3:00', '2009/7/2 4:00', '2009/7/2 5:00', '2009/7/2 6:00', '2009/7/2 7:00', '2009/7/2 8:00', '2009/7/2 9:00', '2009/7/2 10:00', '2009/7/2 11:00', '2009/7/2 12:00', '2009/7/2 13:00', '2009/7/2 14:00', '2009/7/2 15:00', '2009/7/2 16:00', '2009/7/2 17:00', '2009/7/2 18:00', '2009/7/2 19:00', '2009/7/2 20:00', '2009/7/2 21:00', '2009/7/2 22:00', '2009/7/2 23:00',
                '2009/7/3 0:00', '2009/7/3 1:00', '2009/7/3 2:00', '2009/7/3 3:00', '2009/7/3 4:00', '2009/7/3 5:00', '2009/7/3 6:00', '2009/7/3 7:00', '2009/7/3 8:00', '2009/7/3 9:00', '2009/7/3 10:00', '2009/7/3 11:00', '2009/7/3 12:00', '2009/7/3 13:00', '2009/7/3 14:00', '2009/7/3 15:00', '2009/7/3 16:00', '2009/7/3 17:00', '2009/7/3 18:00', '2009/7/3 19:00', '2009/7/3 20:00', '2009/7/3 21:00', '2009/7/3 22:00', '2009/7/3 23:00',
                '2009/7/4 0:00', '2009/7/4 1:00', '2009/7/4 2:00', '2009/7/4 3:00', '2009/7/4 4:00', '2009/7/4 5:00', '2009/7/4 6:00', '2009/7/4 7:00', '2009/7/4 8:00', '2009/7/4 9:00', '2009/7/4 10:00', '2009/7/4 11:00', '2009/7/4 12:00', '2009/7/4 13:00', '2009/7/4 14:00', '2009/7/4 15:00', '2009/7/4 16:00', '2009/7/4 17:00', '2009/7/4 18:00', '2009/7/4 19:00', '2009/7/4 20:00', '2009/7/4 21:00', '2009/7/4 22:00', '2009/7/4 23:00',
                '2009/7/5 0:00', '2009/7/5 1:00', '2009/7/5 2:00', '2009/7/5 3:00', '2009/7/5 4:00', '2009/7/5 5:00', '2009/7/5 6:00', '2009/7/5 7:00', '2009/7/5 8:00', '2009/7/5 9:00', '2009/7/5 10:00', '2009/7/5 11:00', '2009/7/5 12:00', '2009/7/5 13:00', '2009/7/5 14:00', '2009/7/5 15:00', '2009/7/5 16:00', '2009/7/5 17:00', '2009/7/5 18:00', '2009/7/5 19:00', '2009/7/5 20:00', '2009/7/5 21:00', '2009/7/5 22:00', '2009/7/5 23:00',
                '2009/7/6 0:00', '2009/7/6 1:00', '2009/7/6 2:00', '2009/7/6 3:00', '2009/7/6 4:00', '2009/7/6 5:00', '2009/7/6 6:00', '2009/7/6 7:00', '2009/7/6 8:00', '2009/7/6 9:00', '2009/7/6 10:00', '2009/7/6 11:00', '2009/7/6 12:00', '2009/7/6 13:00', '2009/7/6 14:00', '2009/7/6 15:00', '2009/7/6 16:00', '2009/7/6 17:00', '2009/7/6 18:00', '2009/7/6 19:00', '2009/7/6 20:00', '2009/7/6 21:00', '2009/7/6 22:00', '2009/7/6 23:00',
                '2009/7/7 0:00', '2009/7/7 1:00', '2009/7/7 2:00', '2009/7/7 3:00', '2009/7/7 4:00', '2009/7/7 5:00', '2009/7/7 6:00', '2009/7/7 7:00', '2009/7/7 8:00', '2009/7/7 9:00', '2009/7/7 10:00', '2009/7/7 11:00', '2009/7/7 12:00', '2009/7/7 13:00', '2009/7/7 14:00', '2009/7/7 15:00', '2009/7/7 16:00', '2009/7/7 17:00', '2009/7/7 18:00', '2009/7/7 19:00', '2009/7/7 20:00', '2009/7/7 21:00', '2009/7/7 22:00', '2009/7/7 23:00',
                '2009/7/8 0:00', '2009/7/8 1:00', '2009/7/8 2:00', '2009/7/8 3:00', '2009/7/8 4:00', '2009/7/8 5:00', '2009/7/8 6:00', '2009/7/8 7:00', '2009/7/8 8:00', '2009/7/8 9:00', '2009/7/8 10:00', '2009/7/8 11:00', '2009/7/8 12:00', '2009/7/8 13:00', '2009/7/8 14:00', '2009/7/8 15:00', '2009/7/8 16:00', '2009/7/8 17:00', '2009/7/8 18:00', '2009/7/8 19:00', '2009/7/8 20:00', '2009/7/8 21:00', '2009/7/8 22:00', '2009/7/8 23:00',
                '2009/7/9 0:00', '2009/7/9 1:00', '2009/7/9 2:00', '2009/7/9 3:00', '2009/7/9 4:00', '2009/7/9 5:00', '2009/7/9 6:00', '2009/7/9 7:00', '2009/7/9 8:00', '2009/7/9 9:00', '2009/7/9 10:00', '2009/7/9 11:00', '2009/7/9 12:00', '2009/7/9 13:00', '2009/7/9 14:00', '2009/7/9 15:00', '2009/7/9 16:00', '2009/7/9 17:00', '2009/7/9 18:00', '2009/7/9 19:00', '2009/7/9 20:00', '2009/7/9 21:00', '2009/7/9 22:00', '2009/7/9 23:00',
                '2009/7/10 0:00', '2009/7/10 1:00', '2009/7/10 2:00', '2009/7/10 3:00', '2009/7/10 4:00', '2009/7/10 5:00', '2009/7/10 6:00', '2009/7/10 7:00', '2009/7/10 8:00', '2009/7/10 9:00', '2009/7/10 10:00', '2009/7/10 11:00', '2009/7/10 12:00', '2009/7/10 13:00', '2009/7/10 14:00', '2009/7/10 15:00', '2009/7/10 16:00', '2009/7/10 17:00', '2009/7/10 18:00', '2009/7/10 19:00', '2009/7/10 20:00', '2009/7/10 21:00', '2009/7/10 22:00', '2009/7/10 23:00',
                '2009/7/11 0:00', '2009/7/11 1:00', '2009/7/11 2:00', '2009/7/11 3:00', '2009/7/11 4:00', '2009/7/11 5:00', '2009/7/11 6:00', '2009/7/11 7:00', '2009/7/11 8:00', '2009/7/11 9:00', '2009/7/11 10:00', '2009/7/11 11:00', '2009/7/11 12:00', '2009/7/11 13:00', '2009/7/11 14:00', '2009/7/11 15:00', '2009/7/11 16:00', '2009/7/11 17:00', '2009/7/11 18:00', '2009/7/11 19:00', '2009/7/11 20:00', '2009/7/11 21:00', '2009/7/11 22:00', '2009/7/11 23:00',
                '2009/7/12 0:00', '2009/7/12 1:00', '2009/7/12 2:00', '2009/7/12 3:00', '2009/7/12 4:00', '2009/7/12 5:00', '2009/7/12 6:00', '2009/7/12 7:00', '2009/7/12 8:00', '2009/7/12 9:00', '2009/7/12 10:00', '2009/7/12 11:00', '2009/7/12 12:00', '2009/7/12 13:00', '2009/7/12 14:00', '2009/7/12 15:00', '2009/7/12 16:00', '2009/7/12 17:00', '2009/7/12 18:00', '2009/7/12 19:00', '2009/7/12 20:00', '2009/7/12 21:00', '2009/7/12 22:00', '2009/7/12 23:00',
                '2009/7/13 0:00', '2009/7/13 1:00', '2009/7/13 2:00', '2009/7/13 3:00', '2009/7/13 4:00', '2009/7/13 5:00', '2009/7/13 6:00', '2009/7/13 7:00', '2009/7/13 8:00', '2009/7/13 9:00', '2009/7/13 10:00', '2009/7/13 11:00', '2009/7/13 12:00', '2009/7/13 13:00', '2009/7/13 14:00', '2009/7/13 15:00', '2009/7/13 16:00', '2009/7/13 17:00', '2009/7/13 18:00', '2009/7/13 19:00', '2009/7/13 20:00', '2009/7/13 21:00', '2009/7/13 22:00', '2009/7/13 23:00',
                '2009/7/14 0:00', '2009/7/14 1:00', '2009/7/14 2:00', '2009/7/14 3:00', '2009/7/14 4:00', '2009/7/14 5:00', '2009/7/14 6:00', '2009/7/14 7:00', '2009/7/14 8:00', '2009/7/14 9:00', '2009/7/14 10:00', '2009/7/14 11:00', '2009/7/14 12:00', '2009/7/14 13:00', '2009/7/14 14:00', '2009/7/14 15:00', '2009/7/14 16:00', '2009/7/14 17:00', '2009/7/14 18:00', '2009/7/14 19:00', '2009/7/14 20:00', '2009/7/14 21:00', '2009/7/14 22:00', '2009/7/14 23:00',
                '2009/7/15 0:00', '2009/7/15 1:00', '2009/7/15 2:00', '2009/7/15 3:00', '2009/7/15 4:00', '2009/7/15 5:00', '2009/7/15 6:00', '2009/7/15 7:00', '2009/7/15 8:00', '2009/7/15 9:00', '2009/7/15 10:00', '2009/7/15 11:00', '2009/7/15 12:00', '2009/7/15 13:00', '2009/7/15 14:00', '2009/7/15 15:00', '2009/7/15 16:00', '2009/7/15 17:00', '2009/7/15 18:00', '2009/7/15 19:00', '2009/7/15 20:00', '2009/7/15 21:00', '2009/7/15 22:00', '2009/7/15 23:00',
                '2009/7/16 0:00', '2009/7/16 1:00', '2009/7/16 2:00', '2009/7/16 3:00', '2009/7/16 4:00', '2009/7/16 5:00', '2009/7/16 6:00', '2009/7/16 7:00', '2009/7/16 8:00', '2009/7/16 9:00', '2009/7/16 10:00', '2009/7/16 11:00', '2009/7/16 12:00', '2009/7/16 13:00', '2009/7/16 14:00', '2009/7/16 15:00', '2009/7/16 16:00', '2009/7/16 17:00', '2009/7/16 18:00', '2009/7/16 19:00', '2009/7/16 20:00', '2009/7/16 21:00', '2009/7/16 22:00', '2009/7/16 23:00',
                '2009/7/17 0:00', '2009/7/17 1:00', '2009/7/17 2:00', '2009/7/17 3:00', '2009/7/17 4:00', '2009/7/17 5:00', '2009/7/17 6:00', '2009/7/17 7:00', '2009/7/17 8:00', '2009/7/17 9:00', '2009/7/17 10:00', '2009/7/17 11:00', '2009/7/17 12:00', '2009/7/17 13:00', '2009/7/17 14:00', '2009/7/17 15:00', '2009/7/17 16:00', '2009/7/17 17:00', '2009/7/17 18:00', '2009/7/17 19:00', '2009/7/17 20:00', '2009/7/17 21:00', '2009/7/17 22:00', '2009/7/17 23:00',
                '2009/7/18 0:00', '2009/7/18 1:00', '2009/7/18 2:00', '2009/7/18 3:00', '2009/7/18 4:00', '2009/7/18 5:00', '2009/7/18 6:00', '2009/7/18 7:00', '2009/7/18 8:00', '2009/7/18 9:00', '2009/7/18 10:00', '2009/7/18 11:00', '2009/7/18 12:00', '2009/7/18 13:00', '2009/7/18 14:00', '2009/7/18 15:00', '2009/7/18 16:00', '2009/7/18 17:00', '2009/7/18 18:00', '2009/7/18 19:00', '2009/7/18 20:00', '2009/7/18 21:00', '2009/7/18 22:00', '2009/7/18 23:00',
                '2009/7/19 0:00', '2009/7/19 1:00', '2009/7/19 2:00', '2009/7/19 3:00', '2009/7/19 4:00', '2009/7/19 5:00', '2009/7/19 6:00', '2009/7/19 7:00', '2009/7/19 8:00', '2009/7/19 9:00', '2009/7/19 10:00', '2009/7/19 11:00', '2009/7/19 12:00', '2009/7/19 13:00', '2009/7/19 14:00', '2009/7/19 15:00', '2009/7/19 16:00', '2009/7/19 17:00', '2009/7/19 18:00', '2009/7/19 19:00', '2009/7/19 20:00', '2009/7/19 21:00', '2009/7/19 22:00', '2009/7/19 23:00',
                '2009/7/20 0:00', '2009/7/20 1:00', '2009/7/20 2:00', '2009/7/20 3:00', '2009/7/20 4:00', '2009/7/20 5:00', '2009/7/20 6:00', '2009/7/20 7:00', '2009/7/20 8:00', '2009/7/20 9:00', '2009/7/20 10:00', '2009/7/20 11:00', '2009/7/20 12:00', '2009/7/20 13:00', '2009/7/20 14:00', '2009/7/20 15:00', '2009/7/20 16:00', '2009/7/20 17:00', '2009/7/20 18:00', '2009/7/20 19:00', '2009/7/20 20:00', '2009/7/20 21:00', '2009/7/20 22:00', '2009/7/20 23:00',
                '2009/7/21 0:00', '2009/7/21 1:00', '2009/7/21 2:00', '2009/7/21 3:00', '2009/7/21 4:00', '2009/7/21 5:00', '2009/7/21 6:00', '2009/7/21 7:00', '2009/7/21 8:00', '2009/7/21 9:00', '2009/7/21 10:00', '2009/7/21 11:00', '2009/7/21 12:00', '2009/7/21 13:00', '2009/7/21 14:00', '2009/7/21 15:00', '2009/7/21 16:00', '2009/7/21 17:00', '2009/7/21 18:00', '2009/7/21 19:00', '2009/7/21 20:00', '2009/7/21 21:00', '2009/7/21 22:00', '2009/7/21 23:00',
                '2009/7/22 0:00', '2009/7/22 1:00', '2009/7/22 2:00', '2009/7/22 3:00', '2009/7/22 4:00', '2009/7/22 5:00', '2009/7/22 6:00', '2009/7/22 7:00', '2009/7/22 8:00', '2009/7/22 9:00', '2009/7/22 10:00', '2009/7/22 11:00', '2009/7/22 12:00', '2009/7/22 13:00', '2009/7/22 14:00', '2009/7/22 15:00', '2009/7/22 16:00', '2009/7/22 17:00', '2009/7/22 18:00', '2009/7/22 19:00', '2009/7/22 20:00', '2009/7/22 21:00', '2009/7/22 22:00', '2009/7/22 23:00',
                '2009/7/23 0:00', '2009/7/23 1:00', '2009/7/23 2:00', '2009/7/23 3:00', '2009/7/23 4:00', '2009/7/23 5:00', '2009/7/23 6:00', '2009/7/23 7:00', '2009/7/23 8:00', '2009/7/23 9:00', '2009/7/23 10:00', '2009/7/23 11:00', '2009/7/23 12:00', '2009/7/23 13:00', '2009/7/23 14:00', '2009/7/23 15:00', '2009/7/23 16:00', '2009/7/23 17:00', '2009/7/23 18:00', '2009/7/23 19:00', '2009/7/23 20:00', '2009/7/23 21:00', '2009/7/23 22:00', '2009/7/23 23:00',
                '2009/7/24 0:00', '2009/7/24 1:00', '2009/7/24 2:00', '2009/7/24 3:00', '2009/7/24 4:00', '2009/7/24 5:00', '2009/7/24 6:00', '2009/7/24 7:00', '2009/7/24 8:00', '2009/7/24 9:00', '2009/7/24 10:00', '2009/7/24 11:00', '2009/7/24 12:00', '2009/7/24 13:00', '2009/7/24 14:00', '2009/7/24 15:00', '2009/7/24 16:00', '2009/7/24 17:00', '2009/7/24 18:00', '2009/7/24 19:00', '2009/7/24 20:00', '2009/7/24 21:00', '2009/7/24 22:00', '2009/7/24 23:00',
                '2009/7/25 0:00', '2009/7/25 1:00', '2009/7/25 2:00', '2009/7/25 3:00', '2009/7/25 4:00', '2009/7/25 5:00', '2009/7/25 6:00', '2009/7/25 7:00', '2009/7/25 8:00', '2009/7/25 9:00', '2009/7/25 10:00', '2009/7/25 11:00', '2009/7/25 12:00', '2009/7/25 13:00', '2009/7/25 14:00', '2009/7/25 15:00', '2009/7/25 16:00', '2009/7/25 17:00', '2009/7/25 18:00', '2009/7/25 19:00', '2009/7/25 20:00', '2009/7/25 21:00', '2009/7/25 22:00', '2009/7/25 23:00',
                '2009/7/26 0:00', '2009/7/26 1:00', '2009/7/26 2:00', '2009/7/26 3:00', '2009/7/26 4:00', '2009/7/26 5:00', '2009/7/26 6:00', '2009/7/26 7:00', '2009/7/26 8:00', '2009/7/26 9:00', '2009/7/26 10:00', '2009/7/26 11:00', '2009/7/26 12:00', '2009/7/26 13:00', '2009/7/26 14:00', '2009/7/26 15:00', '2009/7/26 16:00', '2009/7/26 17:00', '2009/7/26 18:00', '2009/7/26 19:00', '2009/7/26 20:00', '2009/7/26 21:00', '2009/7/26 22:00', '2009/7/26 23:00',
                '2009/7/27 0:00', '2009/7/27 1:00', '2009/7/27 2:00', '2009/7/27 3:00', '2009/7/27 4:00', '2009/7/27 5:00', '2009/7/27 6:00', '2009/7/27 7:00', '2009/7/27 8:00', '2009/7/27 9:00', '2009/7/27 10:00', '2009/7/27 11:00', '2009/7/27 12:00', '2009/7/27 13:00', '2009/7/27 14:00', '2009/7/27 15:00', '2009/7/27 16:00', '2009/7/27 17:00', '2009/7/27 18:00', '2009/7/27 19:00', '2009/7/27 20:00', '2009/7/27 21:00', '2009/7/27 22:00', '2009/7/27 23:00',
                '2009/7/28 0:00', '2009/7/28 1:00', '2009/7/28 2:00', '2009/7/28 3:00', '2009/7/28 4:00', '2009/7/28 5:00', '2009/7/28 6:00', '2009/7/28 7:00', '2009/7/28 8:00', '2009/7/28 9:00', '2009/7/28 10:00', '2009/7/28 11:00', '2009/7/28 12:00', '2009/7/28 13:00', '2009/7/28 14:00', '2009/7/28 15:00', '2009/7/28 16:00', '2009/7/28 17:00', '2009/7/28 18:00', '2009/7/28 19:00', '2009/7/28 20:00', '2009/7/28 21:00', '2009/7/28 22:00', '2009/7/28 23:00',
                '2009/7/29 0:00', '2009/7/29 1:00', '2009/7/29 2:00', '2009/7/29 3:00', '2009/7/29 4:00', '2009/7/29 5:00', '2009/7/29 6:00', '2009/7/29 7:00', '2009/7/29 8:00', '2009/7/29 9:00', '2009/7/29 10:00', '2009/7/29 11:00', '2009/7/29 12:00', '2009/7/29 13:00', '2009/7/29 14:00', '2009/7/29 15:00', '2009/7/29 16:00', '2009/7/29 17:00', '2009/7/29 18:00', '2009/7/29 19:00', '2009/7/29 20:00', '2009/7/29 21:00', '2009/7/29 22:00', '2009/7/29 23:00',
                '2009/7/30 0:00', '2009/7/30 1:00', '2009/7/30 2:00', '2009/7/30 3:00', '2009/7/30 4:00', '2009/7/30 5:00', '2009/7/30 6:00', '2009/7/30 7:00', '2009/7/30 8:00', '2009/7/30 9:00', '2009/7/30 10:00', '2009/7/30 11:00', '2009/7/30 12:00', '2009/7/30 13:00', '2009/7/30 14:00', '2009/7/30 15:00', '2009/7/30 16:00', '2009/7/30 17:00', '2009/7/30 18:00', '2009/7/30 19:00', '2009/7/30 20:00', '2009/7/30 21:00', '2009/7/30 22:00', '2009/7/30 23:00',
                '2009/7/31 0:00', '2009/7/31 1:00', '2009/7/31 2:00', '2009/7/31 3:00', '2009/7/31 4:00', '2009/7/31 5:00', '2009/7/31 6:00', '2009/7/31 7:00', '2009/7/31 8:00', '2009/7/31 9:00', '2009/7/31 10:00', '2009/7/31 11:00', '2009/7/31 12:00', '2009/7/31 13:00', '2009/7/31 14:00', '2009/7/31 15:00', '2009/7/31 16:00', '2009/7/31 17:00', '2009/7/31 18:00', '2009/7/31 19:00', '2009/7/31 20:00', '2009/7/31 21:00', '2009/7/31 22:00', '2009/7/31 23:00',
                '2009/8/1 0:00', '2009/8/1 1:00', '2009/8/1 2:00', '2009/8/1 3:00', '2009/8/1 4:00', '2009/8/1 5:00', '2009/8/1 6:00', '2009/8/1 7:00', '2009/8/1 8:00', '2009/8/1 9:00', '2009/8/1 10:00', '2009/8/1 11:00', '2009/8/1 12:00', '2009/8/1 13:00', '2009/8/1 14:00', '2009/8/1 15:00', '2009/8/1 16:00', '2009/8/1 17:00', '2009/8/1 18:00', '2009/8/1 19:00', '2009/8/1 20:00', '2009/8/1 21:00', '2009/8/1 22:00', '2009/8/1 23:00', '2009/8/2 0:00', '2009/8/2 1:00', '2009/8/2 2:00', '2009/8/2 3:00', '2009/8/2 4:00', '2009/8/2 5:00', '2009/8/2 6:00', '2009/8/2 7:00', '2009/8/2 8:00', '2009/8/2 9:00', '2009/8/2 10:00', '2009/8/2 11:00', '2009/8/2 12:00', '2009/8/2 13:00', '2009/8/2 14:00', '2009/8/2 15:00', '2009/8/2 16:00', '2009/8/2 17:00', '2009/8/2 18:00', '2009/8/2 19:00', '2009/8/2 20:00', '2009/8/2 21:00', '2009/8/2 22:00', '2009/8/2 23:00', '2009/8/3 0:00', '2009/8/3 1:00', '2009/8/3 2:00', '2009/8/3 3:00', '2009/8/3 4:00', '2009/8/3 5:00', '2009/8/3 6:00', '2009/8/3 7:00', '2009/8/3 8:00', '2009/8/3 9:00', '2009/8/3 10:00', '2009/8/3 11:00', '2009/8/3 12:00', '2009/8/3 13:00', '2009/8/3 14:00', '2009/8/3 15:00', '2009/8/3 16:00', '2009/8/3 17:00', '2009/8/3 18:00', '2009/8/3 19:00', '2009/8/3 20:00', '2009/8/3 21:00', '2009/8/3 22:00', '2009/8/3 23:00', '2009/8/4 0:00', '2009/8/4 1:00', '2009/8/4 2:00', '2009/8/4 3:00', '2009/8/4 4:00', '2009/8/4 5:00', '2009/8/4 6:00', '2009/8/4 7:00', '2009/8/4 8:00', '2009/8/4 9:00', '2009/8/4 10:00', '2009/8/4 11:00', '2009/8/4 12:00', '2009/8/4 13:00', '2009/8/4 14:00', '2009/8/4 15:00', '2009/8/4 16:00', '2009/8/4 17:00', '2009/8/4 18:00', '2009/8/4 19:00', '2009/8/4 20:00', '2009/8/4 21:00', '2009/8/4 22:00', '2009/8/4 23:00', '2009/8/5 0:00', '2009/8/5 1:00', '2009/8/5 2:00', '2009/8/5 3:00', '2009/8/5 4:00', '2009/8/5 5:00', '2009/8/5 6:00', '2009/8/5 7:00', '2009/8/5 8:00', '2009/8/5 9:00', '2009/8/5 10:00', '2009/8/5 11:00', '2009/8/5 12:00', '2009/8/5 13:00', '2009/8/5 14:00', '2009/8/5 15:00', '2009/8/5 16:00', '2009/8/5 17:00', '2009/8/5 18:00', '2009/8/5 19:00', '2009/8/5 20:00', '2009/8/5 21:00', '2009/8/5 22:00', '2009/8/5 23:00', '2009/8/6 0:00', '2009/8/6 1:00', '2009/8/6 2:00', '2009/8/6 3:00', '2009/8/6 4:00', '2009/8/6 5:00', '2009/8/6 6:00', '2009/8/6 7:00', '2009/8/6 8:00', '2009/8/6 9:00', '2009/8/6 10:00', '2009/8/6 11:00', '2009/8/6 12:00', '2009/8/6 13:00', '2009/8/6 14:00', '2009/8/6 15:00', '2009/8/6 16:00', '2009/8/6 17:00', '2009/8/6 18:00', '2009/8/6 19:00', '2009/8/6 20:00', '2009/8/6 21:00', '2009/8/6 22:00', '2009/8/6 23:00', '2009/8/7 0:00', '2009/8/7 1:00', '2009/8/7 2:00', '2009/8/7 3:00', '2009/8/7 4:00', '2009/8/7 5:00', '2009/8/7 6:00', '2009/8/7 7:00', '2009/8/7 8:00', '2009/8/7 9:00', '2009/8/7 10:00', '2009/8/7 11:00', '2009/8/7 12:00', '2009/8/7 13:00', '2009/8/7 14:00', '2009/8/7 15:00', '2009/8/7 16:00', '2009/8/7 17:00', '2009/8/7 18:00', '2009/8/7 19:00', '2009/8/7 20:00', '2009/8/7 21:00', '2009/8/7 22:00', '2009/8/7 23:00', '2009/8/8 0:00', '2009/8/8 1:00', '2009/8/8 2:00', '2009/8/8 3:00', '2009/8/8 4:00', '2009/8/8 5:00', '2009/8/8 6:00', '2009/8/8 7:00', '2009/8/8 8:00', '2009/8/8 9:00', '2009/8/8 10:00', '2009/8/8 11:00', '2009/8/8 12:00', '2009/8/8 13:00', '2009/8/8 14:00', '2009/8/8 15:00', '2009/8/8 16:00', '2009/8/8 17:00', '2009/8/8 18:00', '2009/8/8 19:00', '2009/8/8 20:00', '2009/8/8 21:00', '2009/8/8 22:00', '2009/8/8 23:00', '2009/8/9 0:00', '2009/8/9 1:00', '2009/8/9 2:00', '2009/8/9 3:00', '2009/8/9 4:00', '2009/8/9 5:00', '2009/8/9 6:00', '2009/8/9 7:00', '2009/8/9 8:00', '2009/8/9 9:00', '2009/8/9 10:00', '2009/8/9 11:00', '2009/8/9 12:00', '2009/8/9 13:00', '2009/8/9 14:00', '2009/8/9 15:00', '2009/8/9 16:00', '2009/8/9 17:00', '2009/8/9 18:00', '2009/8/9 19:00', '2009/8/9 20:00', '2009/8/9 21:00', '2009/8/9 22:00', '2009/8/9 23:00', '2009/8/10 0:00', '2009/8/10 1:00', '2009/8/10 2:00', '2009/8/10 3:00', '2009/8/10 4:00', '2009/8/10 5:00', '2009/8/10 6:00', '2009/8/10 7:00', '2009/8/10 8:00', '2009/8/10 9:00', '2009/8/10 10:00', '2009/8/10 11:00', '2009/8/10 12:00', '2009/8/10 13:00', '2009/8/10 14:00', '2009/8/10 15:00', '2009/8/10 16:00', '2009/8/10 17:00', '2009/8/10 18:00', '2009/8/10 19:00', '2009/8/10 20:00', '2009/8/10 21:00', '2009/8/10 22:00', '2009/8/10 23:00', '2009/8/11 0:00', '2009/8/11 1:00', '2009/8/11 2:00', '2009/8/11 3:00', '2009/8/11 4:00', '2009/8/11 5:00', '2009/8/11 6:00', '2009/8/11 7:00', '2009/8/11 8:00', '2009/8/11 9:00', '2009/8/11 10:00', '2009/8/11 11:00', '2009/8/11 12:00', '2009/8/11 13:00', '2009/8/11 14:00', '2009/8/11 15:00', '2009/8/11 16:00', '2009/8/11 17:00', '2009/8/11 18:00', '2009/8/11 19:00', '2009/8/11 20:00', '2009/8/11 21:00', '2009/8/11 22:00', '2009/8/11 23:00', '2009/8/12 0:00', '2009/8/12 1:00', '2009/8/12 2:00', '2009/8/12 3:00', '2009/8/12 4:00', '2009/8/12 5:00', '2009/8/12 6:00', '2009/8/12 7:00', '2009/8/12 8:00', '2009/8/12 9:00', '2009/8/12 10:00', '2009/8/12 11:00', '2009/8/12 12:00', '2009/8/12 13:00', '2009/8/12 14:00', '2009/8/12 15:00', '2009/8/12 16:00', '2009/8/12 17:00', '2009/8/12 18:00', '2009/8/12 19:00', '2009/8/12 20:00', '2009/8/12 21:00', '2009/8/12 22:00', '2009/8/12 23:00', '2009/8/13 0:00', '2009/8/13 1:00', '2009/8/13 2:00', '2009/8/13 3:00', '2009/8/13 4:00', '2009/8/13 5:00', '2009/8/13 6:00', '2009/8/13 7:00', '2009/8/13 8:00', '2009/8/13 9:00', '2009/8/13 10:00', '2009/8/13 11:00', '2009/8/13 12:00', '2009/8/13 13:00', '2009/8/13 14:00', '2009/8/13 15:00', '2009/8/13 16:00', '2009/8/13 17:00', '2009/8/13 18:00', '2009/8/13 19:00', '2009/8/13 20:00', '2009/8/13 21:00', '2009/8/13 22:00', '2009/8/13 23:00', '2009/8/14 0:00', '2009/8/14 1:00', '2009/8/14 2:00', '2009/8/14 3:00', '2009/8/14 4:00', '2009/8/14 5:00', '2009/8/14 6:00', '2009/8/14 7:00', '2009/8/14 8:00', '2009/8/14 9:00', '2009/8/14 10:00', '2009/8/14 11:00', '2009/8/14 12:00', '2009/8/14 13:00', '2009/8/14 14:00', '2009/8/14 15:00', '2009/8/14 16:00', '2009/8/14 17:00', '2009/8/14 18:00', '2009/8/14 19:00', '2009/8/14 20:00', '2009/8/14 21:00', '2009/8/14 22:00', '2009/8/14 23:00', '2009/8/15 0:00', '2009/8/15 1:00', '2009/8/15 2:00', '2009/8/15 3:00', '2009/8/15 4:00', '2009/8/15 5:00', '2009/8/15 6:00', '2009/8/15 7:00', '2009/8/15 8:00', '2009/8/15 9:00', '2009/8/15 10:00', '2009/8/15 11:00', '2009/8/15 12:00', '2009/8/15 13:00', '2009/8/15 14:00', '2009/8/15 15:00', '2009/8/15 16:00', '2009/8/15 17:00', '2009/8/15 18:00', '2009/8/15 19:00', '2009/8/15 20:00', '2009/8/15 21:00', '2009/8/15 22:00', '2009/8/15 23:00', '2009/8/16 0:00', '2009/8/16 1:00', '2009/8/16 2:00', '2009/8/16 3:00', '2009/8/16 4:00', '2009/8/16 5:00', '2009/8/16 6:00', '2009/8/16 7:00', '2009/8/16 8:00', '2009/8/16 9:00', '2009/8/16 10:00', '2009/8/16 11:00', '2009/8/16 12:00', '2009/8/16 13:00', '2009/8/16 14:00', '2009/8/16 15:00', '2009/8/16 16:00', '2009/8/16 17:00', '2009/8/16 18:00', '2009/8/16 19:00', '2009/8/16 20:00', '2009/8/16 21:00', '2009/8/16 22:00', '2009/8/16 23:00', '2009/8/17 0:00', '2009/8/17 1:00', '2009/8/17 2:00', '2009/8/17 3:00', '2009/8/17 4:00', '2009/8/17 5:00', '2009/8/17 6:00', '2009/8/17 7:00', '2009/8/17 8:00', '2009/8/17 9:00', '2009/8/17 10:00', '2009/8/17 11:00', '2009/8/17 12:00', '2009/8/17 13:00', '2009/8/17 14:00', '2009/8/17 15:00', '2009/8/17 16:00', '2009/8/17 17:00', '2009/8/17 18:00', '2009/8/17 19:00', '2009/8/17 20:00', '2009/8/17 21:00', '2009/8/17 22:00', '2009/8/17 23:00', '2009/8/18 0:00', '2009/8/18 1:00', '2009/8/18 2:00', '2009/8/18 3:00', '2009/8/18 4:00', '2009/8/18 5:00', '2009/8/18 6:00', '2009/8/18 7:00', '2009/8/18 8:00', '2009/8/18 9:00', '2009/8/18 10:00', '2009/8/18 11:00', '2009/8/18 12:00', '2009/8/18 13:00', '2009/8/18 14:00', '2009/8/18 15:00', '2009/8/18 16:00', '2009/8/18 17:00', '2009/8/18 18:00', '2009/8/18 19:00', '2009/8/18 20:00', '2009/8/18 21:00', '2009/8/18 22:00', '2009/8/18 23:00', '2009/8/19 0:00', '2009/8/19 1:00', '2009/8/19 2:00', '2009/8/19 3:00', '2009/8/19 4:00', '2009/8/19 5:00', '2009/8/19 6:00', '2009/8/19 7:00', '2009/8/19 8:00', '2009/8/19 9:00', '2009/8/19 10:00', '2009/8/19 11:00', '2009/8/19 12:00', '2009/8/19 13:00', '2009/8/19 14:00', '2009/8/19 15:00', '2009/8/19 16:00', '2009/8/19 17:00', '2009/8/19 18:00', '2009/8/19 19:00', '2009/8/19 20:00', '2009/8/19 21:00', '2009/8/19 22:00', '2009/8/19 23:00', '2009/8/20 0:00', '2009/8/20 1:00', '2009/8/20 2:00', '2009/8/20 3:00', '2009/8/20 4:00', '2009/8/20 5:00', '2009/8/20 6:00', '2009/8/20 7:00', '2009/8/20 8:00', '2009/8/20 9:00', '2009/8/20 10:00', '2009/8/20 11:00', '2009/8/20 12:00', '2009/8/20 13:00', '2009/8/20 14:00', '2009/8/20 15:00', '2009/8/20 16:00', '2009/8/20 17:00', '2009/8/20 18:00', '2009/8/20 19:00', '2009/8/20 20:00', '2009/8/20 21:00', '2009/8/20 22:00', '2009/8/20 23:00', '2009/8/21 0:00', '2009/8/21 1:00', '2009/8/21 2:00', '2009/8/21 3:00', '2009/8/21 4:00', '2009/8/21 5:00', '2009/8/21 6:00', '2009/8/21 7:00', '2009/8/21 8:00', '2009/8/21 9:00', '2009/8/21 10:00', '2009/8/21 11:00', '2009/8/21 12:00', '2009/8/21 13:00', '2009/8/21 14:00', '2009/8/21 15:00', '2009/8/21 16:00', '2009/8/21 17:00', '2009/8/21 18:00', '2009/8/21 19:00', '2009/8/21 20:00', '2009/8/21 21:00', '2009/8/21 22:00', '2009/8/21 23:00', '2009/8/22 0:00', '2009/8/22 1:00', '2009/8/22 2:00', '2009/8/22 3:00', '2009/8/22 4:00', '2009/8/22 5:00', '2009/8/22 6:00', '2009/8/22 7:00', '2009/8/22 8:00', '2009/8/22 9:00', '2009/8/22 10:00', '2009/8/22 11:00', '2009/8/22 12:00', '2009/8/22 13:00', '2009/8/22 14:00', '2009/8/22 15:00', '2009/8/22 16:00', '2009/8/22 17:00', '2009/8/22 18:00', '2009/8/22 19:00', '2009/8/22 20:00', '2009/8/22 21:00', '2009/8/22 22:00', '2009/8/22 23:00', '2009/8/23 0:00', '2009/8/23 1:00', '2009/8/23 2:00', '2009/8/23 3:00', '2009/8/23 4:00', '2009/8/23 5:00', '2009/8/23 6:00', '2009/8/23 7:00', '2009/8/23 8:00', '2009/8/23 9:00', '2009/8/23 10:00', '2009/8/23 11:00', '2009/8/23 12:00', '2009/8/23 13:00', '2009/8/23 14:00', '2009/8/23 15:00', '2009/8/23 16:00', '2009/8/23 17:00', '2009/8/23 18:00', '2009/8/23 19:00', '2009/8/23 20:00', '2009/8/23 21:00', '2009/8/23 22:00', '2009/8/23 23:00', '2009/8/24 0:00', '2009/8/24 1:00', '2009/8/24 2:00', '2009/8/24 3:00', '2009/8/24 4:00', '2009/8/24 5:00', '2009/8/24 6:00', '2009/8/24 7:00', '2009/8/24 8:00', '2009/8/24 9:00', '2009/8/24 10:00', '2009/8/24 11:00', '2009/8/24 12:00', '2009/8/24 13:00', '2009/8/24 14:00', '2009/8/24 15:00', '2009/8/24 16:00', '2009/8/24 17:00', '2009/8/24 18:00', '2009/8/24 19:00', '2009/8/24 20:00', '2009/8/24 21:00', '2009/8/24 22:00', '2009/8/24 23:00', '2009/8/25 0:00', '2009/8/25 1:00', '2009/8/25 2:00', '2009/8/25 3:00', '2009/8/25 4:00', '2009/8/25 5:00', '2009/8/25 6:00', '2009/8/25 7:00', '2009/8/25 8:00', '2009/8/25 9:00', '2009/8/25 10:00', '2009/8/25 11:00', '2009/8/25 12:00', '2009/8/25 13:00', '2009/8/25 14:00', '2009/8/25 15:00', '2009/8/25 16:00', '2009/8/25 17:00', '2009/8/25 18:00', '2009/8/25 19:00', '2009/8/25 20:00', '2009/8/25 21:00', '2009/8/25 22:00', '2009/8/25 23:00', '2009/8/26 0:00', '2009/8/26 1:00', '2009/8/26 2:00', '2009/8/26 3:00', '2009/8/26 4:00', '2009/8/26 5:00', '2009/8/26 6:00', '2009/8/26 7:00', '2009/8/26 8:00', '2009/8/26 9:00', '2009/8/26 10:00', '2009/8/26 11:00', '2009/8/26 12:00', '2009/8/26 13:00', '2009/8/26 14:00', '2009/8/26 15:00', '2009/8/26 16:00', '2009/8/26 17:00', '2009/8/26 18:00', '2009/8/26 19:00', '2009/8/26 20:00', '2009/8/26 21:00', '2009/8/26 22:00', '2009/8/26 23:00', '2009/8/27 0:00', '2009/8/27 1:00', '2009/8/27 2:00', '2009/8/27 3:00', '2009/8/27 4:00', '2009/8/27 5:00', '2009/8/27 6:00', '2009/8/27 7:00', '2009/8/27 8:00', '2009/8/27 9:00', '2009/8/27 10:00', '2009/8/27 11:00', '2009/8/27 12:00', '2009/8/27 13:00', '2009/8/27 14:00', '2009/8/27 15:00', '2009/8/27 16:00', '2009/8/27 17:00', '2009/8/27 18:00', '2009/8/27 19:00', '2009/8/27 20:00', '2009/8/27 21:00', '2009/8/27 22:00', '2009/8/27 23:00', '2009/8/28 0:00', '2009/8/28 1:00', '2009/8/28 2:00', '2009/8/28 3:00', '2009/8/28 4:00', '2009/8/28 5:00', '2009/8/28 6:00', '2009/8/28 7:00', '2009/8/28 8:00', '2009/8/28 9:00', '2009/8/28 10:00', '2009/8/28 11:00', '2009/8/28 12:00', '2009/8/28 13:00', '2009/8/28 14:00', '2009/8/28 15:00', '2009/8/28 16:00', '2009/8/28 17:00', '2009/8/28 18:00', '2009/8/28 19:00', '2009/8/28 20:00', '2009/8/28 21:00', '2009/8/28 22:00', '2009/8/28 23:00', '2009/8/29 0:00', '2009/8/29 1:00', '2009/8/29 2:00', '2009/8/29 3:00', '2009/8/29 4:00', '2009/8/29 5:00', '2009/8/29 6:00', '2009/8/29 7:00', '2009/8/29 8:00', '2009/8/29 9:00', '2009/8/29 10:00', '2009/8/29 11:00', '2009/8/29 12:00', '2009/8/29 13:00', '2009/8/29 14:00', '2009/8/29 15:00', '2009/8/29 16:00', '2009/8/29 17:00', '2009/8/29 18:00', '2009/8/29 19:00', '2009/8/29 20:00', '2009/8/29 21:00', '2009/8/29 22:00', '2009/8/29 23:00', '2009/8/30 0:00', '2009/8/30 1:00', '2009/8/30 2:00', '2009/8/30 3:00', '2009/8/30 4:00', '2009/8/30 5:00', '2009/8/30 6:00', '2009/8/30 7:00', '2009/8/30 8:00', '2009/8/30 9:00', '2009/8/30 10:00', '2009/8/30 11:00', '2009/8/30 12:00', '2009/8/30 13:00', '2009/8/30 14:00', '2009/8/30 15:00', '2009/8/30 16:00', '2009/8/30 17:00', '2009/8/30 18:00', '2009/8/30 19:00', '2009/8/30 20:00', '2009/8/30 21:00', '2009/8/30 22:00', '2009/8/30 23:00', '2009/8/31 0:00', '2009/8/31 1:00', '2009/8/31 2:00', '2009/8/31 3:00', '2009/8/31 4:00', '2009/8/31 5:00', '2009/8/31 6:00', '2009/8/31 7:00', '2009/8/31 8:00', '2009/8/31 9:00', '2009/8/31 10:00', '2009/8/31 11:00', '2009/8/31 12:00', '2009/8/31 13:00', '2009/8/31 14:00', '2009/8/31 15:00', '2009/8/31 16:00', '2009/8/31 17:00', '2009/8/31 18:00', '2009/8/31 19:00', '2009/8/31 20:00', '2009/8/31 21:00', '2009/8/31 22:00', '2009/8/31 23:00',
                '2009/9/1 0:00', '2009/9/1 1:00', '2009/9/1 2:00', '2009/9/1 3:00', '2009/9/1 4:00', '2009/9/1 5:00', '2009/9/1 6:00', '2009/9/1 7:00', '2009/9/1 8:00', '2009/9/1 9:00', '2009/9/1 10:00', '2009/9/1 11:00', '2009/9/1 12:00', '2009/9/1 13:00', '2009/9/1 14:00', '2009/9/1 15:00', '2009/9/1 16:00', '2009/9/1 17:00', '2009/9/1 18:00', '2009/9/1 19:00', '2009/9/1 20:00', '2009/9/1 21:00', '2009/9/1 22:00', '2009/9/1 23:00', '2009/9/2 0:00', '2009/9/2 1:00', '2009/9/2 2:00', '2009/9/2 3:00', '2009/9/2 4:00', '2009/9/2 5:00', '2009/9/2 6:00', '2009/9/2 7:00', '2009/9/2 8:00', '2009/9/2 9:00', '2009/9/2 10:00', '2009/9/2 11:00', '2009/9/2 12:00', '2009/9/2 13:00', '2009/9/2 14:00', '2009/9/2 15:00', '2009/9/2 16:00', '2009/9/2 17:00', '2009/9/2 18:00', '2009/9/2 19:00', '2009/9/2 20:00', '2009/9/2 21:00', '2009/9/2 22:00', '2009/9/2 23:00', '2009/9/3 0:00', '2009/9/3 1:00', '2009/9/3 2:00', '2009/9/3 3:00', '2009/9/3 4:00', '2009/9/3 5:00', '2009/9/3 6:00', '2009/9/3 7:00', '2009/9/3 8:00', '2009/9/3 9:00', '2009/9/3 10:00', '2009/9/3 11:00', '2009/9/3 12:00', '2009/9/3 13:00', '2009/9/3 14:00', '2009/9/3 15:00', '2009/9/3 16:00', '2009/9/3 17:00', '2009/9/3 18:00', '2009/9/3 19:00', '2009/9/3 20:00', '2009/9/3 21:00', '2009/9/3 22:00', '2009/9/3 23:00', '2009/9/4 0:00', '2009/9/4 1:00', '2009/9/4 2:00', '2009/9/4 3:00', '2009/9/4 4:00', '2009/9/4 5:00', '2009/9/4 6:00', '2009/9/4 7:00', '2009/9/4 8:00', '2009/9/4 9:00', '2009/9/4 10:00', '2009/9/4 11:00', '2009/9/4 12:00', '2009/9/4 13:00', '2009/9/4 14:00', '2009/9/4 15:00', '2009/9/4 16:00', '2009/9/4 17:00', '2009/9/4 18:00', '2009/9/4 19:00', '2009/9/4 20:00', '2009/9/4 21:00', '2009/9/4 22:00', '2009/9/4 23:00', '2009/9/5 0:00', '2009/9/5 1:00', '2009/9/5 2:00', '2009/9/5 3:00', '2009/9/5 4:00', '2009/9/5 5:00', '2009/9/5 6:00', '2009/9/5 7:00', '2009/9/5 8:00', '2009/9/5 9:00', '2009/9/5 10:00', '2009/9/5 11:00', '2009/9/5 12:00', '2009/9/5 13:00', '2009/9/5 14:00', '2009/9/5 15:00', '2009/9/5 16:00', '2009/9/5 17:00', '2009/9/5 18:00', '2009/9/5 19:00', '2009/9/5 20:00', '2009/9/5 21:00', '2009/9/5 22:00', '2009/9/5 23:00', '2009/9/6 0:00', '2009/9/6 1:00', '2009/9/6 2:00', '2009/9/6 3:00', '2009/9/6 4:00', '2009/9/6 5:00', '2009/9/6 6:00', '2009/9/6 7:00', '2009/9/6 8:00', '2009/9/6 9:00', '2009/9/6 10:00', '2009/9/6 11:00', '2009/9/6 12:00', '2009/9/6 13:00', '2009/9/6 14:00', '2009/9/6 15:00', '2009/9/6 16:00', '2009/9/6 17:00', '2009/9/6 18:00', '2009/9/6 19:00', '2009/9/6 20:00', '2009/9/6 21:00', '2009/9/6 22:00', '2009/9/6 23:00', '2009/9/7 0:00', '2009/9/7 1:00', '2009/9/7 2:00', '2009/9/7 3:00', '2009/9/7 4:00', '2009/9/7 5:00', '2009/9/7 6:00', '2009/9/7 7:00', '2009/9/7 8:00', '2009/9/7 9:00', '2009/9/7 10:00', '2009/9/7 11:00', '2009/9/7 12:00', '2009/9/7 13:00', '2009/9/7 14:00', '2009/9/7 15:00', '2009/9/7 16:00', '2009/9/7 17:00', '2009/9/7 18:00', '2009/9/7 19:00', '2009/9/7 20:00', '2009/9/7 21:00', '2009/9/7 22:00', '2009/9/7 23:00', '2009/9/8 0:00', '2009/9/8 1:00', '2009/9/8 2:00', '2009/9/8 3:00', '2009/9/8 4:00', '2009/9/8 5:00', '2009/9/8 6:00', '2009/9/8 7:00', '2009/9/8 8:00', '2009/9/8 9:00', '2009/9/8 10:00', '2009/9/8 11:00', '2009/9/8 12:00', '2009/9/8 13:00', '2009/9/8 14:00', '2009/9/8 15:00', '2009/9/8 16:00', '2009/9/8 17:00', '2009/9/8 18:00', '2009/9/8 19:00', '2009/9/8 20:00', '2009/9/8 21:00', '2009/9/8 22:00', '2009/9/8 23:00', '2009/9/9 0:00', '2009/9/9 1:00', '2009/9/9 2:00', '2009/9/9 3:00', '2009/9/9 4:00', '2009/9/9 5:00', '2009/9/9 6:00', '2009/9/9 7:00', '2009/9/9 8:00', '2009/9/9 9:00', '2009/9/9 10:00', '2009/9/9 11:00', '2009/9/9 12:00', '2009/9/9 13:00', '2009/9/9 14:00', '2009/9/9 15:00', '2009/9/9 16:00', '2009/9/9 17:00', '2009/9/9 18:00', '2009/9/9 19:00', '2009/9/9 20:00', '2009/9/9 21:00', '2009/9/9 22:00', '2009/9/9 23:00', '2009/9/10 0:00', '2009/9/10 1:00', '2009/9/10 2:00', '2009/9/10 3:00', '2009/9/10 4:00', '2009/9/10 5:00', '2009/9/10 6:00', '2009/9/10 7:00', '2009/9/10 8:00', '2009/9/10 9:00', '2009/9/10 10:00', '2009/9/10 11:00', '2009/9/10 12:00', '2009/9/10 13:00', '2009/9/10 14:00', '2009/9/10 15:00', '2009/9/10 16:00', '2009/9/10 17:00', '2009/9/10 18:00', '2009/9/10 19:00', '2009/9/10 20:00', '2009/9/10 21:00', '2009/9/10 22:00', '2009/9/10 23:00', '2009/9/11 0:00', '2009/9/11 1:00', '2009/9/11 2:00', '2009/9/11 3:00', '2009/9/11 4:00', '2009/9/11 5:00', '2009/9/11 6:00', '2009/9/11 7:00', '2009/9/11 8:00', '2009/9/11 9:00', '2009/9/11 10:00', '2009/9/11 11:00', '2009/9/11 12:00', '2009/9/11 13:00', '2009/9/11 14:00', '2009/9/11 15:00', '2009/9/11 16:00', '2009/9/11 17:00', '2009/9/11 18:00', '2009/9/11 19:00', '2009/9/11 20:00', '2009/9/11 21:00', '2009/9/11 22:00', '2009/9/11 23:00', '2009/9/12 0:00', '2009/9/12 1:00', '2009/9/12 2:00', '2009/9/12 3:00', '2009/9/12 4:00', '2009/9/12 5:00', '2009/9/12 6:00', '2009/9/12 7:00', '2009/9/12 8:00', '2009/9/12 9:00', '2009/9/12 10:00', '2009/9/12 11:00', '2009/9/12 12:00', '2009/9/12 13:00', '2009/9/12 14:00', '2009/9/12 15:00', '2009/9/12 16:00', '2009/9/12 17:00', '2009/9/12 18:00', '2009/9/12 19:00', '2009/9/12 20:00', '2009/9/12 21:00', '2009/9/12 22:00', '2009/9/12 23:00', '2009/9/13 0:00', '2009/9/13 1:00', '2009/9/13 2:00', '2009/9/13 3:00', '2009/9/13 4:00', '2009/9/13 5:00', '2009/9/13 6:00', '2009/9/13 7:00', '2009/9/13 8:00', '2009/9/13 9:00', '2009/9/13 10:00', '2009/9/13 11:00', '2009/9/13 12:00', '2009/9/13 13:00', '2009/9/13 14:00', '2009/9/13 15:00', '2009/9/13 16:00', '2009/9/13 17:00', '2009/9/13 18:00', '2009/9/13 19:00', '2009/9/13 20:00', '2009/9/13 21:00', '2009/9/13 22:00', '2009/9/13 23:00', '2009/9/14 0:00', '2009/9/14 1:00', '2009/9/14 2:00', '2009/9/14 3:00', '2009/9/14 4:00', '2009/9/14 5:00', '2009/9/14 6:00', '2009/9/14 7:00', '2009/9/14 8:00', '2009/9/14 9:00', '2009/9/14 10:00', '2009/9/14 11:00', '2009/9/14 12:00', '2009/9/14 13:00', '2009/9/14 14:00', '2009/9/14 15:00', '2009/9/14 16:00', '2009/9/14 17:00', '2009/9/14 18:00', '2009/9/14 19:00', '2009/9/14 20:00', '2009/9/14 21:00', '2009/9/14 22:00', '2009/9/14 23:00', '2009/9/15 0:00', '2009/9/15 1:00', '2009/9/15 2:00', '2009/9/15 3:00', '2009/9/15 4:00', '2009/9/15 5:00', '2009/9/15 6:00', '2009/9/15 7:00', '2009/9/15 8:00', '2009/9/15 9:00', '2009/9/15 10:00', '2009/9/15 11:00', '2009/9/15 12:00', '2009/9/15 13:00', '2009/9/15 14:00', '2009/9/15 15:00', '2009/9/15 16:00', '2009/9/15 17:00', '2009/9/15 18:00', '2009/9/15 19:00', '2009/9/15 20:00', '2009/9/15 21:00', '2009/9/15 22:00', '2009/9/15 23:00', '2009/9/16 0:00', '2009/9/16 1:00', '2009/9/16 2:00', '2009/9/16 3:00', '2009/9/16 4:00', '2009/9/16 5:00', '2009/9/16 6:00', '2009/9/16 7:00', '2009/9/16 8:00', '2009/9/16 9:00', '2009/9/16 10:00', '2009/9/16 11:00', '2009/9/16 12:00', '2009/9/16 13:00', '2009/9/16 14:00', '2009/9/16 15:00', '2009/9/16 16:00', '2009/9/16 17:00', '2009/9/16 18:00', '2009/9/16 19:00', '2009/9/16 20:00', '2009/9/16 21:00', '2009/9/16 22:00', '2009/9/16 23:00', '2009/9/17 0:00', '2009/9/17 1:00', '2009/9/17 2:00', '2009/9/17 3:00', '2009/9/17 4:00', '2009/9/17 5:00', '2009/9/17 6:00', '2009/9/17 7:00', '2009/9/17 8:00', '2009/9/17 9:00', '2009/9/17 10:00', '2009/9/17 11:00', '2009/9/17 12:00', '2009/9/17 13:00', '2009/9/17 14:00', '2009/9/17 15:00', '2009/9/17 16:00', '2009/9/17 17:00', '2009/9/17 18:00', '2009/9/17 19:00', '2009/9/17 20:00', '2009/9/17 21:00', '2009/9/17 22:00', '2009/9/17 23:00', '2009/9/18 0:00', '2009/9/18 1:00', '2009/9/18 2:00', '2009/9/18 3:00', '2009/9/18 4:00', '2009/9/18 5:00', '2009/9/18 6:00', '2009/9/18 7:00', '2009/9/18 8:00', '2009/9/18 9:00', '2009/9/18 10:00', '2009/9/18 11:00', '2009/9/18 12:00', '2009/9/18 13:00', '2009/9/18 14:00', '2009/9/18 15:00', '2009/9/18 16:00', '2009/9/18 17:00', '2009/9/18 18:00', '2009/9/18 19:00', '2009/9/18 20:00', '2009/9/18 21:00', '2009/9/18 22:00', '2009/9/18 23:00', '2009/9/19 0:00', '2009/9/19 1:00', '2009/9/19 2:00', '2009/9/19 3:00', '2009/9/19 4:00', '2009/9/19 5:00', '2009/9/19 6:00', '2009/9/19 7:00', '2009/9/19 8:00', '2009/9/19 9:00', '2009/9/19 10:00', '2009/9/19 11:00', '2009/9/19 12:00', '2009/9/19 13:00', '2009/9/19 14:00', '2009/9/19 15:00', '2009/9/19 16:00', '2009/9/19 17:00', '2009/9/19 18:00', '2009/9/19 19:00', '2009/9/19 20:00', '2009/9/19 21:00', '2009/9/19 22:00', '2009/9/19 23:00', '2009/9/20 0:00', '2009/9/20 1:00', '2009/9/20 2:00', '2009/9/20 3:00', '2009/9/20 4:00', '2009/9/20 5:00', '2009/9/20 6:00', '2009/9/20 7:00', '2009/9/20 8:00', '2009/9/20 9:00', '2009/9/20 10:00', '2009/9/20 11:00', '2009/9/20 12:00', '2009/9/20 13:00', '2009/9/20 14:00', '2009/9/20 15:00', '2009/9/20 16:00', '2009/9/20 17:00', '2009/9/20 18:00', '2009/9/20 19:00', '2009/9/20 20:00', '2009/9/20 21:00', '2009/9/20 22:00', '2009/9/20 23:00', '2009/9/21 0:00', '2009/9/21 1:00', '2009/9/21 2:00', '2009/9/21 3:00', '2009/9/21 4:00', '2009/9/21 5:00', '2009/9/21 6:00', '2009/9/21 7:00', '2009/9/21 8:00', '2009/9/21 9:00', '2009/9/21 10:00', '2009/9/21 11:00', '2009/9/21 12:00', '2009/9/21 13:00', '2009/9/21 14:00', '2009/9/21 15:00', '2009/9/21 16:00', '2009/9/21 17:00', '2009/9/21 18:00', '2009/9/21 19:00', '2009/9/21 20:00', '2009/9/21 21:00', '2009/9/21 22:00', '2009/9/21 23:00', '2009/9/22 0:00', '2009/9/22 1:00', '2009/9/22 2:00', '2009/9/22 3:00', '2009/9/22 4:00', '2009/9/22 5:00', '2009/9/22 6:00', '2009/9/22 7:00', '2009/9/22 8:00', '2009/9/22 9:00', '2009/9/22 10:00', '2009/9/22 11:00', '2009/9/22 12:00', '2009/9/22 13:00', '2009/9/22 14:00', '2009/9/22 15:00', '2009/9/22 16:00', '2009/9/22 17:00', '2009/9/22 18:00', '2009/9/22 19:00', '2009/9/22 20:00', '2009/9/22 21:00', '2009/9/22 22:00', '2009/9/22 23:00', '2009/9/23 0:00', '2009/9/23 1:00', '2009/9/23 2:00', '2009/9/23 3:00', '2009/9/23 4:00', '2009/9/23 5:00', '2009/9/23 6:00', '2009/9/23 7:00', '2009/9/23 8:00', '2009/9/23 9:00', '2009/9/23 10:00', '2009/9/23 11:00', '2009/9/23 12:00', '2009/9/23 13:00', '2009/9/23 14:00', '2009/9/23 15:00', '2009/9/23 16:00', '2009/9/23 17:00', '2009/9/23 18:00', '2009/9/23 19:00', '2009/9/23 20:00', '2009/9/23 21:00', '2009/9/23 22:00', '2009/9/23 23:00', '2009/9/24 0:00', '2009/9/24 1:00', '2009/9/24 2:00', '2009/9/24 3:00', '2009/9/24 4:00', '2009/9/24 5:00', '2009/9/24 6:00', '2009/9/24 7:00', '2009/9/24 8:00', '2009/9/24 9:00', '2009/9/24 10:00', '2009/9/24 11:00', '2009/9/24 12:00', '2009/9/24 13:00', '2009/9/24 14:00', '2009/9/24 15:00', '2009/9/24 16:00', '2009/9/24 17:00', '2009/9/24 18:00', '2009/9/24 19:00', '2009/9/24 20:00', '2009/9/24 21:00', '2009/9/24 22:00', '2009/9/24 23:00', '2009/9/25 0:00', '2009/9/25 1:00', '2009/9/25 2:00', '2009/9/25 3:00', '2009/9/25 4:00', '2009/9/25 5:00', '2009/9/25 6:00', '2009/9/25 7:00', '2009/9/25 8:00', '2009/9/25 9:00', '2009/9/25 10:00', '2009/9/25 11:00', '2009/9/25 12:00', '2009/9/25 13:00', '2009/9/25 14:00', '2009/9/25 15:00', '2009/9/25 16:00', '2009/9/25 17:00', '2009/9/25 18:00', '2009/9/25 19:00', '2009/9/25 20:00', '2009/9/25 21:00', '2009/9/25 22:00', '2009/9/25 23:00', '2009/9/26 0:00', '2009/9/26 1:00', '2009/9/26 2:00', '2009/9/26 3:00', '2009/9/26 4:00', '2009/9/26 5:00', '2009/9/26 6:00', '2009/9/26 7:00', '2009/9/26 8:00', '2009/9/26 9:00', '2009/9/26 10:00', '2009/9/26 11:00', '2009/9/26 12:00', '2009/9/26 13:00', '2009/9/26 14:00', '2009/9/26 15:00', '2009/9/26 16:00', '2009/9/26 17:00', '2009/9/26 18:00', '2009/9/26 19:00', '2009/9/26 20:00', '2009/9/26 21:00', '2009/9/26 22:00', '2009/9/26 23:00', '2009/9/27 0:00', '2009/9/27 1:00', '2009/9/27 2:00', '2009/9/27 3:00', '2009/9/27 4:00', '2009/9/27 5:00', '2009/9/27 6:00', '2009/9/27 7:00', '2009/9/27 8:00', '2009/9/27 9:00', '2009/9/27 10:00', '2009/9/27 11:00', '2009/9/27 12:00', '2009/9/27 13:00', '2009/9/27 14:00', '2009/9/27 15:00', '2009/9/27 16:00', '2009/9/27 17:00', '2009/9/27 18:00', '2009/9/27 19:00', '2009/9/27 20:00', '2009/9/27 21:00', '2009/9/27 22:00', '2009/9/27 23:00', '2009/9/28 0:00', '2009/9/28 1:00', '2009/9/28 2:00', '2009/9/28 3:00', '2009/9/28 4:00', '2009/9/28 5:00', '2009/9/28 6:00', '2009/9/28 7:00', '2009/9/28 8:00', '2009/9/28 9:00', '2009/9/28 10:00', '2009/9/28 11:00', '2009/9/28 12:00', '2009/9/28 13:00', '2009/9/28 14:00', '2009/9/28 15:00', '2009/9/28 16:00', '2009/9/28 17:00', '2009/9/28 18:00', '2009/9/28 19:00', '2009/9/28 20:00', '2009/9/28 21:00', '2009/9/28 22:00', '2009/9/28 23:00', '2009/9/29 0:00', '2009/9/29 1:00', '2009/9/29 2:00', '2009/9/29 3:00', '2009/9/29 4:00', '2009/9/29 5:00', '2009/9/29 6:00', '2009/9/29 7:00', '2009/9/29 8:00', '2009/9/29 9:00', '2009/9/29 10:00', '2009/9/29 11:00', '2009/9/29 12:00', '2009/9/29 13:00', '2009/9/29 14:00', '2009/9/29 15:00', '2009/9/29 16:00', '2009/9/29 17:00', '2009/9/29 18:00', '2009/9/29 19:00', '2009/9/29 20:00', '2009/9/29 21:00', '2009/9/29 22:00', '2009/9/29 23:00', '2009/9/30 0:00', '2009/9/30 1:00', '2009/9/30 2:00', '2009/9/30 3:00', '2009/9/30 4:00', '2009/9/30 5:00', '2009/9/30 6:00', '2009/9/30 7:00', '2009/9/30 8:00', '2009/9/30 9:00', '2009/9/30 10:00', '2009/9/30 11:00', '2009/9/30 12:00', '2009/9/30 13:00', '2009/9/30 14:00', '2009/9/30 15:00', '2009/9/30 16:00', '2009/9/30 17:00', '2009/9/30 18:00', '2009/9/30 19:00', '2009/9/30 20:00', '2009/9/30 21:00', '2009/9/30 22:00', '2009/9/30 23:00',
                '2009/10/1 0:00', '2009/10/1 1:00', '2009/10/1 2:00', '2009/10/1 3:00', '2009/10/1 4:00', '2009/10/1 5:00', '2009/10/1 6:00', '2009/10/1 7:00', '2009/10/1 8:00', '2009/10/1 9:00', '2009/10/1 10:00', '2009/10/1 11:00', '2009/10/1 12:00', '2009/10/1 13:00', '2009/10/1 14:00', '2009/10/1 15:00', '2009/10/1 16:00', '2009/10/1 17:00', '2009/10/1 18:00', '2009/10/1 19:00', '2009/10/1 20:00', '2009/10/1 21:00', '2009/10/1 22:00', '2009/10/1 23:00', '2009/10/2 0:00', '2009/10/2 1:00', '2009/10/2 2:00', '2009/10/2 3:00', '2009/10/2 4:00', '2009/10/2 5:00', '2009/10/2 6:00', '2009/10/2 7:00', '2009/10/2 8:00', '2009/10/2 9:00', '2009/10/2 10:00', '2009/10/2 11:00', '2009/10/2 12:00', '2009/10/2 13:00', '2009/10/2 14:00', '2009/10/2 15:00', '2009/10/2 16:00', '2009/10/2 17:00', '2009/10/2 18:00', '2009/10/2 19:00', '2009/10/2 20:00', '2009/10/2 21:00', '2009/10/2 22:00', '2009/10/2 23:00', '2009/10/3 0:00', '2009/10/3 1:00', '2009/10/3 2:00', '2009/10/3 3:00', '2009/10/3 4:00', '2009/10/3 5:00', '2009/10/3 6:00', '2009/10/3 7:00', '2009/10/3 8:00', '2009/10/3 9:00', '2009/10/3 10:00', '2009/10/3 11:00', '2009/10/3 12:00', '2009/10/3 13:00', '2009/10/3 14:00', '2009/10/3 15:00', '2009/10/3 16:00', '2009/10/3 17:00', '2009/10/3 18:00', '2009/10/3 19:00', '2009/10/3 20:00', '2009/10/3 21:00', '2009/10/3 22:00', '2009/10/3 23:00', '2009/10/4 0:00', '2009/10/4 1:00', '2009/10/4 2:00', '2009/10/4 3:00', '2009/10/4 4:00', '2009/10/4 5:00', '2009/10/4 6:00', '2009/10/4 7:00', '2009/10/4 8:00', '2009/10/4 9:00', '2009/10/4 10:00', '2009/10/4 11:00', '2009/10/4 12:00', '2009/10/4 13:00', '2009/10/4 14:00', '2009/10/4 15:00', '2009/10/4 16:00', '2009/10/4 17:00', '2009/10/4 18:00', '2009/10/4 19:00', '2009/10/4 20:00', '2009/10/4 21:00', '2009/10/4 22:00', '2009/10/4 23:00', '2009/10/5 0:00', '2009/10/5 1:00', '2009/10/5 2:00', '2009/10/5 3:00', '2009/10/5 4:00', '2009/10/5 5:00', '2009/10/5 6:00', '2009/10/5 7:00', '2009/10/5 8:00', '2009/10/5 9:00', '2009/10/5 10:00', '2009/10/5 11:00', '2009/10/5 12:00', '2009/10/5 13:00', '2009/10/5 14:00', '2009/10/5 15:00', '2009/10/5 16:00', '2009/10/5 17:00', '2009/10/5 18:00', '2009/10/5 19:00', '2009/10/5 20:00', '2009/10/5 21:00', '2009/10/5 22:00', '2009/10/5 23:00', '2009/10/6 0:00', '2009/10/6 1:00', '2009/10/6 2:00', '2009/10/6 3:00', '2009/10/6 4:00', '2009/10/6 5:00', '2009/10/6 6:00', '2009/10/6 7:00', '2009/10/6 8:00', '2009/10/6 9:00', '2009/10/6 10:00', '2009/10/6 11:00', '2009/10/6 12:00', '2009/10/6 13:00', '2009/10/6 14:00', '2009/10/6 15:00', '2009/10/6 16:00', '2009/10/6 17:00', '2009/10/6 18:00', '2009/10/6 19:00', '2009/10/6 20:00', '2009/10/6 21:00', '2009/10/6 22:00', '2009/10/6 23:00', '2009/10/7 0:00', '2009/10/7 1:00', '2009/10/7 2:00', '2009/10/7 3:00', '2009/10/7 4:00', '2009/10/7 5:00', '2009/10/7 6:00', '2009/10/7 7:00', '2009/10/7 8:00', '2009/10/7 9:00', '2009/10/7 10:00', '2009/10/7 11:00', '2009/10/7 12:00', '2009/10/7 13:00', '2009/10/7 14:00', '2009/10/7 15:00', '2009/10/7 16:00', '2009/10/7 17:00', '2009/10/7 18:00', '2009/10/7 19:00', '2009/10/7 20:00', '2009/10/7 21:00', '2009/10/7 22:00', '2009/10/7 23:00', '2009/10/8 0:00', '2009/10/8 1:00', '2009/10/8 2:00', '2009/10/8 3:00', '2009/10/8 4:00', '2009/10/8 5:00', '2009/10/8 6:00', '2009/10/8 7:00', '2009/10/8 8:00', '2009/10/8 9:00', '2009/10/8 10:00', '2009/10/8 11:00', '2009/10/8 12:00', '2009/10/8 13:00', '2009/10/8 14:00', '2009/10/8 15:00', '2009/10/8 16:00', '2009/10/8 17:00', '2009/10/8 18:00', '2009/10/8 19:00', '2009/10/8 20:00', '2009/10/8 21:00', '2009/10/8 22:00', '2009/10/8 23:00', '2009/10/9 0:00', '2009/10/9 1:00', '2009/10/9 2:00', '2009/10/9 3:00', '2009/10/9 4:00', '2009/10/9 5:00', '2009/10/9 6:00', '2009/10/9 7:00', '2009/10/9 8:00', '2009/10/9 9:00', '2009/10/9 10:00', '2009/10/9 11:00', '2009/10/9 12:00', '2009/10/9 13:00', '2009/10/9 14:00', '2009/10/9 15:00', '2009/10/9 16:00', '2009/10/9 17:00', '2009/10/9 18:00', '2009/10/9 19:00', '2009/10/9 20:00', '2009/10/9 21:00', '2009/10/9 22:00', '2009/10/9 23:00', '2009/10/10 0:00', '2009/10/10 1:00', '2009/10/10 2:00', '2009/10/10 3:00', '2009/10/10 4:00', '2009/10/10 5:00', '2009/10/10 6:00', '2009/10/10 7:00', '2009/10/10 8:00', '2009/10/10 9:00', '2009/10/10 10:00', '2009/10/10 11:00', '2009/10/10 12:00', '2009/10/10 13:00', '2009/10/10 14:00', '2009/10/10 15:00', '2009/10/10 16:00', '2009/10/10 17:00', '2009/10/10 18:00', '2009/10/10 19:00', '2009/10/10 20:00', '2009/10/10 21:00', '2009/10/10 22:00', '2009/10/10 23:00', '2009/10/11 0:00', '2009/10/11 1:00', '2009/10/11 2:00', '2009/10/11 3:00', '2009/10/11 4:00', '2009/10/11 5:00', '2009/10/11 6:00', '2009/10/11 7:00', '2009/10/11 8:00', '2009/10/11 9:00', '2009/10/11 10:00', '2009/10/11 11:00', '2009/10/11 12:00', '2009/10/11 13:00', '2009/10/11 14:00', '2009/10/11 15:00', '2009/10/11 16:00', '2009/10/11 17:00', '2009/10/11 18:00', '2009/10/11 19:00', '2009/10/11 20:00', '2009/10/11 21:00', '2009/10/11 22:00', '2009/10/11 23:00', '2009/10/12 0:00', '2009/10/12 1:00', '2009/10/12 2:00', '2009/10/12 3:00', '2009/10/12 4:00', '2009/10/12 5:00', '2009/10/12 6:00', '2009/10/12 7:00', '2009/10/12 8:00', '2009/10/12 9:00', '2009/10/12 10:00', '2009/10/12 11:00', '2009/10/12 12:00', '2009/10/12 13:00', '2009/10/12 14:00', '2009/10/12 15:00', '2009/10/12 16:00', '2009/10/12 17:00', '2009/10/12 18:00', '2009/10/12 19:00', '2009/10/12 20:00', '2009/10/12 21:00', '2009/10/12 22:00', '2009/10/12 23:00', '2009/10/13 0:00', '2009/10/13 1:00', '2009/10/13 2:00', '2009/10/13 3:00', '2009/10/13 4:00', '2009/10/13 5:00', '2009/10/13 6:00', '2009/10/13 7:00', '2009/10/13 8:00', '2009/10/13 9:00', '2009/10/13 10:00', '2009/10/13 11:00', '2009/10/13 12:00', '2009/10/13 13:00', '2009/10/13 14:00', '2009/10/13 15:00', '2009/10/13 16:00', '2009/10/13 17:00', '2009/10/13 18:00', '2009/10/13 19:00', '2009/10/13 20:00', '2009/10/13 21:00', '2009/10/13 22:00', '2009/10/13 23:00', '2009/10/14 0:00', '2009/10/14 1:00', '2009/10/14 2:00', '2009/10/14 3:00', '2009/10/14 4:00', '2009/10/14 5:00', '2009/10/14 6:00', '2009/10/14 7:00', '2009/10/14 8:00', '2009/10/14 9:00', '2009/10/14 10:00', '2009/10/14 11:00', '2009/10/14 12:00', '2009/10/14 13:00', '2009/10/14 14:00', '2009/10/14 15:00', '2009/10/14 16:00', '2009/10/14 17:00', '2009/10/14 18:00', '2009/10/14 19:00', '2009/10/14 20:00', '2009/10/14 21:00', '2009/10/14 22:00', '2009/10/14 23:00', '2009/10/15 0:00', '2009/10/15 1:00', '2009/10/15 2:00', '2009/10/15 3:00', '2009/10/15 4:00', '2009/10/15 5:00', '2009/10/15 6:00', '2009/10/15 7:00', '2009/10/15 8:00', '2009/10/15 9:00', '2009/10/15 10:00', '2009/10/15 11:00', '2009/10/15 12:00', '2009/10/15 13:00', '2009/10/15 14:00', '2009/10/15 15:00', '2009/10/15 16:00', '2009/10/15 17:00', '2009/10/15 18:00', '2009/10/15 19:00', '2009/10/15 20:00', '2009/10/15 21:00', '2009/10/15 22:00', '2009/10/15 23:00', '2009/10/16 0:00', '2009/10/16 1:00', '2009/10/16 2:00', '2009/10/16 3:00', '2009/10/16 4:00', '2009/10/16 5:00', '2009/10/16 6:00', '2009/10/16 7:00', '2009/10/16 8:00', '2009/10/16 9:00', '2009/10/16 10:00', '2009/10/16 11:00', '2009/10/16 12:00', '2009/10/16 13:00', '2009/10/16 14:00', '2009/10/16 15:00', '2009/10/16 16:00', '2009/10/16 17:00', '2009/10/16 18:00', '2009/10/16 19:00', '2009/10/16 20:00', '2009/10/16 21:00', '2009/10/16 22:00', '2009/10/16 23:00', '2009/10/17 0:00', '2009/10/17 1:00', '2009/10/17 2:00', '2009/10/17 3:00', '2009/10/17 4:00', '2009/10/17 5:00', '2009/10/17 6:00', '2009/10/17 7:00', '2009/10/17 8:00', '2009/10/17 9:00', '2009/10/17 10:00', '2009/10/17 11:00', '2009/10/17 12:00', '2009/10/17 13:00', '2009/10/17 14:00', '2009/10/17 15:00', '2009/10/17 16:00', '2009/10/17 17:00', '2009/10/17 18:00', '2009/10/17 19:00', '2009/10/17 20:00', '2009/10/17 21:00', '2009/10/17 22:00', '2009/10/17 23:00', '2009/10/18 0:00', '2009/10/18 1:00', '2009/10/18 2:00', '2009/10/18 3:00', '2009/10/18 4:00', '2009/10/18 5:00', '2009/10/18 6:00', '2009/10/18 7:00', '2009/10/18 8:00'
            ].map(function (str) {
                return str.replace(' ', '\n')
            })
        }
    ],
    yAxis: [
        {
            name: '(m^3/s)',
            type: 'value',
            max: 500,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
        },
        {
            name: '(mm)',
            nameLocation: 'start',
            max: 5,
            type: 'value',
            inverse: true,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
        }
    ],
    series: [
        {
            name:'1',
            type:'line',
            animation: false,
            areaStyle: {
                normal: {}
            },
            lineStyle: {
                normal: {
                    width: 1
                }
            },
            markArea: {
                silent: true,
                data: [[{
                    xAxis: '2009/9/12\n7:00'
                }, {
                    xAxis: '2009/9/22\n7:00'
                }]]
            },
            data:[
                0.97,0.96,0.96,0.95,0.95,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.87,0.88,0.9,0.93,0.96,0.99,1.03,1.06,1.1,1.14,1.17,1.2,1.23,1.26,1.29,1.33,1.36,1.4,1.43,1.45,1.48,1.49,1.51,1.51,1.5,1.49,1.47,1.44,1.41,1.37,1.34,1.3,1.27,1.24,1.22,1.2,1.19,1.18,1.16,1.15,1.14,1.13,1.12,1.11,1.11,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.09,1.09,1.08,1.07,1.06,1.05,1.04,1.03,1.03,1.02,1.01,1.01,1,0.99,0.98,0.97,0.96,0.96,0.95,0.95,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.85,0.84,0.83,0.82,0.81,0.8,0.8,0.79,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.77,0.75,0.73,0.71,0.68,0.65,0.63,0.61,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.57,0.57,0.57,0.56,0.55,0.55,0.54,0.54,0.53,0.52,0.52,0.51,0.51,0.5,0.5,0.49,0.48,0.48,0.47,0.47,0.47,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.52,0.67,0.9,1.19,1.52,1.87,2.22,2.55,2.84,3.07,3.22,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.24,3.13,2.97,2.77,2.54,2.3,2.05,1.82,1.62,1.46,1.35,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.3,1.26,1.21,1.14,1.06,0.97,0.89,0.81,0.74,0.69,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.63,0.63,0.62,0.62,0.61,0.6,0.59,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.59,0.61,0.63,0.65,0.68,0.71,0.73,0.75,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.77,0.75,0.73,0.71,0.68,0.65,0.63,0.61,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.59,0.59,0.6,0.61,0.62,0.62,0.63,0.63,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.66,0.68,0.69,0.71,0.73,0.74,0.76,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.79,0.81,0.82,0.84,0.86,0.88,0.9,0.92,0.93,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.85,0.84,0.82,0.8,0.78,0.76,0.75,0.73,0.72,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.72,0.73,0.74,0.76,0.78,0.79,0.82,0.84,0.86,0.89,0.91,0.94,0.97,1,1.02,1.05,1.08,1.11,1.14,1.17,1.19,1.22,1.25,1.27,1.29,1.31,1.33,1.35,1.36,1.38,1.39,1.39,1.4,1.4,1.4,1.39,1.37,1.35,1.32,1.29,1.26,1.22,1.18,1.14,1.1,1.05,1.01,0.97,0.93,0.89,0.85,0.82,0.78,0.76,0.74,0.72,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.72,0.73,0.74,0.75,0.77,0.78,0.8,0.82,0.84,0.87,0.89,0.92,0.94,0.97,0.99,1.02,1.05,1.08,1.1,1.13,1.16,1.18,1.21,1.23,1.26,1.28,1.3,1.32,1.34,1.35,1.37,1.38,1.39,1.4,1.41,1.41,1.42,1.42,1.43,1.43,1.43,1.44,1.44,1.44,1.44,1.45,1.45,1.45,1.46,1.46,1.46,1.47,1.47,1.48,1.48,1.49,1.5,1.51,1.54,1.62,1.73,1.88,2.05,2.24,2.45,2.67,2.89,3.11,3.31,3.51,3.69,3.86,4.03,4.18,4.33,4.48,4.62,4.76,4.89,5.02,5.16,5.29,5.43,5.57,5.71,5.86,6.02,6.18,6.36,6.54,6.73,6.93,7.15,7.38,7.62,7.88,8.16,8.46,8.77,9.11,9.46,9.84,10.24,10.67,11.12,11.6,12.3,13.66,16,38.43,82.21,146.6,218.7,226,225.23,223.08,219.78,212,199.82,184.6,168,151.65,137.21,126.31,119.94,115.52,112.06,108.92,105.44,101,94.56,86.36,77.67,69.76,63.9,60.38,57.41,54.84,52.57,50.56,48.71,46.97,45.25,43.48,41.6,39.5,37.19,34.81,32.46,30.27,28.36,26.85,25.86,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.27,24.65,23.7,22.52,21.17,19.75,18.33,16.98,15.8,14.85,14.23,14,14.02,14.08,14.17,14.29,14.44,14.61,14.8,15.01,15.23,15.47,15.71,15.95,16.19,16.43,16.67,16.89,17.1,17.29,17.46,17.61,17.73,17.82,17.88,17.9,17.63,16.88,15.75,14.33,12.71,10.98,9.23,7.56,6.05,4.81,3.92,3.47,3.28,3.1,2.93,2.76,2.61,2.46,2.32,2.19,2.07,1.96,1.85,1.75,1.66,1.58,1.51,1.44,1.39,1.34,1.29,1.26,1.23,1.22,1.2,1.2,1.2,1.2,1.2,1.2,1.21,1.21,1.21,1.21,1.22,1.22,1.22,1.23,1.23,1.23,1.24,1.24,1.25,1.25,1.25,1.26,1.26,1.27,1.27,1.27,1.28,1.28,1.28,1.29,1.29,1.29,1.29,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.29,1.29,1.29,1.29,1.28,1.28,1.28,1.27,1.27,1.26,1.25,1.25,1.24,1.23,1.23,1.22,1.21,1.2,1.16,1.06,0.95,0.83,0.74,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.69,0.69,0.69,0.69,0.69,0.69,0.69,0.69,0.68,0.68,0.68,0.68,0.68,0.68,0.67,0.67,0.67,0.67,0.67,0.67,0.67,0.66,0.66,0.66,0.66,0.66,0.66,0.66,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.66,0.68,0.69,0.71,0.73,0.74,0.76,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.8,0.86,0.95,1.08,1.25,1.46,1.7,1.97,2.28,2.63,3.01,3.42,3.87,4.35,4.86,5.4,5.98,6.59,7.92,10.49,14.04,18.31,23.04,27.98,32.87,37.45,41.46,44.64,46.74,47.5,46.86,45.16,42.77,40.04,37.33,35,32.74,30.21,27.7,25.5,23.9,23.2,23.06,22.94,22.84,22.77,22.72,22.7,22.8,23.23,23.95,24.91,26.04,27.3,28.76,30.7,33.39,37.12,42.15,48.77,65.22,252.1,257,237.32,221.19,212,208.67,206.89,205.2,202.15,189.82,172,165.3,160.49,156.8,153.44,149.62,144.6,138.27,131,123.11,114.9,106.69,98.79,91.5,85.13,80,75.53,71.03,66.65,62.54,58.85,55.73,53.31,51.75,51.2,56.53,68.25,80,91.01,102.03,109,112.37,115.29,117.68,119.48,120.61,121,119.45,115.57,110.52,105.47,101.58,100,99.97,99.94,99.92,99.9,99.88,99.86,99.85,99.84,99.83,99.82,99.81,99.81,99.8,99.8,99.8,122.15,163.65,186,182.96,175.15,164.56,153.18,143,136,131.37,126.98,122.81,118.85,115.09,111.52,108.13,104.9,101.83,98.9,96.11,93.44,90.87,88.41,86.04,83.74,81.51,79.33,77.2,75.1,73.02,70.95,68.88,66.8,64.87,63.14,61.4,59.53,57.67,56,54.6,53.36,52.2,51.05,49.85,48.5,46.87,44.92,42.74,40.42,38.04,35.69,33.46,31.44,29.72,28.38,27.51,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.14,26.97,26.7,26.35,25.95,25.49,25.02,24.53,24.04,23.58,23.16,22.8,22.46,22.11,21.75,21.39,21.03,20.69,20.36,20.05,19.78,19.54,19.35,19.2,19.09,19,18.92,18.85,18.79,18.74,18.68,18.62,18.56,18.49,18.4,18.3,18.17,18.02,17.83,17.63,17.41,17.18,16.93,16.68,16.43,16.18,15.93,15.7,15.47,15.22,14.97,14.71,14.45,14.18,13.93,13.68,13.44,13.21,13,12.8,12.62,12.46,12.31,12.16,12.03,11.89,11.76,11.62,11.48,11.33,11.17,11,10.81,10.59,10.36,10.12,9.86,9.61,9.36,9.12,8.89,8.68,8.5,8.35,8.21,8.08,7.94,7.81,7.68,7.56,7.46,7.36,7.29,7.23,7.19,7.18,7.51,8.42,9.81,11.58,13.63,15.86,18.16,20.44,22.58,24.49,26.06,27.2,28.08,28.95,29.81,30.65,31.48,32.28,33.07,33.82,34.55,35.25,35.92,36.56,37.15,37.71,38.23,38.7,39.13,39.5,39.83,40.1,40.31,40.47,40.57,40.6,40.49,40.16,39.64,38.94,38.09,37.1,36,34.79,33.51,32.17,30.79,29.39,27.99,26.6,25.25,23.96,22.75,21.63,20.63,19.76,19.04,18.49,18.14,18,17.97,17.95,17.94,17.92,17.91,17.9,17.89,17.88,17.87,17.85,17.83,17.8,17.7,17.46,17.13,16.7,16.21,15.68,15.13,14.57,14.04,13.56,13.14,12.8,12.52,12.27,12.02,11.79,11.57,11.37,11.16,10.97,10.78,10.59,10.39,10.2,10.01,9.81,9.63,9.44,9.26,9.08,8.9,8.73,8.56,8.39,8.22,8.06,7.9,7.73,7.57,7.41,7.25,7.09,6.94,6.79,6.65,6.52,6.4,6.28,6.17,6.08,5.98,5.9,5.81,5.73,5.65,5.57,5.49,5.41,5.32,5.23,5.14,5.04,4.94,4.84,4.74,4.63,4.53,4.43,4.33,4.23,4.13,4.03,3.93,3.81,3.69,3.57,3.45,3.33,3.22,3.12,3.04,2.98,2.93,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.9,2.86,2.8,2.71,2.62,2.52,2.42,2.33,2.24,2.18,2.14,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.1,2.06,2,1.91,1.82,1.71,1.61,1.5,1.4,1.32,1.25,1.2,1.16,1.13,1.1,1.06,1.03,1,0.97,0.93,0.9,0.87,0.85,0.82,0.79,0.77,0.74,0.72,0.69,0.67,0.65,0.63,0.61,0.59,0.58,0.56,0.54,0.53,0.52,0.51,0.5,0.49,0.48,0.48,0.47,0.47,0.46,0.46,0.47,0.48,0.5,0.53,0.56,0.59,0.62,0.64,0.67,0.69,0.7,0.71,0.71,0.71,0.71,0.7,0.7,0.7,0.69,0.69,0.69,0.68,0.68,0.67,0.67,0.67,0.66,0.66,0.65,0.65,0.65,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.65,0.65,0.66,0.66,0.67,0.68,0.69,0.69,0.7,0.71,0.73,0.74,0.75,0.76,0.78,0.8,0.81,0.83,0.85,0.87,0.89,0.92,0.94,0.97,0.99,1.02,1.05,1.08,1.11,1.15,1.18,1.32,1.66,2.21,2.97,3.94,5.11,6.5,8.1,9.9,11.92,14.15,16.6,22.3,22.8,24.48,30.38,35.74,42.4,57.14,94.04,112.9,123.4,130.4,130,119.4,120.7,116.8,118.1,119.4,124.8,143.5,204,294,319.2,328.4,365,350.8,347.6,347.6,325,331.6,319.2,308,308,308,308,296.8,300,281,278.4,270.6,271,253.6,233.5,219.2,207.8,205.9,204,189.6,178.8,173.4,160,154.4,146,145,140.5,130.4,126.2,116.8,112.9,106.5,101.6,98.51,82.67,67.3,80.05,76.12,72.3,71.02,69.78,67.3,67.3,68.54,57.6,71.02,66.06,59.12,57.14,55.16,55.16,52.19,52.19,51.2,48.56,44.16,43,45.92,49.44,44.16,36.48,35.74,35,32.36,37.22,32.36,32.36,32.36,33.68,32.36,31.7,35.74,29.72,32.36,30.38,29.72,28.4,28.4,28.4,27.28,25.6,25.04,23.92,22.3,21.8,21.8,21.8,22.8,21.8,25.6,22.8,22.8,17.8,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,15.02,14,14.03,14.11,14.25,14.45,14.72,15.06,15.46,15.95,16.51,17.15,17.87,18.69,19.59,20.59,21.69,22.88,24.18,25.59,27.1,28.73,30.48,32.34,34.33,36.44,38.69,41.06,43.57,46.22,49.01,51.95,55.04,58.27,61.66,65.21,68.92,72.8,88.09,104.9,105.7,110.3,111.6,110.3,106.5,105.7,103.3,100,97.02,98.8,91.07,83.98,88.09,81.36,78.74,77.43,77.43,73.5,74.81,72.63,68.58,66.4,68.54,69.78,67.3,64.82,61.1,59.12,56.15,53.18,50.32,49.44,44.16,36.5,42.4,37.96,37.22,33.68,36.48,35.74,35,35,37.22,37.22,39.44,32.6,34.54,36.48,35.74,34.34,33.68,33.02,31.04,29.72,29.72,29.72,26.16,25.6,29.72,18.3,22.3,21.3,21.8,21.8,20.3,20.8,25.04,25.04,25.6,25.6,25.04,25.6,25.04,25.6,23.92,25.04,21.3,21.8,22.3,21.8,20.8,16.1,20.3,18.3,13.22,19.3,19.3,18.3,14.4,13.86,13.36,12.9,12.48,12.1,11.75,11.43,11.15,10.9,10.67,10.48,10.31,10.16,10.04,9.93,9.85,9.78,9.73,9.69,9.67,9.65,9.65,12.08,8.67,11.7,11.38,10.65,9.84,9.32,9.07,8.85,8.66,8.49,8.35,8.22,8.1,7.98,7.86,7.74,7.61,7.47,7.31,7.14,6.96,6.78,6.58,6.39,6.19,5.99,5.78,5.58,5.39,5.2,5.01,4.83,4.67,4.51,4.37,4.24,4.12,4.02,3.95,3.89,3.85,3.84,4.41,5.77,7.39,8.75,9.32,9.18,9,8.94,8.88,8.83,8.78,8.73,8.68,8.64,8.6,8.56,8.53,8.5,8.47,8.45,8.42,8.4,8.39,8.37,8.36,8.35,8.35,8.34,8.34,8.67,9.65,9.62,9.53,9.4,9.21,8.98,8.7,8.4,8.06,7.69,7.3,6.89,6.47,6.03,5.59,5.14,4.7,4.26,3.83,3.42,3.02,2.65,2.3,1.98,1.7,1.45,1.25,1.09,0.99,0.94,0.92,0.91,0.89,0.87,0.85,0.84,0.82,0.81,0.79,0.78,0.77,0.75,0.74,0.73,0.72,0.71,0.7,0.69,0.68,0.67,0.66,0.65,0.64,0.64,0.63,0.63,0.62,0.62,0.61,0.61,0.61,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.61,0.61,0.61,0.61,0.61,0.61,0.62,0.62,0.62,0.62,0.63,0.63,0.63,0.63,0.63,0.64,0.64,0.64,0.64,0.64,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.64,0.63,0.62,0.6,0.59,0.57,0.55,0.54,0.53,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.51,0.51,0.51,0.5,0.5,0.49,0.48,0.47,0.47,0.46,0.45,0.45,0.44,0.43,0.42,0.42,0.41,0.41,0.41,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.41,0.42,0.43,0.44,0.46,0.48,0.5,0.53,0.55,0.58,0.61,0.64,0.67,0.7,0.73,0.77,0.8,0.83,0.87,0.9,0.93,0.96,0.99,1.02,1.05,1.08,1.1,1.12,1.14,1.16,1.17,1.18,1.19,1.2,1.2,1.2,1.19,1.17,1.15,1.12,1.09,1.06,1.02,0.98,0.94,0.9,0.86,0.82,0.78,0.74,0.7,0.66,0.63,0.6,0.57,0.55,0.53,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.51,0.51,0.5,0.5,0.49,0.49,0.48,0.47,0.47,0.47,0.46,0.46,0.45,0.45,0.45,0.44,0.44,0.44,0.43,0.43,0.43,0.42,0.42,0.42,0.41,0.41,0.41,0.41,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.43,0.43,0.43,0.43,0.43,0.43,0.44,0.44,0.44,0.44,0.44,0.44,0.45,0.45,0.45
            ]
        },
        {
            name:'2',
            type:'line',
            yAxisIndex:1,
            animation: false,
            areaStyle: {
                normal: {}
            },
            lineStyle: {
                normal: {
                    width: 1
                }
            },
            markArea: {
                silent: true,
                data: [[{
                    xAxis: '2009/9/10\n7:00'
                }, {
                    xAxis: '2009/9/20\n7:00'
                }]]
            },
            data: [
                0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.017,0.017,0.017,0.017,0.011,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.021,0.026,0.03,0.036,0.036,0.195,0.221,0.019,0.013,0.017,0.03,0.03,0.03,0.046,0.045,0.038,0.084,0.045,0.045,0.037,0.034,0.035,0.036,0.044,0.052,0.048,0.109,0.033,0.029,0.04,0.042,0.042,0.042,0.073,0.076,0.062,0.066,0.066,0.075,0.096,0.128,0.121,0.128,0.14,0.226,0.143,0.097,0.018,0,0,0,0,0,0.018,0.047,0.054,0.054,0.054,0.036,0.185,0.009,0.038,0.061,0.077,0.091,0.126,0.69,0.182,0.349,0.231,0.146,0.128,0.167,0.1,0.075,0.071,0.071,0.117,0.01,0.002,0.002,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.026,0.038,0.038,0.038,0.076,0.086,0.109,0.213,0.276,0.288,0.297,0.642,1.799,1.236,2.138,0.921,0.497,0.685,0.828,0.41,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.018,0.024,0.024,0.024,0.024,0.006,0.003,0.046,0.046,0.046,0.046,0.043,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.204,0.303,1.028,1.328,1.524,1.41,1.362,1.292,1.191,0.529,0.501,0.944,1.81,2.899,0.859,0.126,0.087,0.047,0,0,0,0,0.011,0.028,0.028,0.028,0.028,0.017,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.099,0.159,0.297,0.309,0.309,0.614,0.818,1.436,1.195,0.553,0.542,0.955,0.898,0.466,0.386,0.556,0.388,0.221,0.192,0.192,0.187,0.166,0.18,0.302,0.158,0.009,0.009,0.009,0.009,0.009,0.007,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.004,0.032,0.032,0.032,0.032,0.082,0.149,0.204,0.247,0.262,0.49,0.51,0.533,0.746,0.847,2.393,1.188,1.114,0.475,0.043,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.017,0.017,0.021,0.042,0.079,0.111,0.126,0.122,0.133,0.846,0.102,0.077,0.067,0.056,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0.011,0.017,0.017,0.017,0.017,0.006,0,0,0,0,0,0.01,0.03,0.054,0.067,0.07,0.25,0.251,0.494,0.065,0.054,0.054,0.064,0.084,0.077,0.101,0.132,0.248,0.069,0.117,0.115,0.087,0.326,0.036,0.009,0.009,0.009,0.009,0.009,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.02,0.039,0.04,0.04,0.04,0.229,0.079,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.023,0.069,0.082,0.082,0.082,0.503,0.774,0.038,0.012,0.012,0.012,0.016,0.02,0.028,0.051,0.06,0.064,0.19,0.15,0.164,0.139,0.13,0.085,0.031,0.023,0.022,0.007,0.005,0.005,0.001,0,0.02,0.048,0.048,0.053,0.056,0.036,0.008,0.008,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.013,0.017,0.036,0.068,0.095,0.233,0.272,0.377,0.722,1.494,3.756,0.954,0.439,0.442,0.462,0.373,0.249,0.214,0.1,0.044,0.037,0.023,0.002,0,0,0,0,0,0,0.02,0.024,0.024,0.024,0.024,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.008,0.017,0.017,0.045,0.186,0.308,0.241,0.241,0.893,4.067,4.494,5.015,3.494,2.057,1.411,0.718,0.407,0.313,0.339,1.537,1.105,0.218,0.136,0.03,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.037,0.448,1.2,1.309,1.309,1.425,1.223,0.471,0.767,0.423,0.273,0.412,0.646,0.481,0.239,0.131,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.044,0.15,0.223,0.388,0.513,0.883,2.828,4.786,5.959,4.95,6.434,6.319,3.35,2.806,4.204,1.395,1.015,1.015,0.836,0.74,0.72,0.615,0.477,0.192,0.046,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.008,0.005,0.005,0.005,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.012,0.012,0.012,0.012,0.011,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.002,0.012,0.028,0.028,0.028,0.138,0.092,0.082,0.082,0.096,0.719,0.155,0.042,0.047,0.129,0.021,0.021,0.014,0.009,0.029,0.067,0.088,0.095,0.095,0.138,0.091,0.032,0.025,0.025,0.003,0,0,0,0,0,0,0,0,0,0,0,0,0.002,0.045,0.228,0.297,0.325,0.339,0.581,1.244,0.796,0.517,0.227,0.053,0.006,0,0,0,0,0,0,0,0,0,0.003,0.005,0.005,0.005,0.005,0.081,0.129,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.014,0.041,0.041,0.041,0.041,0.027,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.009,0.017,0.017,0.017,0.017,0.355,0.174,0.009,0.009,0.012,0.136,0.208,0.208,0.208,0.215,7.359,1.858,0.458,0.053,0.053,0.047,0.045,0.045,0.059,0.136,0.188,0.206,0.21,0.588,1.517,6.02,4.688,4.42,0.624,0.326,0.359,0.553,0.899,0.94,2.95,9.415,5.752,1.092,0.096,0.035,0.026,0.018,0.015,0.011,0.011,0.011,0,0,0,0,0,0,0,0,0,0,0,0.056,0.27,0.314,0.351,0.354,0.609,0.796,1.857,0.848,0.538,0.214,0.178,0.178,0.201,0.231,0.227,0.272,0.397,0.45,1.014,2.917,1.675,0.081,0.059,0.059,0.148,0.075,0.075,0.078,0.236,0.784,0.784,0.784,0.784,0.741,0.115,0.058,0.058,0.058,0.029,0.015,0.015,0.015,0.015,0.012,0.008,0.604,0.985,1.305,2.273,2.528,2.336,2.496,2.281,1.397,1.713,3.259,1.167,0.745,0.548,1.058,0.684,0.728,0.392,0.179,0.283,0.283,0.46,0.08,0.099,0.099,0.099,0.1,0.143,0.137,0.238,0.317,0.262,0.225,0.792,0.426,0.332,0.261,0.11,0.093,0.102,0.171,0.292,0.504,0.605,1.745,2.485,1.964,0.33,0.171,0.259,0.242,0.215,0.366,0.354,0.205,0.203,0.262,0.153,0.13,0.137,0.362,0.691,0.295,0.433,0.154,0.056,0.053,0.053,0.053,0.051,0.047,0.065,0.078,0.091,0.206,0.813,0.102,0.151,0.05,0.024,0.004,0.001,0,0,0,0.021,0.021,0.021,0.021,0.021,0.013,0.013,0.013,0.013,0.013,0.013,0.013,0.013,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.008,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.018,0.021,0.021,0.021,0.021,0.003,0,0,0,0,0,0,0,0,0,0.024,0.173,0.261,0.267,0.267,0.534,1.354,1.772,0.72,0.218,0.018,0.018,0.028,0.036,0.032,0.194,0.082,0.035,0.286,0.027,0.038,0.038,0.027,0.021,0.014,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.016,0.017,0.017,0.031,0.047,0.043,0.056,0.104,0.149,0.179,0.205,0.328,0.998,0.522,1.851,3.727,3.273,2.204,1.169,1.006,1.179,0.74,0.741,1.065,0.925,0.671,0.497,0.431,0.327,0.277,0.126,0.581,0.207,0.359,2.485,0.038,0.036,0.003,0.003,0.003,0.003,0.004,0.098,0.023,0.021,0.021,0.022,0.041,0.041,0.043,0.045,0.043,0.014,0.014,0.014,0.014,0.014,0.014,0.014,0.031,0.046,0.063,0.119,0.107,0.092,0.085,0.065,0.06,0.054,0.042,0.039,0.046,0.044,0.028,0.028,0.02,0.013,0.013,0.013,0.013,0.016,0.032,0.031,0.031,0.031,0.028,0.011,0.011,0.011,0.011,0.011,0.023,0.024,0.024,0.024,0.019,0.015,0.015,0.015,0.015,0.015,0.015,0.013,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.001,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.011,0.017,0.024,0.026,0.061,0.172,0.206,0.213,0.267,0.511,0.668,0.157,0.017,0.017,0.017,0.046,0.054,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.017,0.017,0.017,0.017,0.016,0,0,0,0,0,0,0,0,0,0.01,0.017,0.017,0.017,0.017,0.012,0.017,0.017,0.017,0.017,0.012,0,0,0,0,0,0.003,0.031,0.066,0.093,0.112,0.122,0.202,0.068,0.041,0.022,0.011,0,0,0,0,0,0,0,0,0,0,0,0.002,0.005,0.012,0.021,0.021,0.019,0.033,0.03,0.026,0.026,0.034,0.095,0.024,0.024,0.024,0.023,0.019,0.018,0.018,0.018,0.011,0.03,0.045,0.044,0.044,0.044,0.022,0.009,0.024,0.033,0.033,0.033,0.024,0.009,0,0,0,0,0,0,0.003,0.017,0.017,0.017,0.017,0.014,0,0,0,0,0,0.032,0.032,0.032,0.032,0.032,0.005,0.008,0.009,0.014,0.014,0.009,0.005,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.007,0.009,0.009,0.009,0.009,0.043,0.063,0.084,0.098,0.101,0.213,0.334,0.383,0.43,0.448,0.511,0.801,0.835,1.642,1.614,1.496,1.496,1.476,1.068,0.481,0.22,0.119,0.099,0.07,0.072,0.063,0.076,0.14,0.205,0.28,0.297,0.3,0.479,0.877,1.098,1.611,1.629,1.686,1.686,1.631,1.528,1.862,1.703,1.531,2.196,0.395,0.416,0.453,0.728,0.917,0.986,1.17,2.171,3.011,2.909,3.301,1.377,0.778,0.799,0.947,1.039,0.879,0.76,1.372,1.674,1.674,1.68,1.823,1.793,1.162,0.783,0.216,0.152,0.152,0.152,0.049,0,0,0,0.117,0.127,0.127,0.127,0.127,0.127,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.003,0.005,0.005,0.005,0.005,0.003,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.309,0.364,0.364,0.364,0.364,0.063,0.01,0.01,0.01,0.012,0.015,0.015,0.11,0.55,0.824,0.825,0.829,1.39,1.429,1.342,1.43,1.636,1.717,2.135,2.203,3.191,3.022,1.589,0.86,0.807,0.645,0.595,0.588,0.557,0.552,1.271,0.708,0.677,0.629,0.714,0.203,0.133,0.061,0.062,0.018,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.072,0.29,0.438,0.53,0.557,0.873,1.039,1.04,0.208,0.049,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.03,0.039,0.039,0.039,0.039,0.098,0.008,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.056,0.062,0.065,0.065,0.065,0.047,0.216,0.256,0.315,0.4,0.502,0.449,0.47,0.571,0.814,1.153,0.774,0.202,0.086,0.075,0.071,0.032,0.019,0.003,0.004,0.004,0.004,0.004,0.004,0.004,0.007,0.072,0.153,0.256,0.306,0.404,0.698,0.733,0.823,0.715,0.563,0.404,0.293,0.217,0.213,0.202,0.202,0.294,0.704,0.797,1.359,1.101,0.72,0.514,0.539,0.434,0.389,0.387,0.386,0.375,0.369,0.319,0.239,0.183,0.136,0.062,0.052,0.096,0.119,0.119,0.114,0.127,0.132,0.139,0.169,0.191,0.278,0.254,0.214,0.237,0.221,0.143,0.129,0.125,0.109,0.1,0.087,0.06,0.038,0.029,0.029,0.028,0.048,0.053,0.053,0.111,0.125,0.102,0.097,0.097,0.039,0.02,0.02,0.02,0.014,0.004,0.031,0.043,0.047,0.052,0.08,0.144,0.182,0.176,0.171,0.149,0.112,0.025,0,0,0,0,0,0,0,0.016,0.031,0.031,0.031,0.031,0.015,0,0,0,0,0,0.005,0.005,0.005,0.005,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.005,0.005,0.005,0.005,0.001,0,0,0
            ]
        }
    ]
};

    eChart_1.setOption(option);
    eChart_1.resize();
}$(function() {
"use strict";
// ------------------------------
// Basic line chart
// ------------------------------
// based on prepared DOM, initialize echarts instance
    var myChart = echarts.init(document.getElementById('basic-line'));

    // specify chart configuration item and data
    var option = {
            // Setup grid
            grid: {
                 left: '1%',
                right: '2%',
                bottom: '3%',
                containLabel: true
            },

            // Add Tooltip
            tooltip : {
                trigger: 'axis'
            },

            // Add Legend
            legend: {
                data:['Max temp','Min temp']
            },

            // Add custom colors
            color: ['#4974e0', '#3db76b'],

            // Enable drag recalculate
            calculable : true,

            // Horizontal Axiz
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data : ['Mon','Tue','Wed','Thu','Fri','Sat','Sun']
                }
            ],

            // Vertical Axis
            yAxis : [
                {
                    type : 'value',
                    axisLabel : {
                        formatter: '{value} °C'
                    }
                }
            ],

            // Add Series
            series : [
                {
                    name:'Max temp',
                    type:'line',
                    data:[10, 8, 14, 19, 17, 12, 14],
                    markPoint : {
                        data : [
                            {type : 'max', name: 'Max'},
                            {type : 'min', name: 'Min'}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name: 'Average'}
                        ]
                    },
                    lineStyle: {
                        normal: {
                            width: 3,
                            shadowColor: 'rgba(0,0,0,0.1)',
                            shadowBlur: 10,
                            shadowOffsetY: 10
                        }
                    },
                },
                {
                    name:'Min temp',
                    type:'line',
                    data:[2, -3, 1, 6, 4, 5, 0],
                    markPoint : {
                        data : [
                            {name : 'Week low', value : -2, xAxis: 1, yAxis: -1.5}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name : 'Average'}
                        ]
                    },
                    lineStyle: {
                        normal: {
                            width: 3,
                            shadowColor: 'rgba(0,0,0,0.1)',
                            shadowBlur: 10,
                            shadowOffsetY: 10
                        }
                    },
                }
            ]
        };
    // use configuration item and data specified to show chart
    myChart.setOption(option);


// ------------------------------
// Basic line chart
// ------------------------------
// based on prepared DOM, initialize echarts instance
    var bareaChart = echarts.init(document.getElementById('basic-area'));

    // specify chart configuration item and data
    var option = {
            // Setup grid
            grid: {
                 left: '1%',
                right: '2%',
                bottom: '3%',
                containLabel: true
            },

            // Add Tooltip
            tooltip : {
                trigger: 'axis'
            },

            // Add Legend
            legend: {
                data:['Max temp','Min temp']
            },

            // Add custom colors
            color: ['#689f38', '#ee1044'],

            // Enable drag recalculate
            calculable : true,

            // Horizontal Axiz
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data : ['Mon','Tue','Wed','Thu','Fri','Sat','Sun']
                }
            ],

            // Vertical Axis
            yAxis : [
                {
                    type : 'value',
                    axisLabel : {
                        formatter: '{value} °C'
                    }
                }
            ],

            // Add Series
            series : [
                {
                    name:'Max temp',
                    type:'line',
                    areaStyle: {},
                    data:[10, 8, 14, 19, 17, 12, 14],
                    markPoint : {
                        data : [
                            {type : 'max', name: 'Max'},
                            {type : 'min', name: 'Min'}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name: 'Average'}
                        ]
                    }
                },
                {
                    name:'Min temp',
                    type:'line',
                    areaStyle: {},
                    data:[2, -3, 1, 6, 4, 5, 0],
                    markPoint : {
                        data : [
                            {name : 'Week low', value : -2, xAxis: 1, yAxis: -1.5}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name : 'Average'}
                        ]
                    }
                }
            ]
        };
    // use configuration item and data specified to show chart
    bareaChart.setOption(option);
   

    //***************************
   // Stacked chart
   //***************************
    var stackedChart = echarts.init(document.getElementById('stacked-line'));
    var option = {
        
        grid: {
            left: '1%',
            right: '2%',
            bottom: '3%',
            containLabel: true
            },
        tooltip: {
            trigger: 'axis'
        },
        // Add legend
            legend: {
                data: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5']
            },

            // Add custom colors
            color: ['#4974e0', '#3db76b', '#689f38', '#ff8f00', '#ee1044'],

            // Enable drag recalculate
            calculable: true,

            // Hirozontal axis
            xAxis: [{
                type: 'category',
                boundaryGap: false,
                data: [
                    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
                ]
            }],

            // Vertical axis
            yAxis: [{
                type: 'value'
            }],

            // Add series
        series: [
                {
                    name: 'Data1',
                    type: 'line',
                    stack: 'Total',
                    data: [125, 254, 125, 105, 75, 235, 215]
                },
                {
                    name: 'Data2',
                    type: 'line',
                    stack: 'Total',
                    data: [245, 495, 201, 245, 215, 345, 301]
                },
                {
                    name: 'Data3',
                    type: 'line',
                    stack: 'Total',
                    data: [125, 545, 320, 158, 215, 325, 412]
                },
                {
                    name: 'Data4',
                    type: 'line',
                    stack: 'Total',
                    data: [325, 258, 302, 359, 345, 359, 369]
                },
                {
                    name: 'Data5',
                    type: 'line',
                    stack: 'Total',
                    data: [958, 459, 923, 954, 1258, 1523, 1354]
                }
            ]
            // Add series
            
    };
    stackedChart.setOption(option);
    
    //***************************
   // Stacked Area chart
   //***************************
    var stackedareaChart = echarts.init(document.getElementById('stacked-area'));
    var option = {
        
        grid: {
            left: '1%',
            right: '2%',
            bottom: '3%',
            containLabel: true
            },
        tooltip: {
            trigger: 'axis'
        },
        // Add legend
            legend: {
                data: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5']
            },

            // Add custom colors
            color: ['#ee1044', '#ff8f00', '#689f38', '#3db76b','#4974e0' ],

            // Enable drag recalculate
            calculable: true,

            // Hirozontal axis
            xAxis: [{
                type: 'category',
                boundaryGap: false,
                data: [
                    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
                ]
            }],

            // Vertical axis
            yAxis: [{
                type: 'value'
            }],

            // Add series
        series: [
                {
                    name: 'Data1',
                    type: 'line',
                    stack: 'Total',
                    areaStyle: {},
                    data: [125, 254, 125, 105, 75, 235, 215]
                },
                {
                    name: 'Data2',
                    type: 'line',
                    stack: 'Total',
                    areaStyle: {},
                    data: [245, 495, 201, 245, 215, 345, 301]
                },
                {
                    name: 'Data3',
                    type: 'line',
                    stack: 'Total',
                    areaStyle: {},
                    data: [125, 545, 320, 158, 215, 325, 412]
                },
                {
                    name: 'Data4',
                    type: 'line',
                    stack: 'Total',
                    areaStyle: {},
                    data: [325, 258, 302, 359, 345, 359, 369]
                },
                {
                    name: 'Data5',
                    type: 'line',
                    stack: 'Total',
                    areaStyle: {},
                    data: [958, 459, 923, 954, 1258, 1523, 1354]
                }
            ]
            // Add series
            
    };
    stackedareaChart.setOption(option);
    
// ------------------------------
// Basic line chart
// ------------------------------
// based on prepared DOM, initialize echarts instance
    var gradiantChart = echarts.init(document.getElementById('g-line'));

    // specify chart configuration item and data
    var data = [["2018-06-05",115],["2018-06-06",135],["2018-06-07",145],["2018-06-08",95],["2018-06-09",74],["2018-06-10",89],["2018-06-11",65],["2018-06-12",87],["2018-06-13",96],["2018-06-14",154],["2018-06-15",269],["2018-06-16",145],["2018-06-17",154],["2018-06-18",101],["2018-06-19",425],["2018-06-20",203],["2018-06-21",154],["2018-06-22",142],["2018-06-23",75],["2018-06-24",96],["2018-06-25",52],["2018-06-26",102],["2018-06-27",84],["2018-06-28",53],["2018-06-29",74],["2018-06-30",65],["2018-07-01",45],["2018-07-02",145],["2018-07-03",105],["2018-07-04",95],["2018-07-05",41],["2018-07-06",85],["2018-07-07",103],["2018-07-08",158],["2018-07-09",87],["2018-07-10",65],["2018-07-11",32],["2018-07-12",154],["2018-07-13",105],["2018-07-14",154],["2018-07-15",124],["2018-07-16",95],["2018-07-17",54],["2018-07-18",62],["2018-07-19",74],["2018-07-20",85],["2018-07-21",154],["2018-07-22",36],["2018-07-23",42],["2018-07-24",85]];

    var dateList = data.map(function (item) {
        return item[0];
    });
    var valueList = data.map(function (item) {
        return item[1];
    });

    var option = {

        // Make gradient line here
        visualMap: [{
            show: false,
            type: 'continuous',
            seriesIndex: 0,
            min: 0,
            max: 400
        }, {
            show: false,
            type: 'continuous',
            seriesIndex: 1,
            dimension: 0,
            min: 0,
            max: dateList.length - 1
        }],

        
        title: [{
            left: 'center',
            text: 'Gradient along the y axis'
        }, {
            top: '55%',
            left: 'center',
            text: 'Gradient along the x axis'
        }],
        tooltip: {
            trigger: 'axis'
        },
        
        xAxis: [{
            data: dateList
        }, {
            data: dateList,
            gridIndex: 1
        }],
        yAxis: [{
            splitLine: {show: false}
        }, {
            splitLine: {show: false},
            gridIndex: 1
        }],
        grid: [{
            bottom: '60%',
            left:'3%',
            right:'3%'
        }, {
            top: '60%',
            left:'3%',
            right:'3%'
        }],
        
        series: [{
            type: 'line',
            showSymbol: false,
            data: valueList
        }, {
            type: 'line',
            showSymbol: false,
            data: valueList,
            xAxisIndex: 1,
            yAxisIndex: 1
        }]
    };
    // use configuration item and data specified to show chart
    gradiantChart.setOption(option);


   //------------------------------------------------------
   // Resize chart on menu width change and window resize
   //------------------------------------------------------
    $(function () {

            // Resize chart on menu width change and window resize
            $(window).on('resize', resize);
            $(".sidebartoggler").on('click', resize);

            // Resize function
            function resize() {
                setTimeout(function() {

                    // Resize chart
                    myChart.resize();
                    bareaChart.resize();
                    stackedChart.resize();
                    stackedareaChart.resize();
                    gradiantChart.resize();
                }, 200);
            }
        });
    
    
// ------------------------------
// rainfall chart
// ------------------------------		
    
    if( $('#rainfall').length > 0 ){
    var eChart_1 = echarts.init(document.getElementById('rainfall'));
    var option = {
    title : {
        show:false
    },
    grid: {
        bottom: 40
    },
    color: ['#689f38', '#38649f'],	
    toolbox: {
        show:false
    },
    tooltip: {
            trigger: 'axis',
            backgroundColor: 'rgba(33,33,33,1)',
            borderRadius:0,
            padding:10,
            axisPointer: {
                type: 'cross',
                label: {
                    backgroundColor: 'rgba(33,33,33,1)'
                }
            },
            textStyle: {
                color: '#fff',
                fontStyle: 'normal',
                fontWeight: 'normal',
                fontFamily: "'Nunito Sans', sans-serif",
                fontSize: 12
            }	
        },
    legend: {
        show:false
    },
    dataZoom: [
        {
            show: false,
        }
    ],
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
            data : [
                '2009/6/12 2:00', '2009/6/12 3:00', '2009/6/12 4:00', '2009/6/12 5:00', '2009/6/12 6:00', '2009/6/12 7:00', '2009/6/12 8:00', '2009/6/12 9:00', '2009/6/12 10:00', '2009/6/12 11:00', '2009/6/12 12:00', '2009/6/12 13:00', '2009/6/12 14:00', '2009/6/12 15:00', '2009/6/12 16:00', '2009/6/12 17:00', '2009/6/12 18:00', '2009/6/12 19:00', '2009/6/12 20:00', '2009/6/12 21:00', '2009/6/12 22:00', '2009/6/12 23:00',
                '2009/6/13 0:00', '2009/6/13 1:00', '2009/6/13 2:00', '2009/6/13 3:00', '2009/6/13 4:00', '2009/6/13 5:00', '2009/6/13 6:00', '2009/6/13 7:00', '2009/6/13 8:00', '2009/6/13 9:00', '2009/6/13 10:00', '2009/6/13 11:00', '2009/6/13 12:00', '2009/6/13 13:00', '2009/6/13 14:00', '2009/6/13 15:00', '2009/6/13 16:00', '2009/6/13 17:00', '2009/6/13 18:00', '2009/6/13 19:00', '2009/6/13 20:00', '2009/6/13 21:00', '2009/6/13 22:00', '2009/6/13 23:00',
                '2009/6/14 0:00', '2009/6/14 1:00', '2009/6/14 2:00', '2009/6/14 3:00', '2009/6/14 4:00', '2009/6/14 5:00', '2009/6/14 6:00', '2009/6/14 7:00', '2009/6/14 8:00', '2009/6/14 9:00', '2009/6/14 10:00', '2009/6/14 11:00', '2009/6/14 12:00', '2009/6/14 13:00', '2009/6/14 14:00', '2009/6/14 15:00', '2009/6/14 16:00', '2009/6/14 17:00', '2009/6/14 18:00', '2009/6/14 19:00', '2009/6/14 20:00', '2009/6/14 21:00', '2009/6/14 22:00', '2009/6/14 23:00',
                '2009/6/15 0:00', '2009/6/15 1:00', '2009/6/15 2:00', '2009/6/15 3:00', '2009/6/15 4:00', '2009/6/15 5:00', '2009/6/15 6:00', '2009/6/15 7:00', '2009/6/15 8:00', '2009/6/15 9:00', '2009/6/15 10:00', '2009/6/15 11:00', '2009/6/15 12:00', '2009/6/15 13:00', '2009/6/15 14:00', '2009/6/15 15:00', '2009/6/15 16:00', '2009/6/15 17:00', '2009/6/15 18:00', '2009/6/15 19:00', '2009/6/15 20:00', '2009/6/15 21:00', '2009/6/15 22:00', '2009/6/15 23:00',
                '2009/6/15 0:00', '2009/6/16 1:00', '2009/6/16 2:00', '2009/6/16 3:00', '2009/6/16 4:00', '2009/6/16 5:00', '2009/6/16 6:00', '2009/6/16 7:00', '2009/6/16 8:00', '2009/6/16 9:00', '2009/6/16 10:00', '2009/6/16 11:00', '2009/6/16 12:00', '2009/6/16 13:00', '2009/6/16 14:00', '2009/6/16 15:00', '2009/6/16 16:00', '2009/6/16 17:00', '2009/6/16 18:00', '2009/6/16 19:00', '2009/6/16 20:00', '2009/6/16 21:00', '2009/6/16 22:00', '2009/6/16 23:00',
                '2009/6/15 0:00', '2009/6/17 1:00', '2009/6/17 2:00', '2009/6/17 3:00', '2009/6/17 4:00', '2009/6/17 5:00', '2009/6/17 6:00', '2009/6/17 7:00', '2009/6/17 8:00', '2009/6/17 9:00', '2009/6/17 10:00', '2009/6/17 11:00', '2009/6/17 12:00', '2009/6/17 13:00', '2009/6/17 14:00', '2009/6/17 15:00', '2009/6/17 16:00', '2009/6/17 17:00', '2009/6/17 18:00', '2009/6/17 19:00', '2009/6/17 20:00', '2009/6/17 21:00', '2009/6/17 22:00', '2009/6/17 23:00',
                '2009/6/18 0:00', '2009/6/18 1:00', '2009/6/18 2:00', '2009/6/18 3:00', '2009/6/18 4:00', '2009/6/18 5:00', '2009/6/18 6:00', '2009/6/18 7:00', '2009/6/18 8:00', '2009/6/18 9:00', '2009/6/18 10:00', '2009/6/18 11:00', '2009/6/18 12:00', '2009/6/18 13:00', '2009/6/18 14:00', '2009/6/18 15:00', '2009/6/18 16:00', '2009/6/18 17:00', '2009/6/18 18:00', '2009/6/18 19:00', '2009/6/18 20:00', '2009/6/18 21:00', '2009/6/18 22:00', '2009/6/18 23:00',
                '2009/6/15 0:00', '2009/6/19 1:00', '2009/6/19 2:00', '2009/6/19 3:00', '2009/6/19 4:00', '2009/6/19 5:00', '2009/6/19 6:00', '2009/6/19 7:00', '2009/6/19 8:00', '2009/6/19 9:00', '2009/6/19 10:00', '2009/6/19 11:00', '2009/6/19 12:00', '2009/6/19 13:00', '2009/6/19 14:00', '2009/6/19 15:00', '2009/6/19 16:00', '2009/6/19 17:00', '2009/6/19 18:00', '2009/6/19 19:00', '2009/6/19 20:00', '2009/6/19 21:00', '2009/6/19 22:00', '2009/6/19 23:00',
                '2009/6/20 0:00', '2009/6/20 1:00', '2009/6/20 2:00', '2009/6/20 3:00', '2009/6/20 4:00', '2009/6/20 5:00', '2009/6/20 6:00', '2009/6/20 7:00', '2009/6/20 8:00', '2009/6/20 9:00', '2009/6/20 10:00', '2009/6/20 11:00', '2009/6/20 12:00', '2009/6/20 13:00', '2009/6/20 14:00', '2009/6/20 15:00', '2009/6/20 16:00', '2009/6/20 17:00', '2009/6/20 18:00', '2009/6/20 19:00', '2009/6/20 20:00', '2009/6/20 21:00', '2009/6/20 22:00', '2009/6/20 23:00',
                '2009/6/21 0:00', '2009/6/21 1:00', '2009/6/21 2:00', '2009/6/21 3:00', '2009/6/21 4:00', '2009/6/21 5:00', '2009/6/21 6:00', '2009/6/21 7:00', '2009/6/21 8:00', '2009/6/21 9:00', '2009/6/21 10:00', '2009/6/21 11:00', '2009/6/21 12:00', '2009/6/21 13:00', '2009/6/21 14:00', '2009/6/21 15:00', '2009/6/21 16:00', '2009/6/21 17:00', '2009/6/21 18:00', '2009/6/21 19:00', '2009/6/21 20:00', '2009/6/21 21:00', '2009/6/21 22:00', '2009/6/21 23:00',
                '2009/6/22 0:00', '2009/6/22 1:00', '2009/6/22 2:00', '2009/6/22 3:00', '2009/6/22 4:00', '2009/6/22 5:00', '2009/6/22 6:00', '2009/6/22 7:00', '2009/6/22 8:00', '2009/6/22 9:00', '2009/6/22 10:00', '2009/6/22 11:00', '2009/6/22 12:00', '2009/6/22 13:00', '2009/6/22 14:00', '2009/6/22 15:00', '2009/6/22 16:00', '2009/6/22 17:00', '2009/6/22 18:00', '2009/6/22 19:00', '2009/6/22 20:00', '2009/6/22 21:00', '2009/6/22 22:00', '2009/6/22 23:00',
                '2009/6/23 0:00', '2009/6/23 1:00', '2009/6/23 2:00', '2009/6/23 3:00', '2009/6/23 4:00', '2009/6/23 5:00', '2009/6/23 6:00', '2009/6/23 7:00', '2009/6/23 8:00', '2009/6/23 9:00', '2009/6/23 10:00', '2009/6/23 11:00', '2009/6/23 12:00', '2009/6/23 13:00', '2009/6/23 14:00', '2009/6/23 15:00', '2009/6/23 16:00', '2009/6/23 17:00', '2009/6/23 18:00', '2009/6/23 19:00', '2009/6/23 20:00', '2009/6/23 21:00', '2009/6/23 22:00', '2009/6/23 23:00',
                '2009/6/24 0:00', '2009/6/24 1:00', '2009/6/24 2:00', '2009/6/24 3:00', '2009/6/24 4:00', '2009/6/24 5:00', '2009/6/24 6:00', '2009/6/24 7:00', '2009/6/24 8:00', '2009/6/24 9:00', '2009/6/24 10:00', '2009/6/24 11:00', '2009/6/24 12:00', '2009/6/24 13:00', '2009/6/24 14:00', '2009/6/24 15:00', '2009/6/24 16:00', '2009/6/24 17:00', '2009/6/24 18:00', '2009/6/24 19:00', '2009/6/24 20:00', '2009/6/24 21:00', '2009/6/24 22:00', '2009/6/24 23:00',
                '2009/6/25 0:00', '2009/6/25 1:00', '2009/6/25 2:00', '2009/6/25 3:00', '2009/6/25 4:00', '2009/6/25 5:00', '2009/6/25 6:00', '2009/6/25 7:00', '2009/6/25 8:00', '2009/6/25 9:00', '2009/6/25 10:00', '2009/6/25 11:00', '2009/6/25 12:00', '2009/6/25 13:00', '2009/6/25 14:00', '2009/6/25 15:00', '2009/6/25 16:00', '2009/6/25 17:00', '2009/6/25 18:00', '2009/6/25 19:00', '2009/6/25 20:00', '2009/6/25 21:00', '2009/6/25 22:00', '2009/6/25 23:00',
                '2009/6/26 0:00', '2009/6/26 1:00', '2009/6/26 2:00', '2009/6/26 3:00', '2009/6/26 4:00', '2009/6/26 5:00', '2009/6/26 6:00', '2009/6/26 7:00', '2009/6/26 8:00', '2009/6/26 9:00', '2009/6/26 10:00', '2009/6/26 11:00', '2009/6/26 12:00', '2009/6/26 13:00', '2009/6/26 14:00', '2009/6/26 15:00', '2009/6/26 16:00', '2009/6/26 17:00', '2009/6/26 18:00', '2009/6/26 19:00', '2009/6/26 20:00', '2009/6/26 21:00', '2009/6/26 22:00', '2009/6/26 23:00',
                '2009/6/27 0:00', '2009/6/27 1:00', '2009/6/27 2:00', '2009/6/27 3:00', '2009/6/27 4:00', '2009/6/27 5:00', '2009/6/27 6:00', '2009/6/27 7:00', '2009/6/27 8:00', '2009/6/27 9:00', '2009/6/27 10:00', '2009/6/27 11:00', '2009/6/27 12:00', '2009/6/27 13:00', '2009/6/27 14:00', '2009/6/27 15:00', '2009/6/27 16:00', '2009/6/27 17:00', '2009/6/27 18:00', '2009/6/27 19:00', '2009/6/27 20:00', '2009/6/27 21:00', '2009/6/27 22:00', '2009/6/27 23:00',

                '2009/6/28 0:00', '2009/6/28 1:00', '2009/6/28 2:00', '2009/6/28 3:00', '2009/6/28 4:00', '2009/6/28 5:00', '2009/6/28 6:00', '2009/6/28 7:00', '2009/6/28 8:00', '2009/6/28 9:00', '2009/6/28 10:00', '2009/6/28 11:00', '2009/6/28 12:00', '2009/6/28 13:00', '2009/6/28 14:00', '2009/6/28 15:00', '2009/6/28 16:00', '2009/6/28 17:00', '2009/6/28 18:00', '2009/6/28 19:00', '2009/6/28 20:00', '2009/6/28 21:00', '2009/6/28 22:00', '2009/6/28 23:00',
                '2009/6/29 0:00', '2009/6/29 1:00', '2009/6/29 2:00', '2009/6/29 3:00', '2009/6/29 4:00', '2009/6/29 5:00', '2009/6/29 6:00', '2009/6/29 7:00', '2009/6/29 8:00', '2009/6/29 9:00', '2009/6/29 10:00', '2009/6/29 11:00', '2009/6/29 12:00', '2009/6/29 13:00', '2009/6/29 14:00', '2009/6/29 15:00', '2009/6/29 16:00', '2009/6/29 17:00', '2009/6/29 18:00', '2009/6/29 19:00', '2009/6/29 20:00', '2009/6/29 21:00', '2009/6/29 22:00', '2009/6/29 23:00',
                '2009/6/30 0:00', '2009/6/30 1:00', '2009/6/30 2:00', '2009/6/30 3:00', '2009/6/30 4:00', '2009/6/30 5:00', '2009/6/30 6:00', '2009/6/30 7:00', '2009/6/30 8:00', '2009/6/30 9:00', '2009/6/30 10:00', '2009/6/30 11:00', '2009/6/30 12:00', '2009/6/30 13:00', '2009/6/30 14:00', '2009/6/30 15:00', '2009/6/30 16:00', '2009/6/30 17:00', '2009/6/30 18:00', '2009/6/30 19:00', '2009/6/30 20:00', '2009/6/30 21:00', '2009/6/30 22:00', '2009/6/30 23:00',
                '2009/7/1 0:00', '2009/7/1 1:00', '2009/7/1 2:00', '2009/7/1 3:00', '2009/7/1 4:00', '2009/7/1 5:00', '2009/7/1 6:00', '2009/7/1 7:00', '2009/7/1 8:00', '2009/7/1 9:00', '2009/7/1 10:00', '2009/7/1 11:00', '2009/7/1 12:00', '2009/7/1 13:00', '2009/7/1 14:00', '2009/7/1 15:00', '2009/7/1 16:00', '2009/7/1 17:00', '2009/7/1 18:00', '2009/7/1 19:00', '2009/7/1 20:00', '2009/7/1 21:00', '2009/7/1 22:00', '2009/7/1 23:00',
                '2009/7/2 0:00', '2009/7/2 1:00', '2009/7/2 2:00', '2009/7/2 3:00', '2009/7/2 4:00', '2009/7/2 5:00', '2009/7/2 6:00', '2009/7/2 7:00', '2009/7/2 8:00', '2009/7/2 9:00', '2009/7/2 10:00', '2009/7/2 11:00', '2009/7/2 12:00', '2009/7/2 13:00', '2009/7/2 14:00', '2009/7/2 15:00', '2009/7/2 16:00', '2009/7/2 17:00', '2009/7/2 18:00', '2009/7/2 19:00', '2009/7/2 20:00', '2009/7/2 21:00', '2009/7/2 22:00', '2009/7/2 23:00',
                '2009/7/3 0:00', '2009/7/3 1:00', '2009/7/3 2:00', '2009/7/3 3:00', '2009/7/3 4:00', '2009/7/3 5:00', '2009/7/3 6:00', '2009/7/3 7:00', '2009/7/3 8:00', '2009/7/3 9:00', '2009/7/3 10:00', '2009/7/3 11:00', '2009/7/3 12:00', '2009/7/3 13:00', '2009/7/3 14:00', '2009/7/3 15:00', '2009/7/3 16:00', '2009/7/3 17:00', '2009/7/3 18:00', '2009/7/3 19:00', '2009/7/3 20:00', '2009/7/3 21:00', '2009/7/3 22:00', '2009/7/3 23:00',
                '2009/7/4 0:00', '2009/7/4 1:00', '2009/7/4 2:00', '2009/7/4 3:00', '2009/7/4 4:00', '2009/7/4 5:00', '2009/7/4 6:00', '2009/7/4 7:00', '2009/7/4 8:00', '2009/7/4 9:00', '2009/7/4 10:00', '2009/7/4 11:00', '2009/7/4 12:00', '2009/7/4 13:00', '2009/7/4 14:00', '2009/7/4 15:00', '2009/7/4 16:00', '2009/7/4 17:00', '2009/7/4 18:00', '2009/7/4 19:00', '2009/7/4 20:00', '2009/7/4 21:00', '2009/7/4 22:00', '2009/7/4 23:00',
                '2009/7/5 0:00', '2009/7/5 1:00', '2009/7/5 2:00', '2009/7/5 3:00', '2009/7/5 4:00', '2009/7/5 5:00', '2009/7/5 6:00', '2009/7/5 7:00', '2009/7/5 8:00', '2009/7/5 9:00', '2009/7/5 10:00', '2009/7/5 11:00', '2009/7/5 12:00', '2009/7/5 13:00', '2009/7/5 14:00', '2009/7/5 15:00', '2009/7/5 16:00', '2009/7/5 17:00', '2009/7/5 18:00', '2009/7/5 19:00', '2009/7/5 20:00', '2009/7/5 21:00', '2009/7/5 22:00', '2009/7/5 23:00',
                '2009/7/6 0:00', '2009/7/6 1:00', '2009/7/6 2:00', '2009/7/6 3:00', '2009/7/6 4:00', '2009/7/6 5:00', '2009/7/6 6:00', '2009/7/6 7:00', '2009/7/6 8:00', '2009/7/6 9:00', '2009/7/6 10:00', '2009/7/6 11:00', '2009/7/6 12:00', '2009/7/6 13:00', '2009/7/6 14:00', '2009/7/6 15:00', '2009/7/6 16:00', '2009/7/6 17:00', '2009/7/6 18:00', '2009/7/6 19:00', '2009/7/6 20:00', '2009/7/6 21:00', '2009/7/6 22:00', '2009/7/6 23:00',
                '2009/7/7 0:00', '2009/7/7 1:00', '2009/7/7 2:00', '2009/7/7 3:00', '2009/7/7 4:00', '2009/7/7 5:00', '2009/7/7 6:00', '2009/7/7 7:00', '2009/7/7 8:00', '2009/7/7 9:00', '2009/7/7 10:00', '2009/7/7 11:00', '2009/7/7 12:00', '2009/7/7 13:00', '2009/7/7 14:00', '2009/7/7 15:00', '2009/7/7 16:00', '2009/7/7 17:00', '2009/7/7 18:00', '2009/7/7 19:00', '2009/7/7 20:00', '2009/7/7 21:00', '2009/7/7 22:00', '2009/7/7 23:00',
                '2009/7/8 0:00', '2009/7/8 1:00', '2009/7/8 2:00', '2009/7/8 3:00', '2009/7/8 4:00', '2009/7/8 5:00', '2009/7/8 6:00', '2009/7/8 7:00', '2009/7/8 8:00', '2009/7/8 9:00', '2009/7/8 10:00', '2009/7/8 11:00', '2009/7/8 12:00', '2009/7/8 13:00', '2009/7/8 14:00', '2009/7/8 15:00', '2009/7/8 16:00', '2009/7/8 17:00', '2009/7/8 18:00', '2009/7/8 19:00', '2009/7/8 20:00', '2009/7/8 21:00', '2009/7/8 22:00', '2009/7/8 23:00',
                '2009/7/9 0:00', '2009/7/9 1:00', '2009/7/9 2:00', '2009/7/9 3:00', '2009/7/9 4:00', '2009/7/9 5:00', '2009/7/9 6:00', '2009/7/9 7:00', '2009/7/9 8:00', '2009/7/9 9:00', '2009/7/9 10:00', '2009/7/9 11:00', '2009/7/9 12:00', '2009/7/9 13:00', '2009/7/9 14:00', '2009/7/9 15:00', '2009/7/9 16:00', '2009/7/9 17:00', '2009/7/9 18:00', '2009/7/9 19:00', '2009/7/9 20:00', '2009/7/9 21:00', '2009/7/9 22:00', '2009/7/9 23:00',
                '2009/7/10 0:00', '2009/7/10 1:00', '2009/7/10 2:00', '2009/7/10 3:00', '2009/7/10 4:00', '2009/7/10 5:00', '2009/7/10 6:00', '2009/7/10 7:00', '2009/7/10 8:00', '2009/7/10 9:00', '2009/7/10 10:00', '2009/7/10 11:00', '2009/7/10 12:00', '2009/7/10 13:00', '2009/7/10 14:00', '2009/7/10 15:00', '2009/7/10 16:00', '2009/7/10 17:00', '2009/7/10 18:00', '2009/7/10 19:00', '2009/7/10 20:00', '2009/7/10 21:00', '2009/7/10 22:00', '2009/7/10 23:00',
                '2009/7/11 0:00', '2009/7/11 1:00', '2009/7/11 2:00', '2009/7/11 3:00', '2009/7/11 4:00', '2009/7/11 5:00', '2009/7/11 6:00', '2009/7/11 7:00', '2009/7/11 8:00', '2009/7/11 9:00', '2009/7/11 10:00', '2009/7/11 11:00', '2009/7/11 12:00', '2009/7/11 13:00', '2009/7/11 14:00', '2009/7/11 15:00', '2009/7/11 16:00', '2009/7/11 17:00', '2009/7/11 18:00', '2009/7/11 19:00', '2009/7/11 20:00', '2009/7/11 21:00', '2009/7/11 22:00', '2009/7/11 23:00',
                '2009/7/12 0:00', '2009/7/12 1:00', '2009/7/12 2:00', '2009/7/12 3:00', '2009/7/12 4:00', '2009/7/12 5:00', '2009/7/12 6:00', '2009/7/12 7:00', '2009/7/12 8:00', '2009/7/12 9:00', '2009/7/12 10:00', '2009/7/12 11:00', '2009/7/12 12:00', '2009/7/12 13:00', '2009/7/12 14:00', '2009/7/12 15:00', '2009/7/12 16:00', '2009/7/12 17:00', '2009/7/12 18:00', '2009/7/12 19:00', '2009/7/12 20:00', '2009/7/12 21:00', '2009/7/12 22:00', '2009/7/12 23:00',
                '2009/7/13 0:00', '2009/7/13 1:00', '2009/7/13 2:00', '2009/7/13 3:00', '2009/7/13 4:00', '2009/7/13 5:00', '2009/7/13 6:00', '2009/7/13 7:00', '2009/7/13 8:00', '2009/7/13 9:00', '2009/7/13 10:00', '2009/7/13 11:00', '2009/7/13 12:00', '2009/7/13 13:00', '2009/7/13 14:00', '2009/7/13 15:00', '2009/7/13 16:00', '2009/7/13 17:00', '2009/7/13 18:00', '2009/7/13 19:00', '2009/7/13 20:00', '2009/7/13 21:00', '2009/7/13 22:00', '2009/7/13 23:00',
                '2009/7/14 0:00', '2009/7/14 1:00', '2009/7/14 2:00', '2009/7/14 3:00', '2009/7/14 4:00', '2009/7/14 5:00', '2009/7/14 6:00', '2009/7/14 7:00', '2009/7/14 8:00', '2009/7/14 9:00', '2009/7/14 10:00', '2009/7/14 11:00', '2009/7/14 12:00', '2009/7/14 13:00', '2009/7/14 14:00', '2009/7/14 15:00', '2009/7/14 16:00', '2009/7/14 17:00', '2009/7/14 18:00', '2009/7/14 19:00', '2009/7/14 20:00', '2009/7/14 21:00', '2009/7/14 22:00', '2009/7/14 23:00',
                '2009/7/15 0:00', '2009/7/15 1:00', '2009/7/15 2:00', '2009/7/15 3:00', '2009/7/15 4:00', '2009/7/15 5:00', '2009/7/15 6:00', '2009/7/15 7:00', '2009/7/15 8:00', '2009/7/15 9:00', '2009/7/15 10:00', '2009/7/15 11:00', '2009/7/15 12:00', '2009/7/15 13:00', '2009/7/15 14:00', '2009/7/15 15:00', '2009/7/15 16:00', '2009/7/15 17:00', '2009/7/15 18:00', '2009/7/15 19:00', '2009/7/15 20:00', '2009/7/15 21:00', '2009/7/15 22:00', '2009/7/15 23:00',
                '2009/7/16 0:00', '2009/7/16 1:00', '2009/7/16 2:00', '2009/7/16 3:00', '2009/7/16 4:00', '2009/7/16 5:00', '2009/7/16 6:00', '2009/7/16 7:00', '2009/7/16 8:00', '2009/7/16 9:00', '2009/7/16 10:00', '2009/7/16 11:00', '2009/7/16 12:00', '2009/7/16 13:00', '2009/7/16 14:00', '2009/7/16 15:00', '2009/7/16 16:00', '2009/7/16 17:00', '2009/7/16 18:00', '2009/7/16 19:00', '2009/7/16 20:00', '2009/7/16 21:00', '2009/7/16 22:00', '2009/7/16 23:00',
                '2009/7/17 0:00', '2009/7/17 1:00', '2009/7/17 2:00', '2009/7/17 3:00', '2009/7/17 4:00', '2009/7/17 5:00', '2009/7/17 6:00', '2009/7/17 7:00', '2009/7/17 8:00', '2009/7/17 9:00', '2009/7/17 10:00', '2009/7/17 11:00', '2009/7/17 12:00', '2009/7/17 13:00', '2009/7/17 14:00', '2009/7/17 15:00', '2009/7/17 16:00', '2009/7/17 17:00', '2009/7/17 18:00', '2009/7/17 19:00', '2009/7/17 20:00', '2009/7/17 21:00', '2009/7/17 22:00', '2009/7/17 23:00',
                '2009/7/18 0:00', '2009/7/18 1:00', '2009/7/18 2:00', '2009/7/18 3:00', '2009/7/18 4:00', '2009/7/18 5:00', '2009/7/18 6:00', '2009/7/18 7:00', '2009/7/18 8:00', '2009/7/18 9:00', '2009/7/18 10:00', '2009/7/18 11:00', '2009/7/18 12:00', '2009/7/18 13:00', '2009/7/18 14:00', '2009/7/18 15:00', '2009/7/18 16:00', '2009/7/18 17:00', '2009/7/18 18:00', '2009/7/18 19:00', '2009/7/18 20:00', '2009/7/18 21:00', '2009/7/18 22:00', '2009/7/18 23:00',
                '2009/7/19 0:00', '2009/7/19 1:00', '2009/7/19 2:00', '2009/7/19 3:00', '2009/7/19 4:00', '2009/7/19 5:00', '2009/7/19 6:00', '2009/7/19 7:00', '2009/7/19 8:00', '2009/7/19 9:00', '2009/7/19 10:00', '2009/7/19 11:00', '2009/7/19 12:00', '2009/7/19 13:00', '2009/7/19 14:00', '2009/7/19 15:00', '2009/7/19 16:00', '2009/7/19 17:00', '2009/7/19 18:00', '2009/7/19 19:00', '2009/7/19 20:00', '2009/7/19 21:00', '2009/7/19 22:00', '2009/7/19 23:00',
                '2009/7/20 0:00', '2009/7/20 1:00', '2009/7/20 2:00', '2009/7/20 3:00', '2009/7/20 4:00', '2009/7/20 5:00', '2009/7/20 6:00', '2009/7/20 7:00', '2009/7/20 8:00', '2009/7/20 9:00', '2009/7/20 10:00', '2009/7/20 11:00', '2009/7/20 12:00', '2009/7/20 13:00', '2009/7/20 14:00', '2009/7/20 15:00', '2009/7/20 16:00', '2009/7/20 17:00', '2009/7/20 18:00', '2009/7/20 19:00', '2009/7/20 20:00', '2009/7/20 21:00', '2009/7/20 22:00', '2009/7/20 23:00',
                '2009/7/21 0:00', '2009/7/21 1:00', '2009/7/21 2:00', '2009/7/21 3:00', '2009/7/21 4:00', '2009/7/21 5:00', '2009/7/21 6:00', '2009/7/21 7:00', '2009/7/21 8:00', '2009/7/21 9:00', '2009/7/21 10:00', '2009/7/21 11:00', '2009/7/21 12:00', '2009/7/21 13:00', '2009/7/21 14:00', '2009/7/21 15:00', '2009/7/21 16:00', '2009/7/21 17:00', '2009/7/21 18:00', '2009/7/21 19:00', '2009/7/21 20:00', '2009/7/21 21:00', '2009/7/21 22:00', '2009/7/21 23:00',
                '2009/7/22 0:00', '2009/7/22 1:00', '2009/7/22 2:00', '2009/7/22 3:00', '2009/7/22 4:00', '2009/7/22 5:00', '2009/7/22 6:00', '2009/7/22 7:00', '2009/7/22 8:00', '2009/7/22 9:00', '2009/7/22 10:00', '2009/7/22 11:00', '2009/7/22 12:00', '2009/7/22 13:00', '2009/7/22 14:00', '2009/7/22 15:00', '2009/7/22 16:00', '2009/7/22 17:00', '2009/7/22 18:00', '2009/7/22 19:00', '2009/7/22 20:00', '2009/7/22 21:00', '2009/7/22 22:00', '2009/7/22 23:00',
                '2009/7/23 0:00', '2009/7/23 1:00', '2009/7/23 2:00', '2009/7/23 3:00', '2009/7/23 4:00', '2009/7/23 5:00', '2009/7/23 6:00', '2009/7/23 7:00', '2009/7/23 8:00', '2009/7/23 9:00', '2009/7/23 10:00', '2009/7/23 11:00', '2009/7/23 12:00', '2009/7/23 13:00', '2009/7/23 14:00', '2009/7/23 15:00', '2009/7/23 16:00', '2009/7/23 17:00', '2009/7/23 18:00', '2009/7/23 19:00', '2009/7/23 20:00', '2009/7/23 21:00', '2009/7/23 22:00', '2009/7/23 23:00',
                '2009/7/24 0:00', '2009/7/24 1:00', '2009/7/24 2:00', '2009/7/24 3:00', '2009/7/24 4:00', '2009/7/24 5:00', '2009/7/24 6:00', '2009/7/24 7:00', '2009/7/24 8:00', '2009/7/24 9:00', '2009/7/24 10:00', '2009/7/24 11:00', '2009/7/24 12:00', '2009/7/24 13:00', '2009/7/24 14:00', '2009/7/24 15:00', '2009/7/24 16:00', '2009/7/24 17:00', '2009/7/24 18:00', '2009/7/24 19:00', '2009/7/24 20:00', '2009/7/24 21:00', '2009/7/24 22:00', '2009/7/24 23:00',
                '2009/7/25 0:00', '2009/7/25 1:00', '2009/7/25 2:00', '2009/7/25 3:00', '2009/7/25 4:00', '2009/7/25 5:00', '2009/7/25 6:00', '2009/7/25 7:00', '2009/7/25 8:00', '2009/7/25 9:00', '2009/7/25 10:00', '2009/7/25 11:00', '2009/7/25 12:00', '2009/7/25 13:00', '2009/7/25 14:00', '2009/7/25 15:00', '2009/7/25 16:00', '2009/7/25 17:00', '2009/7/25 18:00', '2009/7/25 19:00', '2009/7/25 20:00', '2009/7/25 21:00', '2009/7/25 22:00', '2009/7/25 23:00',
                '2009/7/26 0:00', '2009/7/26 1:00', '2009/7/26 2:00', '2009/7/26 3:00', '2009/7/26 4:00', '2009/7/26 5:00', '2009/7/26 6:00', '2009/7/26 7:00', '2009/7/26 8:00', '2009/7/26 9:00', '2009/7/26 10:00', '2009/7/26 11:00', '2009/7/26 12:00', '2009/7/26 13:00', '2009/7/26 14:00', '2009/7/26 15:00', '2009/7/26 16:00', '2009/7/26 17:00', '2009/7/26 18:00', '2009/7/26 19:00', '2009/7/26 20:00', '2009/7/26 21:00', '2009/7/26 22:00', '2009/7/26 23:00',
                '2009/7/27 0:00', '2009/7/27 1:00', '2009/7/27 2:00', '2009/7/27 3:00', '2009/7/27 4:00', '2009/7/27 5:00', '2009/7/27 6:00', '2009/7/27 7:00', '2009/7/27 8:00', '2009/7/27 9:00', '2009/7/27 10:00', '2009/7/27 11:00', '2009/7/27 12:00', '2009/7/27 13:00', '2009/7/27 14:00', '2009/7/27 15:00', '2009/7/27 16:00', '2009/7/27 17:00', '2009/7/27 18:00', '2009/7/27 19:00', '2009/7/27 20:00', '2009/7/27 21:00', '2009/7/27 22:00', '2009/7/27 23:00',
                '2009/7/28 0:00', '2009/7/28 1:00', '2009/7/28 2:00', '2009/7/28 3:00', '2009/7/28 4:00', '2009/7/28 5:00', '2009/7/28 6:00', '2009/7/28 7:00', '2009/7/28 8:00', '2009/7/28 9:00', '2009/7/28 10:00', '2009/7/28 11:00', '2009/7/28 12:00', '2009/7/28 13:00', '2009/7/28 14:00', '2009/7/28 15:00', '2009/7/28 16:00', '2009/7/28 17:00', '2009/7/28 18:00', '2009/7/28 19:00', '2009/7/28 20:00', '2009/7/28 21:00', '2009/7/28 22:00', '2009/7/28 23:00',
                '2009/7/29 0:00', '2009/7/29 1:00', '2009/7/29 2:00', '2009/7/29 3:00', '2009/7/29 4:00', '2009/7/29 5:00', '2009/7/29 6:00', '2009/7/29 7:00', '2009/7/29 8:00', '2009/7/29 9:00', '2009/7/29 10:00', '2009/7/29 11:00', '2009/7/29 12:00', '2009/7/29 13:00', '2009/7/29 14:00', '2009/7/29 15:00', '2009/7/29 16:00', '2009/7/29 17:00', '2009/7/29 18:00', '2009/7/29 19:00', '2009/7/29 20:00', '2009/7/29 21:00', '2009/7/29 22:00', '2009/7/29 23:00',
                '2009/7/30 0:00', '2009/7/30 1:00', '2009/7/30 2:00', '2009/7/30 3:00', '2009/7/30 4:00', '2009/7/30 5:00', '2009/7/30 6:00', '2009/7/30 7:00', '2009/7/30 8:00', '2009/7/30 9:00', '2009/7/30 10:00', '2009/7/30 11:00', '2009/7/30 12:00', '2009/7/30 13:00', '2009/7/30 14:00', '2009/7/30 15:00', '2009/7/30 16:00', '2009/7/30 17:00', '2009/7/30 18:00', '2009/7/30 19:00', '2009/7/30 20:00', '2009/7/30 21:00', '2009/7/30 22:00', '2009/7/30 23:00',
                '2009/7/31 0:00', '2009/7/31 1:00', '2009/7/31 2:00', '2009/7/31 3:00', '2009/7/31 4:00', '2009/7/31 5:00', '2009/7/31 6:00', '2009/7/31 7:00', '2009/7/31 8:00', '2009/7/31 9:00', '2009/7/31 10:00', '2009/7/31 11:00', '2009/7/31 12:00', '2009/7/31 13:00', '2009/7/31 14:00', '2009/7/31 15:00', '2009/7/31 16:00', '2009/7/31 17:00', '2009/7/31 18:00', '2009/7/31 19:00', '2009/7/31 20:00', '2009/7/31 21:00', '2009/7/31 22:00', '2009/7/31 23:00',
                '2009/8/1 0:00', '2009/8/1 1:00', '2009/8/1 2:00', '2009/8/1 3:00', '2009/8/1 4:00', '2009/8/1 5:00', '2009/8/1 6:00', '2009/8/1 7:00', '2009/8/1 8:00', '2009/8/1 9:00', '2009/8/1 10:00', '2009/8/1 11:00', '2009/8/1 12:00', '2009/8/1 13:00', '2009/8/1 14:00', '2009/8/1 15:00', '2009/8/1 16:00', '2009/8/1 17:00', '2009/8/1 18:00', '2009/8/1 19:00', '2009/8/1 20:00', '2009/8/1 21:00', '2009/8/1 22:00', '2009/8/1 23:00', '2009/8/2 0:00', '2009/8/2 1:00', '2009/8/2 2:00', '2009/8/2 3:00', '2009/8/2 4:00', '2009/8/2 5:00', '2009/8/2 6:00', '2009/8/2 7:00', '2009/8/2 8:00', '2009/8/2 9:00', '2009/8/2 10:00', '2009/8/2 11:00', '2009/8/2 12:00', '2009/8/2 13:00', '2009/8/2 14:00', '2009/8/2 15:00', '2009/8/2 16:00', '2009/8/2 17:00', '2009/8/2 18:00', '2009/8/2 19:00', '2009/8/2 20:00', '2009/8/2 21:00', '2009/8/2 22:00', '2009/8/2 23:00', '2009/8/3 0:00', '2009/8/3 1:00', '2009/8/3 2:00', '2009/8/3 3:00', '2009/8/3 4:00', '2009/8/3 5:00', '2009/8/3 6:00', '2009/8/3 7:00', '2009/8/3 8:00', '2009/8/3 9:00', '2009/8/3 10:00', '2009/8/3 11:00', '2009/8/3 12:00', '2009/8/3 13:00', '2009/8/3 14:00', '2009/8/3 15:00', '2009/8/3 16:00', '2009/8/3 17:00', '2009/8/3 18:00', '2009/8/3 19:00', '2009/8/3 20:00', '2009/8/3 21:00', '2009/8/3 22:00', '2009/8/3 23:00', '2009/8/4 0:00', '2009/8/4 1:00', '2009/8/4 2:00', '2009/8/4 3:00', '2009/8/4 4:00', '2009/8/4 5:00', '2009/8/4 6:00', '2009/8/4 7:00', '2009/8/4 8:00', '2009/8/4 9:00', '2009/8/4 10:00', '2009/8/4 11:00', '2009/8/4 12:00', '2009/8/4 13:00', '2009/8/4 14:00', '2009/8/4 15:00', '2009/8/4 16:00', '2009/8/4 17:00', '2009/8/4 18:00', '2009/8/4 19:00', '2009/8/4 20:00', '2009/8/4 21:00', '2009/8/4 22:00', '2009/8/4 23:00', '2009/8/5 0:00', '2009/8/5 1:00', '2009/8/5 2:00', '2009/8/5 3:00', '2009/8/5 4:00', '2009/8/5 5:00', '2009/8/5 6:00', '2009/8/5 7:00', '2009/8/5 8:00', '2009/8/5 9:00', '2009/8/5 10:00', '2009/8/5 11:00', '2009/8/5 12:00', '2009/8/5 13:00', '2009/8/5 14:00', '2009/8/5 15:00', '2009/8/5 16:00', '2009/8/5 17:00', '2009/8/5 18:00', '2009/8/5 19:00', '2009/8/5 20:00', '2009/8/5 21:00', '2009/8/5 22:00', '2009/8/5 23:00', '2009/8/6 0:00', '2009/8/6 1:00', '2009/8/6 2:00', '2009/8/6 3:00', '2009/8/6 4:00', '2009/8/6 5:00', '2009/8/6 6:00', '2009/8/6 7:00', '2009/8/6 8:00', '2009/8/6 9:00', '2009/8/6 10:00', '2009/8/6 11:00', '2009/8/6 12:00', '2009/8/6 13:00', '2009/8/6 14:00', '2009/8/6 15:00', '2009/8/6 16:00', '2009/8/6 17:00', '2009/8/6 18:00', '2009/8/6 19:00', '2009/8/6 20:00', '2009/8/6 21:00', '2009/8/6 22:00', '2009/8/6 23:00', '2009/8/7 0:00', '2009/8/7 1:00', '2009/8/7 2:00', '2009/8/7 3:00', '2009/8/7 4:00', '2009/8/7 5:00', '2009/8/7 6:00', '2009/8/7 7:00', '2009/8/7 8:00', '2009/8/7 9:00', '2009/8/7 10:00', '2009/8/7 11:00', '2009/8/7 12:00', '2009/8/7 13:00', '2009/8/7 14:00', '2009/8/7 15:00', '2009/8/7 16:00', '2009/8/7 17:00', '2009/8/7 18:00', '2009/8/7 19:00', '2009/8/7 20:00', '2009/8/7 21:00', '2009/8/7 22:00', '2009/8/7 23:00', '2009/8/8 0:00', '2009/8/8 1:00', '2009/8/8 2:00', '2009/8/8 3:00', '2009/8/8 4:00', '2009/8/8 5:00', '2009/8/8 6:00', '2009/8/8 7:00', '2009/8/8 8:00', '2009/8/8 9:00', '2009/8/8 10:00', '2009/8/8 11:00', '2009/8/8 12:00', '2009/8/8 13:00', '2009/8/8 14:00', '2009/8/8 15:00', '2009/8/8 16:00', '2009/8/8 17:00', '2009/8/8 18:00', '2009/8/8 19:00', '2009/8/8 20:00', '2009/8/8 21:00', '2009/8/8 22:00', '2009/8/8 23:00', '2009/8/9 0:00', '2009/8/9 1:00', '2009/8/9 2:00', '2009/8/9 3:00', '2009/8/9 4:00', '2009/8/9 5:00', '2009/8/9 6:00', '2009/8/9 7:00', '2009/8/9 8:00', '2009/8/9 9:00', '2009/8/9 10:00', '2009/8/9 11:00', '2009/8/9 12:00', '2009/8/9 13:00', '2009/8/9 14:00', '2009/8/9 15:00', '2009/8/9 16:00', '2009/8/9 17:00', '2009/8/9 18:00', '2009/8/9 19:00', '2009/8/9 20:00', '2009/8/9 21:00', '2009/8/9 22:00', '2009/8/9 23:00', '2009/8/10 0:00', '2009/8/10 1:00', '2009/8/10 2:00', '2009/8/10 3:00', '2009/8/10 4:00', '2009/8/10 5:00', '2009/8/10 6:00', '2009/8/10 7:00', '2009/8/10 8:00', '2009/8/10 9:00', '2009/8/10 10:00', '2009/8/10 11:00', '2009/8/10 12:00', '2009/8/10 13:00', '2009/8/10 14:00', '2009/8/10 15:00', '2009/8/10 16:00', '2009/8/10 17:00', '2009/8/10 18:00', '2009/8/10 19:00', '2009/8/10 20:00', '2009/8/10 21:00', '2009/8/10 22:00', '2009/8/10 23:00', '2009/8/11 0:00', '2009/8/11 1:00', '2009/8/11 2:00', '2009/8/11 3:00', '2009/8/11 4:00', '2009/8/11 5:00', '2009/8/11 6:00', '2009/8/11 7:00', '2009/8/11 8:00', '2009/8/11 9:00', '2009/8/11 10:00', '2009/8/11 11:00', '2009/8/11 12:00', '2009/8/11 13:00', '2009/8/11 14:00', '2009/8/11 15:00', '2009/8/11 16:00', '2009/8/11 17:00', '2009/8/11 18:00', '2009/8/11 19:00', '2009/8/11 20:00', '2009/8/11 21:00', '2009/8/11 22:00', '2009/8/11 23:00', '2009/8/12 0:00', '2009/8/12 1:00', '2009/8/12 2:00', '2009/8/12 3:00', '2009/8/12 4:00', '2009/8/12 5:00', '2009/8/12 6:00', '2009/8/12 7:00', '2009/8/12 8:00', '2009/8/12 9:00', '2009/8/12 10:00', '2009/8/12 11:00', '2009/8/12 12:00', '2009/8/12 13:00', '2009/8/12 14:00', '2009/8/12 15:00', '2009/8/12 16:00', '2009/8/12 17:00', '2009/8/12 18:00', '2009/8/12 19:00', '2009/8/12 20:00', '2009/8/12 21:00', '2009/8/12 22:00', '2009/8/12 23:00', '2009/8/13 0:00', '2009/8/13 1:00', '2009/8/13 2:00', '2009/8/13 3:00', '2009/8/13 4:00', '2009/8/13 5:00', '2009/8/13 6:00', '2009/8/13 7:00', '2009/8/13 8:00', '2009/8/13 9:00', '2009/8/13 10:00', '2009/8/13 11:00', '2009/8/13 12:00', '2009/8/13 13:00', '2009/8/13 14:00', '2009/8/13 15:00', '2009/8/13 16:00', '2009/8/13 17:00', '2009/8/13 18:00', '2009/8/13 19:00', '2009/8/13 20:00', '2009/8/13 21:00', '2009/8/13 22:00', '2009/8/13 23:00', '2009/8/14 0:00', '2009/8/14 1:00', '2009/8/14 2:00', '2009/8/14 3:00', '2009/8/14 4:00', '2009/8/14 5:00', '2009/8/14 6:00', '2009/8/14 7:00', '2009/8/14 8:00', '2009/8/14 9:00', '2009/8/14 10:00', '2009/8/14 11:00', '2009/8/14 12:00', '2009/8/14 13:00', '2009/8/14 14:00', '2009/8/14 15:00', '2009/8/14 16:00', '2009/8/14 17:00', '2009/8/14 18:00', '2009/8/14 19:00', '2009/8/14 20:00', '2009/8/14 21:00', '2009/8/14 22:00', '2009/8/14 23:00', '2009/8/15 0:00', '2009/8/15 1:00', '2009/8/15 2:00', '2009/8/15 3:00', '2009/8/15 4:00', '2009/8/15 5:00', '2009/8/15 6:00', '2009/8/15 7:00', '2009/8/15 8:00', '2009/8/15 9:00', '2009/8/15 10:00', '2009/8/15 11:00', '2009/8/15 12:00', '2009/8/15 13:00', '2009/8/15 14:00', '2009/8/15 15:00', '2009/8/15 16:00', '2009/8/15 17:00', '2009/8/15 18:00', '2009/8/15 19:00', '2009/8/15 20:00', '2009/8/15 21:00', '2009/8/15 22:00', '2009/8/15 23:00', '2009/8/16 0:00', '2009/8/16 1:00', '2009/8/16 2:00', '2009/8/16 3:00', '2009/8/16 4:00', '2009/8/16 5:00', '2009/8/16 6:00', '2009/8/16 7:00', '2009/8/16 8:00', '2009/8/16 9:00', '2009/8/16 10:00', '2009/8/16 11:00', '2009/8/16 12:00', '2009/8/16 13:00', '2009/8/16 14:00', '2009/8/16 15:00', '2009/8/16 16:00', '2009/8/16 17:00', '2009/8/16 18:00', '2009/8/16 19:00', '2009/8/16 20:00', '2009/8/16 21:00', '2009/8/16 22:00', '2009/8/16 23:00', '2009/8/17 0:00', '2009/8/17 1:00', '2009/8/17 2:00', '2009/8/17 3:00', '2009/8/17 4:00', '2009/8/17 5:00', '2009/8/17 6:00', '2009/8/17 7:00', '2009/8/17 8:00', '2009/8/17 9:00', '2009/8/17 10:00', '2009/8/17 11:00', '2009/8/17 12:00', '2009/8/17 13:00', '2009/8/17 14:00', '2009/8/17 15:00', '2009/8/17 16:00', '2009/8/17 17:00', '2009/8/17 18:00', '2009/8/17 19:00', '2009/8/17 20:00', '2009/8/17 21:00', '2009/8/17 22:00', '2009/8/17 23:00', '2009/8/18 0:00', '2009/8/18 1:00', '2009/8/18 2:00', '2009/8/18 3:00', '2009/8/18 4:00', '2009/8/18 5:00', '2009/8/18 6:00', '2009/8/18 7:00', '2009/8/18 8:00', '2009/8/18 9:00', '2009/8/18 10:00', '2009/8/18 11:00', '2009/8/18 12:00', '2009/8/18 13:00', '2009/8/18 14:00', '2009/8/18 15:00', '2009/8/18 16:00', '2009/8/18 17:00', '2009/8/18 18:00', '2009/8/18 19:00', '2009/8/18 20:00', '2009/8/18 21:00', '2009/8/18 22:00', '2009/8/18 23:00', '2009/8/19 0:00', '2009/8/19 1:00', '2009/8/19 2:00', '2009/8/19 3:00', '2009/8/19 4:00', '2009/8/19 5:00', '2009/8/19 6:00', '2009/8/19 7:00', '2009/8/19 8:00', '2009/8/19 9:00', '2009/8/19 10:00', '2009/8/19 11:00', '2009/8/19 12:00', '2009/8/19 13:00', '2009/8/19 14:00', '2009/8/19 15:00', '2009/8/19 16:00', '2009/8/19 17:00', '2009/8/19 18:00', '2009/8/19 19:00', '2009/8/19 20:00', '2009/8/19 21:00', '2009/8/19 22:00', '2009/8/19 23:00', '2009/8/20 0:00', '2009/8/20 1:00', '2009/8/20 2:00', '2009/8/20 3:00', '2009/8/20 4:00', '2009/8/20 5:00', '2009/8/20 6:00', '2009/8/20 7:00', '2009/8/20 8:00', '2009/8/20 9:00', '2009/8/20 10:00', '2009/8/20 11:00', '2009/8/20 12:00', '2009/8/20 13:00', '2009/8/20 14:00', '2009/8/20 15:00', '2009/8/20 16:00', '2009/8/20 17:00', '2009/8/20 18:00', '2009/8/20 19:00', '2009/8/20 20:00', '2009/8/20 21:00', '2009/8/20 22:00', '2009/8/20 23:00', '2009/8/21 0:00', '2009/8/21 1:00', '2009/8/21 2:00', '2009/8/21 3:00', '2009/8/21 4:00', '2009/8/21 5:00', '2009/8/21 6:00', '2009/8/21 7:00', '2009/8/21 8:00', '2009/8/21 9:00', '2009/8/21 10:00', '2009/8/21 11:00', '2009/8/21 12:00', '2009/8/21 13:00', '2009/8/21 14:00', '2009/8/21 15:00', '2009/8/21 16:00', '2009/8/21 17:00', '2009/8/21 18:00', '2009/8/21 19:00', '2009/8/21 20:00', '2009/8/21 21:00', '2009/8/21 22:00', '2009/8/21 23:00', '2009/8/22 0:00', '2009/8/22 1:00', '2009/8/22 2:00', '2009/8/22 3:00', '2009/8/22 4:00', '2009/8/22 5:00', '2009/8/22 6:00', '2009/8/22 7:00', '2009/8/22 8:00', '2009/8/22 9:00', '2009/8/22 10:00', '2009/8/22 11:00', '2009/8/22 12:00', '2009/8/22 13:00', '2009/8/22 14:00', '2009/8/22 15:00', '2009/8/22 16:00', '2009/8/22 17:00', '2009/8/22 18:00', '2009/8/22 19:00', '2009/8/22 20:00', '2009/8/22 21:00', '2009/8/22 22:00', '2009/8/22 23:00', '2009/8/23 0:00', '2009/8/23 1:00', '2009/8/23 2:00', '2009/8/23 3:00', '2009/8/23 4:00', '2009/8/23 5:00', '2009/8/23 6:00', '2009/8/23 7:00', '2009/8/23 8:00', '2009/8/23 9:00', '2009/8/23 10:00', '2009/8/23 11:00', '2009/8/23 12:00', '2009/8/23 13:00', '2009/8/23 14:00', '2009/8/23 15:00', '2009/8/23 16:00', '2009/8/23 17:00', '2009/8/23 18:00', '2009/8/23 19:00', '2009/8/23 20:00', '2009/8/23 21:00', '2009/8/23 22:00', '2009/8/23 23:00', '2009/8/24 0:00', '2009/8/24 1:00', '2009/8/24 2:00', '2009/8/24 3:00', '2009/8/24 4:00', '2009/8/24 5:00', '2009/8/24 6:00', '2009/8/24 7:00', '2009/8/24 8:00', '2009/8/24 9:00', '2009/8/24 10:00', '2009/8/24 11:00', '2009/8/24 12:00', '2009/8/24 13:00', '2009/8/24 14:00', '2009/8/24 15:00', '2009/8/24 16:00', '2009/8/24 17:00', '2009/8/24 18:00', '2009/8/24 19:00', '2009/8/24 20:00', '2009/8/24 21:00', '2009/8/24 22:00', '2009/8/24 23:00', '2009/8/25 0:00', '2009/8/25 1:00', '2009/8/25 2:00', '2009/8/25 3:00', '2009/8/25 4:00', '2009/8/25 5:00', '2009/8/25 6:00', '2009/8/25 7:00', '2009/8/25 8:00', '2009/8/25 9:00', '2009/8/25 10:00', '2009/8/25 11:00', '2009/8/25 12:00', '2009/8/25 13:00', '2009/8/25 14:00', '2009/8/25 15:00', '2009/8/25 16:00', '2009/8/25 17:00', '2009/8/25 18:00', '2009/8/25 19:00', '2009/8/25 20:00', '2009/8/25 21:00', '2009/8/25 22:00', '2009/8/25 23:00', '2009/8/26 0:00', '2009/8/26 1:00', '2009/8/26 2:00', '2009/8/26 3:00', '2009/8/26 4:00', '2009/8/26 5:00', '2009/8/26 6:00', '2009/8/26 7:00', '2009/8/26 8:00', '2009/8/26 9:00', '2009/8/26 10:00', '2009/8/26 11:00', '2009/8/26 12:00', '2009/8/26 13:00', '2009/8/26 14:00', '2009/8/26 15:00', '2009/8/26 16:00', '2009/8/26 17:00', '2009/8/26 18:00', '2009/8/26 19:00', '2009/8/26 20:00', '2009/8/26 21:00', '2009/8/26 22:00', '2009/8/26 23:00', '2009/8/27 0:00', '2009/8/27 1:00', '2009/8/27 2:00', '2009/8/27 3:00', '2009/8/27 4:00', '2009/8/27 5:00', '2009/8/27 6:00', '2009/8/27 7:00', '2009/8/27 8:00', '2009/8/27 9:00', '2009/8/27 10:00', '2009/8/27 11:00', '2009/8/27 12:00', '2009/8/27 13:00', '2009/8/27 14:00', '2009/8/27 15:00', '2009/8/27 16:00', '2009/8/27 17:00', '2009/8/27 18:00', '2009/8/27 19:00', '2009/8/27 20:00', '2009/8/27 21:00', '2009/8/27 22:00', '2009/8/27 23:00', '2009/8/28 0:00', '2009/8/28 1:00', '2009/8/28 2:00', '2009/8/28 3:00', '2009/8/28 4:00', '2009/8/28 5:00', '2009/8/28 6:00', '2009/8/28 7:00', '2009/8/28 8:00', '2009/8/28 9:00', '2009/8/28 10:00', '2009/8/28 11:00', '2009/8/28 12:00', '2009/8/28 13:00', '2009/8/28 14:00', '2009/8/28 15:00', '2009/8/28 16:00', '2009/8/28 17:00', '2009/8/28 18:00', '2009/8/28 19:00', '2009/8/28 20:00', '2009/8/28 21:00', '2009/8/28 22:00', '2009/8/28 23:00', '2009/8/29 0:00', '2009/8/29 1:00', '2009/8/29 2:00', '2009/8/29 3:00', '2009/8/29 4:00', '2009/8/29 5:00', '2009/8/29 6:00', '2009/8/29 7:00', '2009/8/29 8:00', '2009/8/29 9:00', '2009/8/29 10:00', '2009/8/29 11:00', '2009/8/29 12:00', '2009/8/29 13:00', '2009/8/29 14:00', '2009/8/29 15:00', '2009/8/29 16:00', '2009/8/29 17:00', '2009/8/29 18:00', '2009/8/29 19:00', '2009/8/29 20:00', '2009/8/29 21:00', '2009/8/29 22:00', '2009/8/29 23:00', '2009/8/30 0:00', '2009/8/30 1:00', '2009/8/30 2:00', '2009/8/30 3:00', '2009/8/30 4:00', '2009/8/30 5:00', '2009/8/30 6:00', '2009/8/30 7:00', '2009/8/30 8:00', '2009/8/30 9:00', '2009/8/30 10:00', '2009/8/30 11:00', '2009/8/30 12:00', '2009/8/30 13:00', '2009/8/30 14:00', '2009/8/30 15:00', '2009/8/30 16:00', '2009/8/30 17:00', '2009/8/30 18:00', '2009/8/30 19:00', '2009/8/30 20:00', '2009/8/30 21:00', '2009/8/30 22:00', '2009/8/30 23:00', '2009/8/31 0:00', '2009/8/31 1:00', '2009/8/31 2:00', '2009/8/31 3:00', '2009/8/31 4:00', '2009/8/31 5:00', '2009/8/31 6:00', '2009/8/31 7:00', '2009/8/31 8:00', '2009/8/31 9:00', '2009/8/31 10:00', '2009/8/31 11:00', '2009/8/31 12:00', '2009/8/31 13:00', '2009/8/31 14:00', '2009/8/31 15:00', '2009/8/31 16:00', '2009/8/31 17:00', '2009/8/31 18:00', '2009/8/31 19:00', '2009/8/31 20:00', '2009/8/31 21:00', '2009/8/31 22:00', '2009/8/31 23:00',
                '2009/9/1 0:00', '2009/9/1 1:00', '2009/9/1 2:00', '2009/9/1 3:00', '2009/9/1 4:00', '2009/9/1 5:00', '2009/9/1 6:00', '2009/9/1 7:00', '2009/9/1 8:00', '2009/9/1 9:00', '2009/9/1 10:00', '2009/9/1 11:00', '2009/9/1 12:00', '2009/9/1 13:00', '2009/9/1 14:00', '2009/9/1 15:00', '2009/9/1 16:00', '2009/9/1 17:00', '2009/9/1 18:00', '2009/9/1 19:00', '2009/9/1 20:00', '2009/9/1 21:00', '2009/9/1 22:00', '2009/9/1 23:00', '2009/9/2 0:00', '2009/9/2 1:00', '2009/9/2 2:00', '2009/9/2 3:00', '2009/9/2 4:00', '2009/9/2 5:00', '2009/9/2 6:00', '2009/9/2 7:00', '2009/9/2 8:00', '2009/9/2 9:00', '2009/9/2 10:00', '2009/9/2 11:00', '2009/9/2 12:00', '2009/9/2 13:00', '2009/9/2 14:00', '2009/9/2 15:00', '2009/9/2 16:00', '2009/9/2 17:00', '2009/9/2 18:00', '2009/9/2 19:00', '2009/9/2 20:00', '2009/9/2 21:00', '2009/9/2 22:00', '2009/9/2 23:00', '2009/9/3 0:00', '2009/9/3 1:00', '2009/9/3 2:00', '2009/9/3 3:00', '2009/9/3 4:00', '2009/9/3 5:00', '2009/9/3 6:00', '2009/9/3 7:00', '2009/9/3 8:00', '2009/9/3 9:00', '2009/9/3 10:00', '2009/9/3 11:00', '2009/9/3 12:00', '2009/9/3 13:00', '2009/9/3 14:00', '2009/9/3 15:00', '2009/9/3 16:00', '2009/9/3 17:00', '2009/9/3 18:00', '2009/9/3 19:00', '2009/9/3 20:00', '2009/9/3 21:00', '2009/9/3 22:00', '2009/9/3 23:00', '2009/9/4 0:00', '2009/9/4 1:00', '2009/9/4 2:00', '2009/9/4 3:00', '2009/9/4 4:00', '2009/9/4 5:00', '2009/9/4 6:00', '2009/9/4 7:00', '2009/9/4 8:00', '2009/9/4 9:00', '2009/9/4 10:00', '2009/9/4 11:00', '2009/9/4 12:00', '2009/9/4 13:00', '2009/9/4 14:00', '2009/9/4 15:00', '2009/9/4 16:00', '2009/9/4 17:00', '2009/9/4 18:00', '2009/9/4 19:00', '2009/9/4 20:00', '2009/9/4 21:00', '2009/9/4 22:00', '2009/9/4 23:00', '2009/9/5 0:00', '2009/9/5 1:00', '2009/9/5 2:00', '2009/9/5 3:00', '2009/9/5 4:00', '2009/9/5 5:00', '2009/9/5 6:00', '2009/9/5 7:00', '2009/9/5 8:00', '2009/9/5 9:00', '2009/9/5 10:00', '2009/9/5 11:00', '2009/9/5 12:00', '2009/9/5 13:00', '2009/9/5 14:00', '2009/9/5 15:00', '2009/9/5 16:00', '2009/9/5 17:00', '2009/9/5 18:00', '2009/9/5 19:00', '2009/9/5 20:00', '2009/9/5 21:00', '2009/9/5 22:00', '2009/9/5 23:00', '2009/9/6 0:00', '2009/9/6 1:00', '2009/9/6 2:00', '2009/9/6 3:00', '2009/9/6 4:00', '2009/9/6 5:00', '2009/9/6 6:00', '2009/9/6 7:00', '2009/9/6 8:00', '2009/9/6 9:00', '2009/9/6 10:00', '2009/9/6 11:00', '2009/9/6 12:00', '2009/9/6 13:00', '2009/9/6 14:00', '2009/9/6 15:00', '2009/9/6 16:00', '2009/9/6 17:00', '2009/9/6 18:00', '2009/9/6 19:00', '2009/9/6 20:00', '2009/9/6 21:00', '2009/9/6 22:00', '2009/9/6 23:00', '2009/9/7 0:00', '2009/9/7 1:00', '2009/9/7 2:00', '2009/9/7 3:00', '2009/9/7 4:00', '2009/9/7 5:00', '2009/9/7 6:00', '2009/9/7 7:00', '2009/9/7 8:00', '2009/9/7 9:00', '2009/9/7 10:00', '2009/9/7 11:00', '2009/9/7 12:00', '2009/9/7 13:00', '2009/9/7 14:00', '2009/9/7 15:00', '2009/9/7 16:00', '2009/9/7 17:00', '2009/9/7 18:00', '2009/9/7 19:00', '2009/9/7 20:00', '2009/9/7 21:00', '2009/9/7 22:00', '2009/9/7 23:00', '2009/9/8 0:00', '2009/9/8 1:00', '2009/9/8 2:00', '2009/9/8 3:00', '2009/9/8 4:00', '2009/9/8 5:00', '2009/9/8 6:00', '2009/9/8 7:00', '2009/9/8 8:00', '2009/9/8 9:00', '2009/9/8 10:00', '2009/9/8 11:00', '2009/9/8 12:00', '2009/9/8 13:00', '2009/9/8 14:00', '2009/9/8 15:00', '2009/9/8 16:00', '2009/9/8 17:00', '2009/9/8 18:00', '2009/9/8 19:00', '2009/9/8 20:00', '2009/9/8 21:00', '2009/9/8 22:00', '2009/9/8 23:00', '2009/9/9 0:00', '2009/9/9 1:00', '2009/9/9 2:00', '2009/9/9 3:00', '2009/9/9 4:00', '2009/9/9 5:00', '2009/9/9 6:00', '2009/9/9 7:00', '2009/9/9 8:00', '2009/9/9 9:00', '2009/9/9 10:00', '2009/9/9 11:00', '2009/9/9 12:00', '2009/9/9 13:00', '2009/9/9 14:00', '2009/9/9 15:00', '2009/9/9 16:00', '2009/9/9 17:00', '2009/9/9 18:00', '2009/9/9 19:00', '2009/9/9 20:00', '2009/9/9 21:00', '2009/9/9 22:00', '2009/9/9 23:00', '2009/9/10 0:00', '2009/9/10 1:00', '2009/9/10 2:00', '2009/9/10 3:00', '2009/9/10 4:00', '2009/9/10 5:00', '2009/9/10 6:00', '2009/9/10 7:00', '2009/9/10 8:00', '2009/9/10 9:00', '2009/9/10 10:00', '2009/9/10 11:00', '2009/9/10 12:00', '2009/9/10 13:00', '2009/9/10 14:00', '2009/9/10 15:00', '2009/9/10 16:00', '2009/9/10 17:00', '2009/9/10 18:00', '2009/9/10 19:00', '2009/9/10 20:00', '2009/9/10 21:00', '2009/9/10 22:00', '2009/9/10 23:00', '2009/9/11 0:00', '2009/9/11 1:00', '2009/9/11 2:00', '2009/9/11 3:00', '2009/9/11 4:00', '2009/9/11 5:00', '2009/9/11 6:00', '2009/9/11 7:00', '2009/9/11 8:00', '2009/9/11 9:00', '2009/9/11 10:00', '2009/9/11 11:00', '2009/9/11 12:00', '2009/9/11 13:00', '2009/9/11 14:00', '2009/9/11 15:00', '2009/9/11 16:00', '2009/9/11 17:00', '2009/9/11 18:00', '2009/9/11 19:00', '2009/9/11 20:00', '2009/9/11 21:00', '2009/9/11 22:00', '2009/9/11 23:00', '2009/9/12 0:00', '2009/9/12 1:00', '2009/9/12 2:00', '2009/9/12 3:00', '2009/9/12 4:00', '2009/9/12 5:00', '2009/9/12 6:00', '2009/9/12 7:00', '2009/9/12 8:00', '2009/9/12 9:00', '2009/9/12 10:00', '2009/9/12 11:00', '2009/9/12 12:00', '2009/9/12 13:00', '2009/9/12 14:00', '2009/9/12 15:00', '2009/9/12 16:00', '2009/9/12 17:00', '2009/9/12 18:00', '2009/9/12 19:00', '2009/9/12 20:00', '2009/9/12 21:00', '2009/9/12 22:00', '2009/9/12 23:00', '2009/9/13 0:00', '2009/9/13 1:00', '2009/9/13 2:00', '2009/9/13 3:00', '2009/9/13 4:00', '2009/9/13 5:00', '2009/9/13 6:00', '2009/9/13 7:00', '2009/9/13 8:00', '2009/9/13 9:00', '2009/9/13 10:00', '2009/9/13 11:00', '2009/9/13 12:00', '2009/9/13 13:00', '2009/9/13 14:00', '2009/9/13 15:00', '2009/9/13 16:00', '2009/9/13 17:00', '2009/9/13 18:00', '2009/9/13 19:00', '2009/9/13 20:00', '2009/9/13 21:00', '2009/9/13 22:00', '2009/9/13 23:00', '2009/9/14 0:00', '2009/9/14 1:00', '2009/9/14 2:00', '2009/9/14 3:00', '2009/9/14 4:00', '2009/9/14 5:00', '2009/9/14 6:00', '2009/9/14 7:00', '2009/9/14 8:00', '2009/9/14 9:00', '2009/9/14 10:00', '2009/9/14 11:00', '2009/9/14 12:00', '2009/9/14 13:00', '2009/9/14 14:00', '2009/9/14 15:00', '2009/9/14 16:00', '2009/9/14 17:00', '2009/9/14 18:00', '2009/9/14 19:00', '2009/9/14 20:00', '2009/9/14 21:00', '2009/9/14 22:00', '2009/9/14 23:00', '2009/9/15 0:00', '2009/9/15 1:00', '2009/9/15 2:00', '2009/9/15 3:00', '2009/9/15 4:00', '2009/9/15 5:00', '2009/9/15 6:00', '2009/9/15 7:00', '2009/9/15 8:00', '2009/9/15 9:00', '2009/9/15 10:00', '2009/9/15 11:00', '2009/9/15 12:00', '2009/9/15 13:00', '2009/9/15 14:00', '2009/9/15 15:00', '2009/9/15 16:00', '2009/9/15 17:00', '2009/9/15 18:00', '2009/9/15 19:00', '2009/9/15 20:00', '2009/9/15 21:00', '2009/9/15 22:00', '2009/9/15 23:00', '2009/9/16 0:00', '2009/9/16 1:00', '2009/9/16 2:00', '2009/9/16 3:00', '2009/9/16 4:00', '2009/9/16 5:00', '2009/9/16 6:00', '2009/9/16 7:00', '2009/9/16 8:00', '2009/9/16 9:00', '2009/9/16 10:00', '2009/9/16 11:00', '2009/9/16 12:00', '2009/9/16 13:00', '2009/9/16 14:00', '2009/9/16 15:00', '2009/9/16 16:00', '2009/9/16 17:00', '2009/9/16 18:00', '2009/9/16 19:00', '2009/9/16 20:00', '2009/9/16 21:00', '2009/9/16 22:00', '2009/9/16 23:00', '2009/9/17 0:00', '2009/9/17 1:00', '2009/9/17 2:00', '2009/9/17 3:00', '2009/9/17 4:00', '2009/9/17 5:00', '2009/9/17 6:00', '2009/9/17 7:00', '2009/9/17 8:00', '2009/9/17 9:00', '2009/9/17 10:00', '2009/9/17 11:00', '2009/9/17 12:00', '2009/9/17 13:00', '2009/9/17 14:00', '2009/9/17 15:00', '2009/9/17 16:00', '2009/9/17 17:00', '2009/9/17 18:00', '2009/9/17 19:00', '2009/9/17 20:00', '2009/9/17 21:00', '2009/9/17 22:00', '2009/9/17 23:00', '2009/9/18 0:00', '2009/9/18 1:00', '2009/9/18 2:00', '2009/9/18 3:00', '2009/9/18 4:00', '2009/9/18 5:00', '2009/9/18 6:00', '2009/9/18 7:00', '2009/9/18 8:00', '2009/9/18 9:00', '2009/9/18 10:00', '2009/9/18 11:00', '2009/9/18 12:00', '2009/9/18 13:00', '2009/9/18 14:00', '2009/9/18 15:00', '2009/9/18 16:00', '2009/9/18 17:00', '2009/9/18 18:00', '2009/9/18 19:00', '2009/9/18 20:00', '2009/9/18 21:00', '2009/9/18 22:00', '2009/9/18 23:00', '2009/9/19 0:00', '2009/9/19 1:00', '2009/9/19 2:00', '2009/9/19 3:00', '2009/9/19 4:00', '2009/9/19 5:00', '2009/9/19 6:00', '2009/9/19 7:00', '2009/9/19 8:00', '2009/9/19 9:00', '2009/9/19 10:00', '2009/9/19 11:00', '2009/9/19 12:00', '2009/9/19 13:00', '2009/9/19 14:00', '2009/9/19 15:00', '2009/9/19 16:00', '2009/9/19 17:00', '2009/9/19 18:00', '2009/9/19 19:00', '2009/9/19 20:00', '2009/9/19 21:00', '2009/9/19 22:00', '2009/9/19 23:00', '2009/9/20 0:00', '2009/9/20 1:00', '2009/9/20 2:00', '2009/9/20 3:00', '2009/9/20 4:00', '2009/9/20 5:00', '2009/9/20 6:00', '2009/9/20 7:00', '2009/9/20 8:00', '2009/9/20 9:00', '2009/9/20 10:00', '2009/9/20 11:00', '2009/9/20 12:00', '2009/9/20 13:00', '2009/9/20 14:00', '2009/9/20 15:00', '2009/9/20 16:00', '2009/9/20 17:00', '2009/9/20 18:00', '2009/9/20 19:00', '2009/9/20 20:00', '2009/9/20 21:00', '2009/9/20 22:00', '2009/9/20 23:00', '2009/9/21 0:00', '2009/9/21 1:00', '2009/9/21 2:00', '2009/9/21 3:00', '2009/9/21 4:00', '2009/9/21 5:00', '2009/9/21 6:00', '2009/9/21 7:00', '2009/9/21 8:00', '2009/9/21 9:00', '2009/9/21 10:00', '2009/9/21 11:00', '2009/9/21 12:00', '2009/9/21 13:00', '2009/9/21 14:00', '2009/9/21 15:00', '2009/9/21 16:00', '2009/9/21 17:00', '2009/9/21 18:00', '2009/9/21 19:00', '2009/9/21 20:00', '2009/9/21 21:00', '2009/9/21 22:00', '2009/9/21 23:00', '2009/9/22 0:00', '2009/9/22 1:00', '2009/9/22 2:00', '2009/9/22 3:00', '2009/9/22 4:00', '2009/9/22 5:00', '2009/9/22 6:00', '2009/9/22 7:00', '2009/9/22 8:00', '2009/9/22 9:00', '2009/9/22 10:00', '2009/9/22 11:00', '2009/9/22 12:00', '2009/9/22 13:00', '2009/9/22 14:00', '2009/9/22 15:00', '2009/9/22 16:00', '2009/9/22 17:00', '2009/9/22 18:00', '2009/9/22 19:00', '2009/9/22 20:00', '2009/9/22 21:00', '2009/9/22 22:00', '2009/9/22 23:00', '2009/9/23 0:00', '2009/9/23 1:00', '2009/9/23 2:00', '2009/9/23 3:00', '2009/9/23 4:00', '2009/9/23 5:00', '2009/9/23 6:00', '2009/9/23 7:00', '2009/9/23 8:00', '2009/9/23 9:00', '2009/9/23 10:00', '2009/9/23 11:00', '2009/9/23 12:00', '2009/9/23 13:00', '2009/9/23 14:00', '2009/9/23 15:00', '2009/9/23 16:00', '2009/9/23 17:00', '2009/9/23 18:00', '2009/9/23 19:00', '2009/9/23 20:00', '2009/9/23 21:00', '2009/9/23 22:00', '2009/9/23 23:00', '2009/9/24 0:00', '2009/9/24 1:00', '2009/9/24 2:00', '2009/9/24 3:00', '2009/9/24 4:00', '2009/9/24 5:00', '2009/9/24 6:00', '2009/9/24 7:00', '2009/9/24 8:00', '2009/9/24 9:00', '2009/9/24 10:00', '2009/9/24 11:00', '2009/9/24 12:00', '2009/9/24 13:00', '2009/9/24 14:00', '2009/9/24 15:00', '2009/9/24 16:00', '2009/9/24 17:00', '2009/9/24 18:00', '2009/9/24 19:00', '2009/9/24 20:00', '2009/9/24 21:00', '2009/9/24 22:00', '2009/9/24 23:00', '2009/9/25 0:00', '2009/9/25 1:00', '2009/9/25 2:00', '2009/9/25 3:00', '2009/9/25 4:00', '2009/9/25 5:00', '2009/9/25 6:00', '2009/9/25 7:00', '2009/9/25 8:00', '2009/9/25 9:00', '2009/9/25 10:00', '2009/9/25 11:00', '2009/9/25 12:00', '2009/9/25 13:00', '2009/9/25 14:00', '2009/9/25 15:00', '2009/9/25 16:00', '2009/9/25 17:00', '2009/9/25 18:00', '2009/9/25 19:00', '2009/9/25 20:00', '2009/9/25 21:00', '2009/9/25 22:00', '2009/9/25 23:00', '2009/9/26 0:00', '2009/9/26 1:00', '2009/9/26 2:00', '2009/9/26 3:00', '2009/9/26 4:00', '2009/9/26 5:00', '2009/9/26 6:00', '2009/9/26 7:00', '2009/9/26 8:00', '2009/9/26 9:00', '2009/9/26 10:00', '2009/9/26 11:00', '2009/9/26 12:00', '2009/9/26 13:00', '2009/9/26 14:00', '2009/9/26 15:00', '2009/9/26 16:00', '2009/9/26 17:00', '2009/9/26 18:00', '2009/9/26 19:00', '2009/9/26 20:00', '2009/9/26 21:00', '2009/9/26 22:00', '2009/9/26 23:00', '2009/9/27 0:00', '2009/9/27 1:00', '2009/9/27 2:00', '2009/9/27 3:00', '2009/9/27 4:00', '2009/9/27 5:00', '2009/9/27 6:00', '2009/9/27 7:00', '2009/9/27 8:00', '2009/9/27 9:00', '2009/9/27 10:00', '2009/9/27 11:00', '2009/9/27 12:00', '2009/9/27 13:00', '2009/9/27 14:00', '2009/9/27 15:00', '2009/9/27 16:00', '2009/9/27 17:00', '2009/9/27 18:00', '2009/9/27 19:00', '2009/9/27 20:00', '2009/9/27 21:00', '2009/9/27 22:00', '2009/9/27 23:00', '2009/9/28 0:00', '2009/9/28 1:00', '2009/9/28 2:00', '2009/9/28 3:00', '2009/9/28 4:00', '2009/9/28 5:00', '2009/9/28 6:00', '2009/9/28 7:00', '2009/9/28 8:00', '2009/9/28 9:00', '2009/9/28 10:00', '2009/9/28 11:00', '2009/9/28 12:00', '2009/9/28 13:00', '2009/9/28 14:00', '2009/9/28 15:00', '2009/9/28 16:00', '2009/9/28 17:00', '2009/9/28 18:00', '2009/9/28 19:00', '2009/9/28 20:00', '2009/9/28 21:00', '2009/9/28 22:00', '2009/9/28 23:00', '2009/9/29 0:00', '2009/9/29 1:00', '2009/9/29 2:00', '2009/9/29 3:00', '2009/9/29 4:00', '2009/9/29 5:00', '2009/9/29 6:00', '2009/9/29 7:00', '2009/9/29 8:00', '2009/9/29 9:00', '2009/9/29 10:00', '2009/9/29 11:00', '2009/9/29 12:00', '2009/9/29 13:00', '2009/9/29 14:00', '2009/9/29 15:00', '2009/9/29 16:00', '2009/9/29 17:00', '2009/9/29 18:00', '2009/9/29 19:00', '2009/9/29 20:00', '2009/9/29 21:00', '2009/9/29 22:00', '2009/9/29 23:00', '2009/9/30 0:00', '2009/9/30 1:00', '2009/9/30 2:00', '2009/9/30 3:00', '2009/9/30 4:00', '2009/9/30 5:00', '2009/9/30 6:00', '2009/9/30 7:00', '2009/9/30 8:00', '2009/9/30 9:00', '2009/9/30 10:00', '2009/9/30 11:00', '2009/9/30 12:00', '2009/9/30 13:00', '2009/9/30 14:00', '2009/9/30 15:00', '2009/9/30 16:00', '2009/9/30 17:00', '2009/9/30 18:00', '2009/9/30 19:00', '2009/9/30 20:00', '2009/9/30 21:00', '2009/9/30 22:00', '2009/9/30 23:00',
                '2009/10/1 0:00', '2009/10/1 1:00', '2009/10/1 2:00', '2009/10/1 3:00', '2009/10/1 4:00', '2009/10/1 5:00', '2009/10/1 6:00', '2009/10/1 7:00', '2009/10/1 8:00', '2009/10/1 9:00', '2009/10/1 10:00', '2009/10/1 11:00', '2009/10/1 12:00', '2009/10/1 13:00', '2009/10/1 14:00', '2009/10/1 15:00', '2009/10/1 16:00', '2009/10/1 17:00', '2009/10/1 18:00', '2009/10/1 19:00', '2009/10/1 20:00', '2009/10/1 21:00', '2009/10/1 22:00', '2009/10/1 23:00', '2009/10/2 0:00', '2009/10/2 1:00', '2009/10/2 2:00', '2009/10/2 3:00', '2009/10/2 4:00', '2009/10/2 5:00', '2009/10/2 6:00', '2009/10/2 7:00', '2009/10/2 8:00', '2009/10/2 9:00', '2009/10/2 10:00', '2009/10/2 11:00', '2009/10/2 12:00', '2009/10/2 13:00', '2009/10/2 14:00', '2009/10/2 15:00', '2009/10/2 16:00', '2009/10/2 17:00', '2009/10/2 18:00', '2009/10/2 19:00', '2009/10/2 20:00', '2009/10/2 21:00', '2009/10/2 22:00', '2009/10/2 23:00', '2009/10/3 0:00', '2009/10/3 1:00', '2009/10/3 2:00', '2009/10/3 3:00', '2009/10/3 4:00', '2009/10/3 5:00', '2009/10/3 6:00', '2009/10/3 7:00', '2009/10/3 8:00', '2009/10/3 9:00', '2009/10/3 10:00', '2009/10/3 11:00', '2009/10/3 12:00', '2009/10/3 13:00', '2009/10/3 14:00', '2009/10/3 15:00', '2009/10/3 16:00', '2009/10/3 17:00', '2009/10/3 18:00', '2009/10/3 19:00', '2009/10/3 20:00', '2009/10/3 21:00', '2009/10/3 22:00', '2009/10/3 23:00', '2009/10/4 0:00', '2009/10/4 1:00', '2009/10/4 2:00', '2009/10/4 3:00', '2009/10/4 4:00', '2009/10/4 5:00', '2009/10/4 6:00', '2009/10/4 7:00', '2009/10/4 8:00', '2009/10/4 9:00', '2009/10/4 10:00', '2009/10/4 11:00', '2009/10/4 12:00', '2009/10/4 13:00', '2009/10/4 14:00', '2009/10/4 15:00', '2009/10/4 16:00', '2009/10/4 17:00', '2009/10/4 18:00', '2009/10/4 19:00', '2009/10/4 20:00', '2009/10/4 21:00', '2009/10/4 22:00', '2009/10/4 23:00', '2009/10/5 0:00', '2009/10/5 1:00', '2009/10/5 2:00', '2009/10/5 3:00', '2009/10/5 4:00', '2009/10/5 5:00', '2009/10/5 6:00', '2009/10/5 7:00', '2009/10/5 8:00', '2009/10/5 9:00', '2009/10/5 10:00', '2009/10/5 11:00', '2009/10/5 12:00', '2009/10/5 13:00', '2009/10/5 14:00', '2009/10/5 15:00', '2009/10/5 16:00', '2009/10/5 17:00', '2009/10/5 18:00', '2009/10/5 19:00', '2009/10/5 20:00', '2009/10/5 21:00', '2009/10/5 22:00', '2009/10/5 23:00', '2009/10/6 0:00', '2009/10/6 1:00', '2009/10/6 2:00', '2009/10/6 3:00', '2009/10/6 4:00', '2009/10/6 5:00', '2009/10/6 6:00', '2009/10/6 7:00', '2009/10/6 8:00', '2009/10/6 9:00', '2009/10/6 10:00', '2009/10/6 11:00', '2009/10/6 12:00', '2009/10/6 13:00', '2009/10/6 14:00', '2009/10/6 15:00', '2009/10/6 16:00', '2009/10/6 17:00', '2009/10/6 18:00', '2009/10/6 19:00', '2009/10/6 20:00', '2009/10/6 21:00', '2009/10/6 22:00', '2009/10/6 23:00', '2009/10/7 0:00', '2009/10/7 1:00', '2009/10/7 2:00', '2009/10/7 3:00', '2009/10/7 4:00', '2009/10/7 5:00', '2009/10/7 6:00', '2009/10/7 7:00', '2009/10/7 8:00', '2009/10/7 9:00', '2009/10/7 10:00', '2009/10/7 11:00', '2009/10/7 12:00', '2009/10/7 13:00', '2009/10/7 14:00', '2009/10/7 15:00', '2009/10/7 16:00', '2009/10/7 17:00', '2009/10/7 18:00', '2009/10/7 19:00', '2009/10/7 20:00', '2009/10/7 21:00', '2009/10/7 22:00', '2009/10/7 23:00', '2009/10/8 0:00', '2009/10/8 1:00', '2009/10/8 2:00', '2009/10/8 3:00', '2009/10/8 4:00', '2009/10/8 5:00', '2009/10/8 6:00', '2009/10/8 7:00', '2009/10/8 8:00', '2009/10/8 9:00', '2009/10/8 10:00', '2009/10/8 11:00', '2009/10/8 12:00', '2009/10/8 13:00', '2009/10/8 14:00', '2009/10/8 15:00', '2009/10/8 16:00', '2009/10/8 17:00', '2009/10/8 18:00', '2009/10/8 19:00', '2009/10/8 20:00', '2009/10/8 21:00', '2009/10/8 22:00', '2009/10/8 23:00', '2009/10/9 0:00', '2009/10/9 1:00', '2009/10/9 2:00', '2009/10/9 3:00', '2009/10/9 4:00', '2009/10/9 5:00', '2009/10/9 6:00', '2009/10/9 7:00', '2009/10/9 8:00', '2009/10/9 9:00', '2009/10/9 10:00', '2009/10/9 11:00', '2009/10/9 12:00', '2009/10/9 13:00', '2009/10/9 14:00', '2009/10/9 15:00', '2009/10/9 16:00', '2009/10/9 17:00', '2009/10/9 18:00', '2009/10/9 19:00', '2009/10/9 20:00', '2009/10/9 21:00', '2009/10/9 22:00', '2009/10/9 23:00', '2009/10/10 0:00', '2009/10/10 1:00', '2009/10/10 2:00', '2009/10/10 3:00', '2009/10/10 4:00', '2009/10/10 5:00', '2009/10/10 6:00', '2009/10/10 7:00', '2009/10/10 8:00', '2009/10/10 9:00', '2009/10/10 10:00', '2009/10/10 11:00', '2009/10/10 12:00', '2009/10/10 13:00', '2009/10/10 14:00', '2009/10/10 15:00', '2009/10/10 16:00', '2009/10/10 17:00', '2009/10/10 18:00', '2009/10/10 19:00', '2009/10/10 20:00', '2009/10/10 21:00', '2009/10/10 22:00', '2009/10/10 23:00', '2009/10/11 0:00', '2009/10/11 1:00', '2009/10/11 2:00', '2009/10/11 3:00', '2009/10/11 4:00', '2009/10/11 5:00', '2009/10/11 6:00', '2009/10/11 7:00', '2009/10/11 8:00', '2009/10/11 9:00', '2009/10/11 10:00', '2009/10/11 11:00', '2009/10/11 12:00', '2009/10/11 13:00', '2009/10/11 14:00', '2009/10/11 15:00', '2009/10/11 16:00', '2009/10/11 17:00', '2009/10/11 18:00', '2009/10/11 19:00', '2009/10/11 20:00', '2009/10/11 21:00', '2009/10/11 22:00', '2009/10/11 23:00', '2009/10/12 0:00', '2009/10/12 1:00', '2009/10/12 2:00', '2009/10/12 3:00', '2009/10/12 4:00', '2009/10/12 5:00', '2009/10/12 6:00', '2009/10/12 7:00', '2009/10/12 8:00', '2009/10/12 9:00', '2009/10/12 10:00', '2009/10/12 11:00', '2009/10/12 12:00', '2009/10/12 13:00', '2009/10/12 14:00', '2009/10/12 15:00', '2009/10/12 16:00', '2009/10/12 17:00', '2009/10/12 18:00', '2009/10/12 19:00', '2009/10/12 20:00', '2009/10/12 21:00', '2009/10/12 22:00', '2009/10/12 23:00', '2009/10/13 0:00', '2009/10/13 1:00', '2009/10/13 2:00', '2009/10/13 3:00', '2009/10/13 4:00', '2009/10/13 5:00', '2009/10/13 6:00', '2009/10/13 7:00', '2009/10/13 8:00', '2009/10/13 9:00', '2009/10/13 10:00', '2009/10/13 11:00', '2009/10/13 12:00', '2009/10/13 13:00', '2009/10/13 14:00', '2009/10/13 15:00', '2009/10/13 16:00', '2009/10/13 17:00', '2009/10/13 18:00', '2009/10/13 19:00', '2009/10/13 20:00', '2009/10/13 21:00', '2009/10/13 22:00', '2009/10/13 23:00', '2009/10/14 0:00', '2009/10/14 1:00', '2009/10/14 2:00', '2009/10/14 3:00', '2009/10/14 4:00', '2009/10/14 5:00', '2009/10/14 6:00', '2009/10/14 7:00', '2009/10/14 8:00', '2009/10/14 9:00', '2009/10/14 10:00', '2009/10/14 11:00', '2009/10/14 12:00', '2009/10/14 13:00', '2009/10/14 14:00', '2009/10/14 15:00', '2009/10/14 16:00', '2009/10/14 17:00', '2009/10/14 18:00', '2009/10/14 19:00', '2009/10/14 20:00', '2009/10/14 21:00', '2009/10/14 22:00', '2009/10/14 23:00', '2009/10/15 0:00', '2009/10/15 1:00', '2009/10/15 2:00', '2009/10/15 3:00', '2009/10/15 4:00', '2009/10/15 5:00', '2009/10/15 6:00', '2009/10/15 7:00', '2009/10/15 8:00', '2009/10/15 9:00', '2009/10/15 10:00', '2009/10/15 11:00', '2009/10/15 12:00', '2009/10/15 13:00', '2009/10/15 14:00', '2009/10/15 15:00', '2009/10/15 16:00', '2009/10/15 17:00', '2009/10/15 18:00', '2009/10/15 19:00', '2009/10/15 20:00', '2009/10/15 21:00', '2009/10/15 22:00', '2009/10/15 23:00', '2009/10/16 0:00', '2009/10/16 1:00', '2009/10/16 2:00', '2009/10/16 3:00', '2009/10/16 4:00', '2009/10/16 5:00', '2009/10/16 6:00', '2009/10/16 7:00', '2009/10/16 8:00', '2009/10/16 9:00', '2009/10/16 10:00', '2009/10/16 11:00', '2009/10/16 12:00', '2009/10/16 13:00', '2009/10/16 14:00', '2009/10/16 15:00', '2009/10/16 16:00', '2009/10/16 17:00', '2009/10/16 18:00', '2009/10/16 19:00', '2009/10/16 20:00', '2009/10/16 21:00', '2009/10/16 22:00', '2009/10/16 23:00', '2009/10/17 0:00', '2009/10/17 1:00', '2009/10/17 2:00', '2009/10/17 3:00', '2009/10/17 4:00', '2009/10/17 5:00', '2009/10/17 6:00', '2009/10/17 7:00', '2009/10/17 8:00', '2009/10/17 9:00', '2009/10/17 10:00', '2009/10/17 11:00', '2009/10/17 12:00', '2009/10/17 13:00', '2009/10/17 14:00', '2009/10/17 15:00', '2009/10/17 16:00', '2009/10/17 17:00', '2009/10/17 18:00', '2009/10/17 19:00', '2009/10/17 20:00', '2009/10/17 21:00', '2009/10/17 22:00', '2009/10/17 23:00', '2009/10/18 0:00', '2009/10/18 1:00', '2009/10/18 2:00', '2009/10/18 3:00', '2009/10/18 4:00', '2009/10/18 5:00', '2009/10/18 6:00', '2009/10/18 7:00', '2009/10/18 8:00'
            ].map(function (str) {
                return str.replace(' ', '\n')
            })
        }
    ],
    yAxis: [
        {
            name: '(m^3/s)',
            type: 'value',
            max: 500,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
        },
        {
            name: '(mm)',
            nameLocation: 'start',
            max: 5,
            type: 'value',
            inverse: true,
            axisLine: {
                show:false
            },
            axisLabel: {
                textStyle: {
                    color: '#878787'
                }
            },
            splitLine: {
                show: false,
            },
        }
    ],
    series: [
        {
            name:'1',
            type:'line',
            animation: false,
            areaStyle: {
                normal: {}
            },
            lineStyle: {
                normal: {
                    width: 1
                }
            },
            markArea: {
                silent: true,
                data: [[{
                    xAxis: '2009/9/12\n7:00'
                }, {
                    xAxis: '2009/9/22\n7:00'
                }]]
            },
            data:[
                0.97,0.96,0.96,0.95,0.95,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.87,0.88,0.9,0.93,0.96,0.99,1.03,1.06,1.1,1.14,1.17,1.2,1.23,1.26,1.29,1.33,1.36,1.4,1.43,1.45,1.48,1.49,1.51,1.51,1.5,1.49,1.47,1.44,1.41,1.37,1.34,1.3,1.27,1.24,1.22,1.2,1.19,1.18,1.16,1.15,1.14,1.13,1.12,1.11,1.11,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.1,1.09,1.09,1.08,1.07,1.06,1.05,1.04,1.03,1.03,1.02,1.01,1.01,1,0.99,0.98,0.97,0.96,0.96,0.95,0.95,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.85,0.84,0.83,0.82,0.81,0.8,0.8,0.79,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.77,0.75,0.73,0.71,0.68,0.65,0.63,0.61,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.57,0.57,0.57,0.56,0.55,0.55,0.54,0.54,0.53,0.52,0.52,0.51,0.51,0.5,0.5,0.49,0.48,0.48,0.47,0.47,0.47,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.46,0.52,0.67,0.9,1.19,1.52,1.87,2.22,2.55,2.84,3.07,3.22,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.28,3.24,3.13,2.97,2.77,2.54,2.3,2.05,1.82,1.62,1.46,1.35,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.31,1.3,1.26,1.21,1.14,1.06,0.97,0.89,0.81,0.74,0.69,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.63,0.63,0.62,0.62,0.61,0.6,0.59,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.59,0.61,0.63,0.65,0.68,0.71,0.73,0.75,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.77,0.75,0.73,0.71,0.68,0.65,0.63,0.61,0.59,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.58,0.59,0.59,0.6,0.61,0.62,0.62,0.63,0.63,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.66,0.68,0.69,0.71,0.73,0.74,0.76,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.79,0.81,0.82,0.84,0.86,0.88,0.9,0.92,0.93,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.94,0.93,0.92,0.91,0.9,0.89,0.88,0.87,0.87,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.86,0.85,0.84,0.82,0.8,0.78,0.76,0.75,0.73,0.72,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.72,0.73,0.74,0.76,0.78,0.79,0.82,0.84,0.86,0.89,0.91,0.94,0.97,1,1.02,1.05,1.08,1.11,1.14,1.17,1.19,1.22,1.25,1.27,1.29,1.31,1.33,1.35,1.36,1.38,1.39,1.39,1.4,1.4,1.4,1.39,1.37,1.35,1.32,1.29,1.26,1.22,1.18,1.14,1.1,1.05,1.01,0.97,0.93,0.89,0.85,0.82,0.78,0.76,0.74,0.72,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.72,0.73,0.74,0.75,0.77,0.78,0.8,0.82,0.84,0.87,0.89,0.92,0.94,0.97,0.99,1.02,1.05,1.08,1.1,1.13,1.16,1.18,1.21,1.23,1.26,1.28,1.3,1.32,1.34,1.35,1.37,1.38,1.39,1.4,1.41,1.41,1.42,1.42,1.43,1.43,1.43,1.44,1.44,1.44,1.44,1.45,1.45,1.45,1.46,1.46,1.46,1.47,1.47,1.48,1.48,1.49,1.5,1.51,1.54,1.62,1.73,1.88,2.05,2.24,2.45,2.67,2.89,3.11,3.31,3.51,3.69,3.86,4.03,4.18,4.33,4.48,4.62,4.76,4.89,5.02,5.16,5.29,5.43,5.57,5.71,5.86,6.02,6.18,6.36,6.54,6.73,6.93,7.15,7.38,7.62,7.88,8.16,8.46,8.77,9.11,9.46,9.84,10.24,10.67,11.12,11.6,12.3,13.66,16,38.43,82.21,146.6,218.7,226,225.23,223.08,219.78,212,199.82,184.6,168,151.65,137.21,126.31,119.94,115.52,112.06,108.92,105.44,101,94.56,86.36,77.67,69.76,63.9,60.38,57.41,54.84,52.57,50.56,48.71,46.97,45.25,43.48,41.6,39.5,37.19,34.81,32.46,30.27,28.36,26.85,25.86,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.5,25.27,24.65,23.7,22.52,21.17,19.75,18.33,16.98,15.8,14.85,14.23,14,14.02,14.08,14.17,14.29,14.44,14.61,14.8,15.01,15.23,15.47,15.71,15.95,16.19,16.43,16.67,16.89,17.1,17.29,17.46,17.61,17.73,17.82,17.88,17.9,17.63,16.88,15.75,14.33,12.71,10.98,9.23,7.56,6.05,4.81,3.92,3.47,3.28,3.1,2.93,2.76,2.61,2.46,2.32,2.19,2.07,1.96,1.85,1.75,1.66,1.58,1.51,1.44,1.39,1.34,1.29,1.26,1.23,1.22,1.2,1.2,1.2,1.2,1.2,1.2,1.21,1.21,1.21,1.21,1.22,1.22,1.22,1.23,1.23,1.23,1.24,1.24,1.25,1.25,1.25,1.26,1.26,1.27,1.27,1.27,1.28,1.28,1.28,1.29,1.29,1.29,1.29,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.29,1.29,1.29,1.29,1.28,1.28,1.28,1.27,1.27,1.26,1.25,1.25,1.24,1.23,1.23,1.22,1.21,1.2,1.16,1.06,0.95,0.83,0.74,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.71,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.7,0.69,0.69,0.69,0.69,0.69,0.69,0.69,0.69,0.68,0.68,0.68,0.68,0.68,0.68,0.67,0.67,0.67,0.67,0.67,0.67,0.67,0.66,0.66,0.66,0.66,0.66,0.66,0.66,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.66,0.68,0.69,0.71,0.73,0.74,0.76,0.77,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.78,0.8,0.86,0.95,1.08,1.25,1.46,1.7,1.97,2.28,2.63,3.01,3.42,3.87,4.35,4.86,5.4,5.98,6.59,7.92,10.49,14.04,18.31,23.04,27.98,32.87,37.45,41.46,44.64,46.74,47.5,46.86,45.16,42.77,40.04,37.33,35,32.74,30.21,27.7,25.5,23.9,23.2,23.06,22.94,22.84,22.77,22.72,22.7,22.8,23.23,23.95,24.91,26.04,27.3,28.76,30.7,33.39,37.12,42.15,48.77,65.22,252.1,257,237.32,221.19,212,208.67,206.89,205.2,202.15,189.82,172,165.3,160.49,156.8,153.44,149.62,144.6,138.27,131,123.11,114.9,106.69,98.79,91.5,85.13,80,75.53,71.03,66.65,62.54,58.85,55.73,53.31,51.75,51.2,56.53,68.25,80,91.01,102.03,109,112.37,115.29,117.68,119.48,120.61,121,119.45,115.57,110.52,105.47,101.58,100,99.97,99.94,99.92,99.9,99.88,99.86,99.85,99.84,99.83,99.82,99.81,99.81,99.8,99.8,99.8,122.15,163.65,186,182.96,175.15,164.56,153.18,143,136,131.37,126.98,122.81,118.85,115.09,111.52,108.13,104.9,101.83,98.9,96.11,93.44,90.87,88.41,86.04,83.74,81.51,79.33,77.2,75.1,73.02,70.95,68.88,66.8,64.87,63.14,61.4,59.53,57.67,56,54.6,53.36,52.2,51.05,49.85,48.5,46.87,44.92,42.74,40.42,38.04,35.69,33.46,31.44,29.72,28.38,27.51,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.2,27.14,26.97,26.7,26.35,25.95,25.49,25.02,24.53,24.04,23.58,23.16,22.8,22.46,22.11,21.75,21.39,21.03,20.69,20.36,20.05,19.78,19.54,19.35,19.2,19.09,19,18.92,18.85,18.79,18.74,18.68,18.62,18.56,18.49,18.4,18.3,18.17,18.02,17.83,17.63,17.41,17.18,16.93,16.68,16.43,16.18,15.93,15.7,15.47,15.22,14.97,14.71,14.45,14.18,13.93,13.68,13.44,13.21,13,12.8,12.62,12.46,12.31,12.16,12.03,11.89,11.76,11.62,11.48,11.33,11.17,11,10.81,10.59,10.36,10.12,9.86,9.61,9.36,9.12,8.89,8.68,8.5,8.35,8.21,8.08,7.94,7.81,7.68,7.56,7.46,7.36,7.29,7.23,7.19,7.18,7.51,8.42,9.81,11.58,13.63,15.86,18.16,20.44,22.58,24.49,26.06,27.2,28.08,28.95,29.81,30.65,31.48,32.28,33.07,33.82,34.55,35.25,35.92,36.56,37.15,37.71,38.23,38.7,39.13,39.5,39.83,40.1,40.31,40.47,40.57,40.6,40.49,40.16,39.64,38.94,38.09,37.1,36,34.79,33.51,32.17,30.79,29.39,27.99,26.6,25.25,23.96,22.75,21.63,20.63,19.76,19.04,18.49,18.14,18,17.97,17.95,17.94,17.92,17.91,17.9,17.89,17.88,17.87,17.85,17.83,17.8,17.7,17.46,17.13,16.7,16.21,15.68,15.13,14.57,14.04,13.56,13.14,12.8,12.52,12.27,12.02,11.79,11.57,11.37,11.16,10.97,10.78,10.59,10.39,10.2,10.01,9.81,9.63,9.44,9.26,9.08,8.9,8.73,8.56,8.39,8.22,8.06,7.9,7.73,7.57,7.41,7.25,7.09,6.94,6.79,6.65,6.52,6.4,6.28,6.17,6.08,5.98,5.9,5.81,5.73,5.65,5.57,5.49,5.41,5.32,5.23,5.14,5.04,4.94,4.84,4.74,4.63,4.53,4.43,4.33,4.23,4.13,4.03,3.93,3.81,3.69,3.57,3.45,3.33,3.22,3.12,3.04,2.98,2.93,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.92,2.9,2.86,2.8,2.71,2.62,2.52,2.42,2.33,2.24,2.18,2.14,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.12,2.1,2.06,2,1.91,1.82,1.71,1.61,1.5,1.4,1.32,1.25,1.2,1.16,1.13,1.1,1.06,1.03,1,0.97,0.93,0.9,0.87,0.85,0.82,0.79,0.77,0.74,0.72,0.69,0.67,0.65,0.63,0.61,0.59,0.58,0.56,0.54,0.53,0.52,0.51,0.5,0.49,0.48,0.48,0.47,0.47,0.46,0.46,0.47,0.48,0.5,0.53,0.56,0.59,0.62,0.64,0.67,0.69,0.7,0.71,0.71,0.71,0.71,0.7,0.7,0.7,0.69,0.69,0.69,0.68,0.68,0.67,0.67,0.67,0.66,0.66,0.65,0.65,0.65,0.65,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.64,0.65,0.65,0.65,0.66,0.66,0.67,0.68,0.69,0.69,0.7,0.71,0.73,0.74,0.75,0.76,0.78,0.8,0.81,0.83,0.85,0.87,0.89,0.92,0.94,0.97,0.99,1.02,1.05,1.08,1.11,1.15,1.18,1.32,1.66,2.21,2.97,3.94,5.11,6.5,8.1,9.9,11.92,14.15,16.6,22.3,22.8,24.48,30.38,35.74,42.4,57.14,94.04,112.9,123.4,130.4,130,119.4,120.7,116.8,118.1,119.4,124.8,143.5,204,294,319.2,328.4,365,350.8,347.6,347.6,325,331.6,319.2,308,308,308,308,296.8,300,281,278.4,270.6,271,253.6,233.5,219.2,207.8,205.9,204,189.6,178.8,173.4,160,154.4,146,145,140.5,130.4,126.2,116.8,112.9,106.5,101.6,98.51,82.67,67.3,80.05,76.12,72.3,71.02,69.78,67.3,67.3,68.54,57.6,71.02,66.06,59.12,57.14,55.16,55.16,52.19,52.19,51.2,48.56,44.16,43,45.92,49.44,44.16,36.48,35.74,35,32.36,37.22,32.36,32.36,32.36,33.68,32.36,31.7,35.74,29.72,32.36,30.38,29.72,28.4,28.4,28.4,27.28,25.6,25.04,23.92,22.3,21.8,21.8,21.8,22.8,21.8,25.6,22.8,22.8,17.8,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,16.04,15.02,14,14.03,14.11,14.25,14.45,14.72,15.06,15.46,15.95,16.51,17.15,17.87,18.69,19.59,20.59,21.69,22.88,24.18,25.59,27.1,28.73,30.48,32.34,34.33,36.44,38.69,41.06,43.57,46.22,49.01,51.95,55.04,58.27,61.66,65.21,68.92,72.8,88.09,104.9,105.7,110.3,111.6,110.3,106.5,105.7,103.3,100,97.02,98.8,91.07,83.98,88.09,81.36,78.74,77.43,77.43,73.5,74.81,72.63,68.58,66.4,68.54,69.78,67.3,64.82,61.1,59.12,56.15,53.18,50.32,49.44,44.16,36.5,42.4,37.96,37.22,33.68,36.48,35.74,35,35,37.22,37.22,39.44,32.6,34.54,36.48,35.74,34.34,33.68,33.02,31.04,29.72,29.72,29.72,26.16,25.6,29.72,18.3,22.3,21.3,21.8,21.8,20.3,20.8,25.04,25.04,25.6,25.6,25.04,25.6,25.04,25.6,23.92,25.04,21.3,21.8,22.3,21.8,20.8,16.1,20.3,18.3,13.22,19.3,19.3,18.3,14.4,13.86,13.36,12.9,12.48,12.1,11.75,11.43,11.15,10.9,10.67,10.48,10.31,10.16,10.04,9.93,9.85,9.78,9.73,9.69,9.67,9.65,9.65,12.08,8.67,11.7,11.38,10.65,9.84,9.32,9.07,8.85,8.66,8.49,8.35,8.22,8.1,7.98,7.86,7.74,7.61,7.47,7.31,7.14,6.96,6.78,6.58,6.39,6.19,5.99,5.78,5.58,5.39,5.2,5.01,4.83,4.67,4.51,4.37,4.24,4.12,4.02,3.95,3.89,3.85,3.84,4.41,5.77,7.39,8.75,9.32,9.18,9,8.94,8.88,8.83,8.78,8.73,8.68,8.64,8.6,8.56,8.53,8.5,8.47,8.45,8.42,8.4,8.39,8.37,8.36,8.35,8.35,8.34,8.34,8.67,9.65,9.62,9.53,9.4,9.21,8.98,8.7,8.4,8.06,7.69,7.3,6.89,6.47,6.03,5.59,5.14,4.7,4.26,3.83,3.42,3.02,2.65,2.3,1.98,1.7,1.45,1.25,1.09,0.99,0.94,0.92,0.91,0.89,0.87,0.85,0.84,0.82,0.81,0.79,0.78,0.77,0.75,0.74,0.73,0.72,0.71,0.7,0.69,0.68,0.67,0.66,0.65,0.64,0.64,0.63,0.63,0.62,0.62,0.61,0.61,0.61,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.6,0.61,0.61,0.61,0.61,0.61,0.61,0.62,0.62,0.62,0.62,0.63,0.63,0.63,0.63,0.63,0.64,0.64,0.64,0.64,0.64,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.65,0.64,0.63,0.62,0.6,0.59,0.57,0.55,0.54,0.53,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.51,0.51,0.51,0.5,0.5,0.49,0.48,0.47,0.47,0.46,0.45,0.45,0.44,0.43,0.42,0.42,0.41,0.41,0.41,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.41,0.42,0.43,0.44,0.46,0.48,0.5,0.53,0.55,0.58,0.61,0.64,0.67,0.7,0.73,0.77,0.8,0.83,0.87,0.9,0.93,0.96,0.99,1.02,1.05,1.08,1.1,1.12,1.14,1.16,1.17,1.18,1.19,1.2,1.2,1.2,1.19,1.17,1.15,1.12,1.09,1.06,1.02,0.98,0.94,0.9,0.86,0.82,0.78,0.74,0.7,0.66,0.63,0.6,0.57,0.55,0.53,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.52,0.51,0.51,0.5,0.5,0.49,0.49,0.48,0.47,0.47,0.47,0.46,0.46,0.45,0.45,0.45,0.44,0.44,0.44,0.43,0.43,0.43,0.42,0.42,0.42,0.41,0.41,0.41,0.41,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.41,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.42,0.43,0.43,0.43,0.43,0.43,0.43,0.44,0.44,0.44,0.44,0.44,0.44,0.45,0.45,0.45
            ]
        },
        {
            name:'2',
            type:'line',
            yAxisIndex:1,
            animation: false,
            areaStyle: {
                normal: {}
            },
            lineStyle: {
                normal: {
                    width: 1
                }
            },
            markArea: {
                silent: true,
                data: [[{
                    xAxis: '2009/9/10\n7:00'
                }, {
                    xAxis: '2009/9/20\n7:00'
                }]]
            },
            data: [
                0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.017,0.017,0.017,0.017,0.011,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.021,0.026,0.03,0.036,0.036,0.195,0.221,0.019,0.013,0.017,0.03,0.03,0.03,0.046,0.045,0.038,0.084,0.045,0.045,0.037,0.034,0.035,0.036,0.044,0.052,0.048,0.109,0.033,0.029,0.04,0.042,0.042,0.042,0.073,0.076,0.062,0.066,0.066,0.075,0.096,0.128,0.121,0.128,0.14,0.226,0.143,0.097,0.018,0,0,0,0,0,0.018,0.047,0.054,0.054,0.054,0.036,0.185,0.009,0.038,0.061,0.077,0.091,0.126,0.69,0.182,0.349,0.231,0.146,0.128,0.167,0.1,0.075,0.071,0.071,0.117,0.01,0.002,0.002,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.026,0.038,0.038,0.038,0.076,0.086,0.109,0.213,0.276,0.288,0.297,0.642,1.799,1.236,2.138,0.921,0.497,0.685,0.828,0.41,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.018,0.024,0.024,0.024,0.024,0.006,0.003,0.046,0.046,0.046,0.046,0.043,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.204,0.303,1.028,1.328,1.524,1.41,1.362,1.292,1.191,0.529,0.501,0.944,1.81,2.899,0.859,0.126,0.087,0.047,0,0,0,0,0.011,0.028,0.028,0.028,0.028,0.017,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.099,0.159,0.297,0.309,0.309,0.614,0.818,1.436,1.195,0.553,0.542,0.955,0.898,0.466,0.386,0.556,0.388,0.221,0.192,0.192,0.187,0.166,0.18,0.302,0.158,0.009,0.009,0.009,0.009,0.009,0.007,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.004,0.032,0.032,0.032,0.032,0.082,0.149,0.204,0.247,0.262,0.49,0.51,0.533,0.746,0.847,2.393,1.188,1.114,0.475,0.043,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.017,0.017,0.021,0.042,0.079,0.111,0.126,0.122,0.133,0.846,0.102,0.077,0.067,0.056,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0.011,0.017,0.017,0.017,0.017,0.006,0,0,0,0,0,0.01,0.03,0.054,0.067,0.07,0.25,0.251,0.494,0.065,0.054,0.054,0.064,0.084,0.077,0.101,0.132,0.248,0.069,0.117,0.115,0.087,0.326,0.036,0.009,0.009,0.009,0.009,0.009,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.02,0.039,0.04,0.04,0.04,0.229,0.079,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.023,0.069,0.082,0.082,0.082,0.503,0.774,0.038,0.012,0.012,0.012,0.016,0.02,0.028,0.051,0.06,0.064,0.19,0.15,0.164,0.139,0.13,0.085,0.031,0.023,0.022,0.007,0.005,0.005,0.001,0,0.02,0.048,0.048,0.053,0.056,0.036,0.008,0.008,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.013,0.017,0.036,0.068,0.095,0.233,0.272,0.377,0.722,1.494,3.756,0.954,0.439,0.442,0.462,0.373,0.249,0.214,0.1,0.044,0.037,0.023,0.002,0,0,0,0,0,0,0.02,0.024,0.024,0.024,0.024,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.008,0.017,0.017,0.045,0.186,0.308,0.241,0.241,0.893,4.067,4.494,5.015,3.494,2.057,1.411,0.718,0.407,0.313,0.339,1.537,1.105,0.218,0.136,0.03,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.037,0.448,1.2,1.309,1.309,1.425,1.223,0.471,0.767,0.423,0.273,0.412,0.646,0.481,0.239,0.131,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.044,0.15,0.223,0.388,0.513,0.883,2.828,4.786,5.959,4.95,6.434,6.319,3.35,2.806,4.204,1.395,1.015,1.015,0.836,0.74,0.72,0.615,0.477,0.192,0.046,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.008,0.005,0.005,0.005,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.012,0.012,0.012,0.012,0.011,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.002,0.012,0.028,0.028,0.028,0.138,0.092,0.082,0.082,0.096,0.719,0.155,0.042,0.047,0.129,0.021,0.021,0.014,0.009,0.029,0.067,0.088,0.095,0.095,0.138,0.091,0.032,0.025,0.025,0.003,0,0,0,0,0,0,0,0,0,0,0,0,0.002,0.045,0.228,0.297,0.325,0.339,0.581,1.244,0.796,0.517,0.227,0.053,0.006,0,0,0,0,0,0,0,0,0,0.003,0.005,0.005,0.005,0.005,0.081,0.129,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.014,0.041,0.041,0.041,0.041,0.027,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.009,0.017,0.017,0.017,0.017,0.355,0.174,0.009,0.009,0.012,0.136,0.208,0.208,0.208,0.215,7.359,1.858,0.458,0.053,0.053,0.047,0.045,0.045,0.059,0.136,0.188,0.206,0.21,0.588,1.517,6.02,4.688,4.42,0.624,0.326,0.359,0.553,0.899,0.94,2.95,9.415,5.752,1.092,0.096,0.035,0.026,0.018,0.015,0.011,0.011,0.011,0,0,0,0,0,0,0,0,0,0,0,0.056,0.27,0.314,0.351,0.354,0.609,0.796,1.857,0.848,0.538,0.214,0.178,0.178,0.201,0.231,0.227,0.272,0.397,0.45,1.014,2.917,1.675,0.081,0.059,0.059,0.148,0.075,0.075,0.078,0.236,0.784,0.784,0.784,0.784,0.741,0.115,0.058,0.058,0.058,0.029,0.015,0.015,0.015,0.015,0.012,0.008,0.604,0.985,1.305,2.273,2.528,2.336,2.496,2.281,1.397,1.713,3.259,1.167,0.745,0.548,1.058,0.684,0.728,0.392,0.179,0.283,0.283,0.46,0.08,0.099,0.099,0.099,0.1,0.143,0.137,0.238,0.317,0.262,0.225,0.792,0.426,0.332,0.261,0.11,0.093,0.102,0.171,0.292,0.504,0.605,1.745,2.485,1.964,0.33,0.171,0.259,0.242,0.215,0.366,0.354,0.205,0.203,0.262,0.153,0.13,0.137,0.362,0.691,0.295,0.433,0.154,0.056,0.053,0.053,0.053,0.051,0.047,0.065,0.078,0.091,0.206,0.813,0.102,0.151,0.05,0.024,0.004,0.001,0,0,0,0.021,0.021,0.021,0.021,0.021,0.013,0.013,0.013,0.013,0.013,0.013,0.013,0.013,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.008,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.018,0.021,0.021,0.021,0.021,0.003,0,0,0,0,0,0,0,0,0,0.024,0.173,0.261,0.267,0.267,0.534,1.354,1.772,0.72,0.218,0.018,0.018,0.028,0.036,0.032,0.194,0.082,0.035,0.286,0.027,0.038,0.038,0.027,0.021,0.014,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.016,0.017,0.017,0.031,0.047,0.043,0.056,0.104,0.149,0.179,0.205,0.328,0.998,0.522,1.851,3.727,3.273,2.204,1.169,1.006,1.179,0.74,0.741,1.065,0.925,0.671,0.497,0.431,0.327,0.277,0.126,0.581,0.207,0.359,2.485,0.038,0.036,0.003,0.003,0.003,0.003,0.004,0.098,0.023,0.021,0.021,0.022,0.041,0.041,0.043,0.045,0.043,0.014,0.014,0.014,0.014,0.014,0.014,0.014,0.031,0.046,0.063,0.119,0.107,0.092,0.085,0.065,0.06,0.054,0.042,0.039,0.046,0.044,0.028,0.028,0.02,0.013,0.013,0.013,0.013,0.016,0.032,0.031,0.031,0.031,0.028,0.011,0.011,0.011,0.011,0.011,0.023,0.024,0.024,0.024,0.019,0.015,0.015,0.015,0.015,0.015,0.015,0.013,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.001,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.011,0.017,0.024,0.026,0.061,0.172,0.206,0.213,0.267,0.511,0.668,0.157,0.017,0.017,0.017,0.046,0.054,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.017,0.017,0.017,0.017,0.016,0,0,0,0,0,0,0,0,0,0.01,0.017,0.017,0.017,0.017,0.012,0.017,0.017,0.017,0.017,0.012,0,0,0,0,0,0.003,0.031,0.066,0.093,0.112,0.122,0.202,0.068,0.041,0.022,0.011,0,0,0,0,0,0,0,0,0,0,0,0.002,0.005,0.012,0.021,0.021,0.019,0.033,0.03,0.026,0.026,0.034,0.095,0.024,0.024,0.024,0.023,0.019,0.018,0.018,0.018,0.011,0.03,0.045,0.044,0.044,0.044,0.022,0.009,0.024,0.033,0.033,0.033,0.024,0.009,0,0,0,0,0,0,0.003,0.017,0.017,0.017,0.017,0.014,0,0,0,0,0,0.032,0.032,0.032,0.032,0.032,0.005,0.008,0.009,0.014,0.014,0.009,0.005,0.004,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.007,0.009,0.009,0.009,0.009,0.043,0.063,0.084,0.098,0.101,0.213,0.334,0.383,0.43,0.448,0.511,0.801,0.835,1.642,1.614,1.496,1.496,1.476,1.068,0.481,0.22,0.119,0.099,0.07,0.072,0.063,0.076,0.14,0.205,0.28,0.297,0.3,0.479,0.877,1.098,1.611,1.629,1.686,1.686,1.631,1.528,1.862,1.703,1.531,2.196,0.395,0.416,0.453,0.728,0.917,0.986,1.17,2.171,3.011,2.909,3.301,1.377,0.778,0.799,0.947,1.039,0.879,0.76,1.372,1.674,1.674,1.68,1.823,1.793,1.162,0.783,0.216,0.152,0.152,0.152,0.049,0,0,0,0.117,0.127,0.127,0.127,0.127,0.127,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.003,0.005,0.005,0.005,0.005,0.003,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.309,0.364,0.364,0.364,0.364,0.063,0.01,0.01,0.01,0.012,0.015,0.015,0.11,0.55,0.824,0.825,0.829,1.39,1.429,1.342,1.43,1.636,1.717,2.135,2.203,3.191,3.022,1.589,0.86,0.807,0.645,0.595,0.588,0.557,0.552,1.271,0.708,0.677,0.629,0.714,0.203,0.133,0.061,0.062,0.018,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001,0.072,0.29,0.438,0.53,0.557,0.873,1.039,1.04,0.208,0.049,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.03,0.039,0.039,0.039,0.039,0.098,0.008,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.007,0.056,0.062,0.065,0.065,0.065,0.047,0.216,0.256,0.315,0.4,0.502,0.449,0.47,0.571,0.814,1.153,0.774,0.202,0.086,0.075,0.071,0.032,0.019,0.003,0.004,0.004,0.004,0.004,0.004,0.004,0.007,0.072,0.153,0.256,0.306,0.404,0.698,0.733,0.823,0.715,0.563,0.404,0.293,0.217,0.213,0.202,0.202,0.294,0.704,0.797,1.359,1.101,0.72,0.514,0.539,0.434,0.389,0.387,0.386,0.375,0.369,0.319,0.239,0.183,0.136,0.062,0.052,0.096,0.119,0.119,0.114,0.127,0.132,0.139,0.169,0.191,0.278,0.254,0.214,0.237,0.221,0.143,0.129,0.125,0.109,0.1,0.087,0.06,0.038,0.029,0.029,0.028,0.048,0.053,0.053,0.111,0.125,0.102,0.097,0.097,0.039,0.02,0.02,0.02,0.014,0.004,0.031,0.043,0.047,0.052,0.08,0.144,0.182,0.176,0.171,0.149,0.112,0.025,0,0,0,0,0,0,0,0.016,0.031,0.031,0.031,0.031,0.015,0,0,0,0,0,0.005,0.005,0.005,0.005,0.005,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005,0.005,0.005,0.005,0.005,0.001,0,0,0
            ]
        }
    ]
};

    eChart_1.setOption(option);
    eChart_1.resize();
}
    
    
});

$(function() {
    "use strict";
    // ------------------------------
    // Basic pie chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var basicpieChart = echarts.init(document.getElementById('basic-pie'));
        var option = {
            // Add title
                title: {
                    text: 'A site user access source',
                    subtext: 'Purely Fictitious',
                    x: 'center'
                },

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    x: 'left',
                    data: ['Direct Access', 'Mail Marketing', 'Union ad', 'Video ad', 'Search Engine']
                },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ee1044', '#ff8f00'],

                // Display toolbox
                toolbox: {
                    show: true,
                    orient: 'vertical',
                    feature: {
                        mark: {
                            show: true,
                            title: {
                                mark: 'Markline switch',
                                markUndo: 'Undo markline',
                                markClear: 'Clear markline'
                            }
                        },
                        dataView: {
                            show: true,
                            readOnly: false,
                            title: 'View data',
                            lang: ['View chart data', 'Close', 'Update']
                        },
                        magicType: {
                            show: true,
                            title: {
                                pie: 'Switch to pies',
                                funnel: 'Switch to funnel',
                            },
                            type: ['pie', 'funnel'],
                            option: {
                                funnel: {
                                    x: '25%',
                                    y: '20%',
                                    width: '50%',
                                    height: '70%',
                                    funnelAlign: 'left',
                                    max: 1548
                                }
                            }
                        },
                        restore: {
                            show: true,
                            title: 'Restore'
                        },
                        saveAsImage: {
                            show: true,
                            title: 'Same as image',
                            lang: ['Save']
                        }
                    }
                },

                // Enable drag recalculate
                calculable: true,

                // Add series
                series: [{
                    name: 'Marketing',
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '57.5%'],
                    data: [
                        {value: 335, name: 'Direct Access'},
                        {value: 310, name: 'Mail Marketing'},
                        {value: 234, name: 'Union ad'},
                        {value: 135, name: 'Video ad'},
                        {value: 1548, name: 'Search Engine'}
                    ]
                }]
        };
    
        basicpieChart.setOption(option);
    // ------------------------------
    // Basic pie chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var basicdoughnutChart = echarts.init(document.getElementById('basic-doughnut'));
        var option = {
            // Add title
                title: {
                    text: 'A site user access source',
                    subtext: 'Purely Fictitious',
                    x: 'center'
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    x: 'left',
                    data: ['Direct Access', 'Mail Marketing', 'Union ad', 'Video ad', 'Search Engine']
                },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ee1044', '#ff8f00'],

                // Display toolbox
                toolbox: {
                    show: true,
                    orient: 'vertical',
                    feature: {
                        mark: {
                            show: true,
                            title: {
                                mark: 'Markline switch',
                                markUndo: 'Undo markline',
                                markClear: 'Clear markline'
                            }
                        },
                        dataView: {
                            show: true,
                            readOnly: false,
                            title: 'View data',
                            lang: ['View chart data', 'Close', 'Update']
                        },
                        magicType: {
                            show: true,
                            title: {
                                pie: 'Switch to pies',
                                funnel: 'Switch to funnel',
                            },
                            type: ['pie', 'funnel'],
                            option: {
                                funnel: {
                                    x: '25%',
                                    y: '20%',
                                    width: '50%',
                                    height: '70%',
                                    funnelAlign: 'left',
                                    max: 1548
                                }
                            }
                        },
                        restore: {
                            show: true,
                            title: 'Restore'
                        },
                        saveAsImage: {
                            show: true,
                            title: 'Same as image',
                            lang: ['Save']
                        }
                    }
                },

                // Enable drag recalculate
                calculable: true,

                // Add series
                series: [
                    {
                        name: 'Marketing',
                        type: 'pie',
                        radius: ['50%', '70%'],
                        center: ['50%', '57.5%'],
                        itemStyle: {
                            normal: {
                                label: {
                                    show: true
                                },
                                labelLine: {
                                    show: true
                                }
                            },
                            emphasis: {
                                label: {
                                    show: true,
                                    formatter: '{b}' + '\n\n' + '{c} ({d}%)',
                                    position: 'center',
                                    textStyle: {
                                        fontSize: '17',
                                        fontWeight: '500'
                                    }
                                }
                            }
                        },

                        data: [
                            {value: 335, name: 'Direct Access'},
                        	{value: 310, name: 'Mail Marketing'},
                        	{value: 234, name: 'Union ad'},
                        	{value: 135, name: 'Video ad'},
                        	{value: 1548, name: 'Search Engine'}
                        ]
                    }
                ]
        };
    
        basicdoughnutChart.setOption(option);
    // ------------------------------
    // customized chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var customizedChart = echarts.init(document.getElementById('customized-chart'));
        var option = {
            
            backgroundColor: '#fff',

            title: {
                text: 'Customized Pie',
                left: 'center',
                top: 20,
                textStyle: {
                    color: '#ccc'
                }
            },

            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },

            visualMap: {
                show: false,
                min: 80,
                max: 600,
                inRange: {
                    colorLightness: [0, 1]
                }
            },
            series : [
                {
                    name:'Marketing',
                    type:'pie',
                    radius : '55%',
                    center: ['50%', '50%'],
                    data:[
                        {value:335, name:'Direct Access'},
                        {value:310, name:'Mail Marketing'},
                        {value:274, name:'Union ad'},
                        {value:235, name:'Video ad'},
                        {value:400, name:'Search Engine'}
                    ].sort(function (a, b) { return a.value - b.value; }),
                    roseType: 'radius',
                    label: {
                        normal: {
                            textStyle: {
                                color: 'rgba(0, 0, 0, 0.3)'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            lineStyle: {
                                color: 'rgba(0, 0, 0, 0.3)'
                            },
                            smooth: 0.2,
                            length: 10,
                            length2: 20
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: '#38649f',
                            shadowBlur: 200,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    },

                    animationType: 'scale',
                    animationEasing: 'elasticOut',
                    animationDelay: function (idx) {
                        return Math.random() * 200;
                    }
                }
            ]
        };    
       
    
        customizedChart.setOption(option);
    // ------------------------------
    // Nested chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var nestedChart = echarts.init(document.getElementById('nested-pie'));
        var option = {
            
           tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    x: 'left',
                    data: ['Direct','Marketing Advertising','Search Engine','Mail Marketing','Union ad','Video ad','Baidu','Google','Bing','Other']
                },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ee1044', '#ff8f00'],

                // Display toolbox
                toolbox: {
                    show: true,
                    orient: 'vertical',
                    feature: {
                        mark: {
                            show: true,
                            title: {
                                mark: 'Markline switch',
                                markUndo: 'Undo markline',
                                markClear: 'Clear markline'
                            }
                        },
                        dataView: {
                            show: true,
                            readOnly: false,
                            title: 'View data',
                            lang: ['View chart data', 'Close', 'Update']
                        },
                        magicType: {
                            show: true,
                            title: {
                                pie: 'Switch to pies',
                                funnel: 'Switch to funnel',
                            },
                            type: ['pie', 'funnel']
                        },
                        restore: {
                            show: true,
                            title: 'Restore'
                        },
                        saveAsImage: {
                            show: true,
                            title: 'Same as image',
                            lang: ['Save']
                        }
                    }
                },

                // Enable drag recalculate
                calculable: false,

                // Add series
                series: [

                    // Inner
                    {
                        name: 'Countries',
                        type: 'pie',
                        selectedMode: 'single',
                        radius: [0, '40%'],

                        // for funnel
                        x: '15%',
                        y: '7.5%',
                        width: '40%',
                        height: '85%',
                        funnelAlign: 'right',
                        max: 1548,

                        itemStyle: {
                            normal: {
                                label: {
                                    position: 'inner'
                                },
                                labelLine: {
                                    show: false
                                }
                            },
                            emphasis: {
                                label: {
                                    show: true
                                }
                            }
                        },

                        data: [
                            {value: 535, name: 'Direct'},
                            {value: 679, name: 'Marketing ad'},
                            {value: 1548, name: 'Search Engine'}
                        ]
                    },

                    // Outer
                    {
                        name: 'Countries',
                        type: 'pie',
                        radius: ['60%', '85%'],

                        // for funnel
                        x: '55%',
                        y: '7.5%',
                        width: '35%',
                        height: '85%',
                        funnelAlign: 'left',
                        max: 1048,

                        data: [
                            {value:335, name: 'Direct'},
							{value:310, name: 'Mail Marketing'},
							{value:234, name: 'Union ad'},
							{value:135, name: 'Video ad'},
							{value:1048, name: 'Baidu'},
							{value:251, name:'Google'},
							{value:147, name: 'Bing'},
							{value:102, name:'Other'}
                        ]
                    }
                ]
        };    
       
    
        nestedChart.setOption(option);
        // ------------------------------
        // pole chart
        // ------------------------------
        // based on prepared DOM, initialize echarts instance
            var poleChart = echarts.init(document.getElementById('pole-chart'));
            // Data style
            var dataStyle = {
                normal: {
                    label: {show: false},
                    labelLine: {show: false}
                }
            };

            // Placeholder style
            var placeHolderStyle = {
                normal: {
                    color: 'rgba(0,0,0,0)',
                    label: {show: false},
                    labelLine: {show: false}
                },
                emphasis: {
                    color: 'rgba(0,0,0,0)'
                }
            };
            var option = {
                title: {
                    text: 'Stacked histogram',
                    subtext: 'Weekly Data',
                    x: 'center',
                    y: 'center',
                    itemGap: 10,
                    textStyle: {
                        color: 'rgba(30,144,255,0.8)',
                        fontSize: 19,
                        fontWeight: '500'
                    }
                },

                // Add tooltip
                tooltip: {
                    show: true,
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    x: document.getElementById('pole-chart').offsetWidth / 2,
                    y: 30,
                    x: '55%',
                    itemGap: 15,
                    data: ['Monday','Tuesday','Wednesday']
                },

                // Add custom colors
                color: ['#689f38', '#38649f', '#ff8f00'],
 
                // Add series
                series: [
                    {
                        name: '1',
                        type: 'pie',
                        clockWise: false,
                        radius: ['75%', '90%'],
                        itemStyle: dataStyle,
                        data: [
                            {
                                value: 60,
                                name: 'Monday'
                            },
                            {
                                value: 40,
                                name: 'invisible',
                                itemStyle: placeHolderStyle
                            }
                        ]
                    },

                    {
                        name: '2',
                        type:'pie',
                        clockWise: false,
                        radius: ['60%', '75%'],
                        itemStyle: dataStyle,
                        data: [
                            {
                                value: 30, 
                                name: 'Tuesday'
                            },
                            {
                                value: 70,
                                name: 'invisible',
                                itemStyle: placeHolderStyle
                            }
                        ]
                    },

                    {
                        name: '3',
                        type: 'pie',
                        clockWise: false,
                        radius: ['45%', '60%'],
                        itemStyle: dataStyle,
                        data: [
                            {
                                value: 10, 
                                name: 'Wednesday'
                            },
                            {
                                value: 90,
                                name: 'invisible',
                                itemStyle: placeHolderStyle
                            }
                        ]
                    }
                ]
            };
        poleChart.setOption(option);
        // ------------------------------
        // nightingale chart
        // ------------------------------
        // based on prepared DOM, initialize echarts instance
            var nightingaleChart = echarts.init(document.getElementById('nightingale-chart'));
            var option = {
                 title: {
                    text: 'Ningdinger Rose Map',
                    subtext: 'Purely fictitious',
                    x: 'center'
                },

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: +{c}$ ({d}%)"
                },

                // Add legend
                legend: {
                    x: 'left',
                    y: 'top',
                    orient: 'vertical',
                    data:['rose1','rose2','rose3','rose4','rose5','rose6','rose7','rose8']
                },

                color: ['#689f38', '#e4eaec', '#38649f', '#389f99', '#ee1044', '#ff8f00', '#673ab7', '#4974e0'],

                // Display toolbox
                toolbox: {
                    show: true,
                    orient: 'vertical',
                    feature: {
                        mark: {
                            show: true,
                            title: {
                                mark: 'Markline switch',
                                markUndo: 'Undo markline',
                                markClear: 'Clear markline'
                            }
                        },
                        dataView: {
                            show: true,
                            readOnly: false,
                            title: 'View data',
                            lang: ['View chart data', 'Close', 'Update']
                        },
                        magicType: {
                            show: true,
                            title: {
                                pie: 'Switch to pies',
                                funnel: 'Switch to funnel',
                            },
                            type: ['pie', 'funnel']
                        },
                        restore: {
                            show: true,
                            title: 'Restore'
                        },
                        saveAsImage: {
                            show: true,
                            title: 'Same as image',
                            lang: ['Save']
                        }
                    }
                },

                // Enable drag recalculate
                calculable: true,

                // Add series
                series: [
                    {
                        name: 'Area Mode',
                        type: 'pie',
                        radius: ['15%', '73%'],
                        center: ['50%', '57%'],
                        roseType: 'area',

                        // Funnel
                        width: '40%',
                        height: '78%',
                        x: '30%',
                        y: '17.5%',
                        max: 450,
                        sort: 'ascending',

                        data: [
                            {value: 440, name: 'rose1'},
                            {value: 260, name: 'rose2'},
                            {value: 350, name: 'rose3'},
                            {value: 250, name: 'rose4'},
                            {value: 210, name: 'rose5'},
                            {value: 350, name: 'rose6'},
                            {value: 300, name: 'rose7'},
                            {value: 450, name: 'rose8'}
                        ]
                    }
                ]
            };
        nightingaleChart.setOption(option);
	
	
        // ------------------------------
        // bar-polar-stack-radial
        // ------------------------------	
	
		var dom = document.getElementById("bar-polar-stack-radial");
		var myChart = echarts.init(dom);
		var app = {};
		option = null;
		app.title = 'Stacked bar chart in polar coordinate system';

		option = {
			color: ['#689f38', '#38649f', '#389f99'],
			angleAxis: {
				type: 'category',
				data: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
				z: 10
			},
			radiusAxis: {
			},
			polar: {
			},
			series: [{
				type: 'bar',
				data: [1, 2, 3, 4, 3, 5, 1],
				coordinateSystem: 'polar',
				name: 'A',
				stack: 'a'
			}, {
				type: 'bar',
				data: [2, 4, 6, 1, 3, 2, 1],
				coordinateSystem: 'polar',
				name: 'B',
				stack: 'a'
			}, {
				type: 'bar',
				data: [1, 2, 3, 4, 1, 2, 5],
				coordinateSystem: 'polar',
				name: 'C',
				stack: 'a'
			}],
			legend: {
				show: true,
				data: ['A', 'B', 'C']
			}
		};
		if (option && typeof option === "object") {
			myChart.setOption(option, true);
		}
        //------------------------------------------------------
       // Resize chart on menu width change and window resize
       //------------------------------------------------------
        $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".sidebartoggler").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        basicpieChart.resize();
                        basicdoughnutChart.resize();
                        customizedChart.resize();
                        nestedChart.resize();
                        poleChart.resize();
                    }, 200);
                }
            });
});


//[app Javascript]


$(function () {
    "use strict";    
		
	 $('.icolors li').on("click", function() {
            $('.icolors li').removeClass('active');
            $(this).addClass('active');
        });

        $('.photos-item').on("click", function() {
            var src = $(this).children().attr('src');
            $('#product-image').attr('src', src);
            $('.photos-item').removeClass('item-active');
            $(this).addClass('item-active');
        });	
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   
		
	  $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
      $('#example1').editableTableWidget().numericInputExample().find('td:first').focus();
	
  }); // End of use strict


  //[editor Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the wysihtml5 Editor 


//Add text editor
$(function () {
    "use strict";

    // Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace('editor1')
	//bootstrap WYSIHTML5 - text editor
	$('.textarea').wysihtml5();		
	
  });


  //[ Javascript]

$(function () {
    "use strict";
    
		// Make the dashboard widgets sortable Using jquery UI
		  $('.connectedSortable').sortable({
			placeholder         : 'sort-highlight',
			connectWith         : '.connectedSortable',
			handle              : '.box-header, .nav-tabs',
			forcePlaceholderSize: true,
			zIndex              : 999999
		  });
		  $('.connectedSortable .box-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move');

		// jQuery UI sortable for the todo list
		  $('.todo-list').sortable({
			placeholder         : 'sort-highlight',
			handle              : '.handle',
			forcePlaceholderSize: true,
			zIndex              : 999999
		  });	

		/* The todo list plugin */
		  $('.todo-list').todoList({
			onCheck  : function () {
			  window.console.log($(this), 'The element has been checked');
			},
			onUnCheck: function () {
			  window.console.log($(this), 'The element has been unchecked');
			}
		  });
	
  }); // End of use strict


  //[Javascript]



$(function () {
    "use strict";   

		var editor = ace.edit("editorJS");
		editor.setTheme("ace/theme/iplastic");
		editor.getSession().setMode("ace/mode/javascript");

		var editor = ace.edit("editorHTML");
		editor.setTheme("ace/theme/kuroir");
		editor.getSession().setMode("ace/mode/html");

		var editor = ace.edit("editorCSS");
		editor.setTheme("ace/theme/sqlserver");
		editor.getSession().setMode("ace/mode/css");
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   

		//Add text editor
		$("#compose-textarea").wysihtml5();
	
  }); // End of use strict

  //[Javascript]



! function(window, document, $) {
	"use strict";
		$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
	}(window, document, jQuery); // End of use strict

    //[Javascript]


$(function () {
    "use strict";    
		
	 $(function() {
        //editables 
        $('#username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username'
        });

        $('#firstname').editable({
            validate: function(value) {
                if ($.trim(value) == '') return 'This field is required';
            }
        });

        $('#sex').editable({
            prepend: "not selected",
            source: [{
                value: 1,
                text: 'Male'
            }, {
                value: 2,
                text: 'Female'
            }],
            display: function(value, sourceData) {
                var colors = {
                        "": "#98a6ad",
                        1: "#5fbeaa",
                        2: "#5d9cec"
                    },
                    elem = $.grep(sourceData, function(o) {
                        return o.value == value;
                    });

                if (elem.length) {
                    $(this).text(elem[0].text).css("color", colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });

        $('#status').editable();

        $('#group').editable({
            showbuttons: false
        });

        $('#dob').editable();

        $('#comments').editable({
            showbuttons: 'bottom'
        });

        //inline


        $('#inline-username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });

        $('#inline-firstname').editable({
            validate: function(value) {
                if ($.trim(value) == '') return 'This field is required';
            },
            mode: 'inline'
        });

        $('#inline-sex').editable({
            prepend: "not selected",
            mode: 'inline',
            source: [{
                value: 1,
                text: 'Male'
            }, {
                value: 2,
                text: 'Female'
            }],
            display: function(value, sourceData) {
                var colors = {
                        "": "#98a6ad",
                        1: "#5fbeaa",
                        2: "#5d9cec"
                    },
                    elem = $.grep(sourceData, function(o) {
                        return o.value == value;
                    });

                if (elem.length) {
                    $(this).text(elem[0].text).css("color", colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });

        $('#inline-status').editable({
            mode: 'inline'
        });

        $('#inline-group').editable({
            showbuttons: false,
            mode: 'inline'
        });

        $('#inline-dob').editable({
            mode: 'inline'
        });

        $('#inline-comments').editable({
            showbuttons: 'bottom',
            mode: 'inline'
        });

    });	
	
  }); // End of use strict


  // Mask / Formatter

$(function () {
    'use strict';
      
      //Date dd/mm/yyyy
      $('#date').formatter({
        'pattern': '{{99}}/{{99}}/{{9999}}',
        'persistent': true
      });
      
      //Date 2 yyyy-mm-dd
      $('#date2').formatter({
        'pattern': '{{9999}}-{{99}}-{{99}}',
        'persistent': true
      });
      
      //Time hh:mm
      $('#time').formatter({
        'pattern': '{{99}}:{{99}}',
        'persistent': true
      });
      
      //Date time dd/mm/yyyy hh:mm
      $('#date-time').formatter({
        'pattern': '{{99}}/{{99}}/{{9999}} {{99}}:{{99}}',
        'persistent': true
      });
      
      //Phone E.g. (123) 456-7890
      $('#phone').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}',
        'persistent': true
      });
      
      //Phone 2 E.g. +1 123-456-7890
      $('#phone2').formatter({
        'pattern': '+1 {{999}}-{{999}}-{{999}}',
        'persistent': true
      });
      
      //Percent E.g. %25.36
      $('#percent').formatter({
        'pattern': '%{{99}}.{{99}}',
        'persistent': true
      });
      
      //Username 8 character
      $('#username').formatter({
        'pattern': '{{aaaaaaaa}}',
        'persistent': true
      });
      
      //Price E.g. $ 999.99
      $('#price').formatter({
        'pattern': '$ {{999}}.{{99}}',
        'persistent': true
      });
      
      //Credit card
      $('#creditcard').formatter({
        'pattern': '{{9999}}-{{9999}}-{{9999}}-{{9999}}',
        'persistent': true
      });
      
      //SSN E.g. 123-45-6789
      $('#ssn').formatter({
        'pattern': '{{999}}-{{99}}-{{9999}}',
        'persistent': true
      });
      
      //Product key E.g. PN 123 4567
      $('#productkey').formatter({
        'pattern': 'P{{a}} {{999}} {{9999}}',
        'persistent': true
      });
      
  });// End of use strict

  //[custom Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:	Sunny Admin - Responsive Admin Template

//should be included in all pages. It controls some layout



// Fullscreen
$(function () {
	'use strict'
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		$('#request').on('click', function () {
			screenfull.request($('#container')[0]);
			// Does not require jQuery. Can be used like this too:
			// screenfull.request(document.getElementById('container'));
		});

		$('#exit').on('click', function () {
			screenfull.exit();
		});

		$('#toggle').on('click', function () {
			screenfull.toggle($('#container')[0]);
		});

		$('#request2').on('click', function () {
			screenfull.request();
		});

		$('#demo-img').on('click', function () {
			screenfull.toggle(this);
		});

		$('[data-provide~="boxfull"]').on('click', function () {
			screenfull.toggle($('.box')[0]);
		});
		
		$('[data-provide~="fullscreen"]').on('click', function () {
			screenfull.toggle($('#container')[0]);
		});
	
		var selector = '[data-provide~="boxfull"]';
		var selector = '[data-provide~="fullscreen"]';

		$(selector).each(function(){
		  $(this).data('fullscreen-default-html', $(this).html());
		});

		document.addEventListener(screenfull.raw.fullscreenchange, function() {
		  if (screenfull.isFullscreen) {
			$(selector).each(function(){
			  $(this).addClass('is-fullscreen')
			});
		  }
		  else {
			$(selector).each(function(){
			  $(this).removeClass('is-fullscreen')
			});
		  }
		});

	
		function fullscreenchange() {
			var elem = screenfull.element;

			$('#status').text('Is fullscreen: ' + screenfull.isFullscreen);

			if (elem) {
				$('#element').text('Element: ' + elem.localName + (elem.id ? '#' + elem.id : ''));
			}

			if (!screenfull.isFullscreen) {
				$('#external-iframe').remove();
				document.body.style.overflow = 'auto';
			}
		}

		screenfull.on('change', fullscreenchange);

		// Set the initial values
		fullscreenchange();
}); // End of use strict


//[Javascript]



$(function () {
    "use strict";   

		
	  // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return console.log('Checking our the events huh?');
                    }
                },
                onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                    }
                }
            });
        });
        //Programatically call
        $('#open-image').click(function(e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function(e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        // navigateTo
        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();
            var lb;
            return $(this).ekkoLightbox({
                onShown: function() {
                    lb = this;
                    $(lb.modal_content).on('click', '.modal-footer a', function(e) {
                        e.preventDefault();
                        lb.navigateTo(2);
                    });
                }
            });
        });
	
  }); // End of use strict

  //[gridstackjs Javascript]

$(function () {
    "use strict";

        $('.grid-stack').gridstack({
            width: 12,
            alwaysShowResizeHandle: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            resizable: {
                handles: 'e, se, s, sw, w'
            }
        });
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   

			$('.code-preview').hide();
			$('.show-code').click(function (e) {
				$(this).children('.name').toggle();
				$(this).children('.code-preview').toggle();
				e.stopPropagation();
				return false;
			});	
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   

		
	  $("#print1").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("section.printableArea").printArea(options);
        }); 

		
	  $("#print2").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("section.printableArea").printArea(options);
        });
	
  }); // End of use strict


  //[Javascript]



$(function () {
    "use strict";   

		// Slim scrolling
  
	  $('.inner-user-div').slimScroll({
		height: '342px'
	  });
		
	
  }); // End of use strict

  //[mailbox Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the  mailbox


$(function () {
    "use strict";

    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".ion", this).removeClass("ion-android-checkbox-outline").addClass('ion-android-checkbox-outline-blank');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".ion", this).removeClass("ion-android-checkbox-outline-blank").addClass('ion-android-checkbox-outline');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
	
  }); // End of use strict

  //[custom Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:	Sunny Admin - Responsive Admin Template

//should be included in all pages. It controls some layout



+function ($) {
    'use strict'
  
    // Click to select
      $(document).on('click', '.media[data-provide~="selectable"], .media-list[data-provide~="selectable"] .media:not(.media-list-header):not(.media-list-footer)', function(){
        var input = $(this).find('input');
        input.prop('checked', !input.prop("checked"));
  
        if ( input.prop("checked") ) {
          $(this).addClass('active');
        }
        else {
          $(this).removeClass('active');
        }
      });  
    
  }(jQuery) // End of use strict
  
  

  //[Javascript]



$(function () {
    "use strict";   

	// Nestable
    
        $(document).ready(function () {
            // Nestable
            var updateOutput = function (e) {
                var list = e.length ? e : $(e.target)
                    , output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
                }
                else {
                    output.val('JSON browser support required for this demo.');
                }
            };
            $('#nestable').nestable({
                group: 1
            }).on('change', updateOutput);
            $('#nestable2').nestable({
                group: 1
            }).on('change', updateOutput);
            updateOutput($('#nestable').data('output', $('#nestable-output')));
            updateOutput($('#nestable2').data('output', $('#nestable2-output')));
            $('#nestable-menu').on('click', function (e) {
                var target = $(e.target)
                    , action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });
            $('#nestable-menu').nestable();
        });
	
  }); // End of use strict


  //[Javascript]



$(function () {
    "use strict";   

	
    //Alerts
    $(".myadmin-alert .closed").click(function(event) {
        $(this).parents(".myadmin-alert").fadeToggle(350);
        return false;
    });
    /* Click to close */
    $(".myadmin-alert-click").click(function(event) {
        $(this).fadeToggle(350);
        return false;
    });
    $(".showtop").click(function() {
        $(".alerttop").fadeToggle(350);
    });
    $(".showtop2").click(function() {
        $(".alerttop2").fadeToggle(350);
    });
    /** Alert Position Bottom  **/
    $(".showbottom").click(function() {
        $(".alertbottom").fadeToggle(350);
    });
    $(".showbottom2").click(function() {
        $(".alertbottom2").fadeToggle(350);
    });
    /** Alert Position Top Left  **/
    $("#showtopleft").click(function() {
        $("#alerttopleft").fadeToggle(350);
    });
    /** Alert Position Top Right  **/
    $("#showtopright").click(function() {
        $("#alerttopright").fadeToggle(350);
    });
    /** Alert Position Bottom Left  **/
    $("#showbottomleft").click(function() {
        $("#alertbottomleft").fadeToggle(350);
    });
    /** Alert Position Bottom Right  **/
    $("#showbottomright").click(function() {
        $("#alertbottomright").fadeToggle(350);
    });
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   

		
	  // To make Pace works on Ajax calls
	  $(document).ajaxStart(function () {
		Pace.restart()
	  })
	  $('.ajax').click(function () {
		$.ajax({
		  url: '#', success: function (result) {
			$('.ajax-content').html('<hr>Ajax Request Completed !')
		  }
		})
	  })
	
  }); // End of use strict

  // peity

$(function () {
    'use strict';
      
      // pie chart
      $("span.pie").peity("pie");
      
      
      // line chart
      $("span.line1").peity("line", {
        fill: ["#f3f5f6"],
        stroke: ["#0bb2d4"],
        height: 32,
        width: 120,
      });
      
      $("span.line2").peity("line", {
        fill: ["#17b3a3"],
        stroke: ["#17b3a3"],
        height: 64,
        width: 250,
      });
      
      $("span.line3").peity("line", {
        fill: ["transparent"],
        stroke: ["#ff4c52"],
        height: 96,
        width: 250,
      });
      
      
      // donut chart
      $('.donut').peity('donut');
      
      
      // bar chart
      $(".bar").peity("bar");
      
      
      // updatingChart chart
      var updatingChart = $(".updating-chart").peity("line", { 
          height: 96,
          width: 250, 
          fill: ["#eeeeee"],
          stroke: ["#17b3a3"],
      });
  
      setInterval(function() {
        var random = Math.round(Math.random() * 10);
        var values = updatingChart.text().split(",");
        values.shift();
        values.push(random);
  
        updatingChart
          .text(values.join(","))
          .change();
      }, 1000);
      
  });// End of use strict

  //[Data Table Javascript]

//Project:	Lion Admin - Responsive Admin Template
//Primary use:   Used only for the Data Table

$(function () {
    "use strict";
	
    $(document).ready(function () {

         var table = $('#project-table').DataTable({
             "data": testdata.data,
			 "searching": true,
			 "paging":   true,
			 "info":     true,
             select:"single",
             "columns": [
                 {
                     "className": 'details-control',
                     "orderable": false,
                     "data": null,
                     "defaultContent": '',
                     "render": function () {
                         return '';
                     },
                     width:"15px"
                 },
                 { "data": "name" },
				 { "data": "status" },
				 { "data": "starts" },
				 { "data": "ends" },
				 { "data": "est" },
				 { "data": "contacts" },
				 { "data": "tracker" },

             ],
             "order": [[1, 'asc']]
         });

         // Add event listener for opening and closing details
         $('#project-table tbody').on('click', 'td.details-control', function () {
             var tr = $(this).closest('tr');
             var tdi = tr.find("i.fa");
             var row = table.row(tr);

             if (row.child.isShown()) {
                 // This row is already open - close it
                 row.child.hide();
                 tr.removeClass('shown');
                 tdi.first().removeClass('fa-minus-square');
                 tdi.first().addClass('fa-plus-square');
             }
             else {
                 // Open this row
                 row.child(format(row.data())).show();
                 tr.addClass('shown');
                 tdi.first().removeClass('fa-plus-square');
                 tdi.first().addClass('fa-minus-square');
             }
         });

         table.on("user-select", function (e, dt, type, cell, originalEvent) {
             if ($(cell.node()).hasClass("details-control")) {
                 e.preventDefault();
             }
         });
     });

    function format(d){
        
         // `d` is the original data object for the row
         return '<table cellpadding="6" cellspacing="0" border="0" style="padding-left:50px; width:100%;">' +
            '<tr>'+
				'<td style="width:100px">Project Title:</td>'+
				'<td>'+d.name+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Deadline:</td>'+
				'<td>'+d.ends+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Extra info:</td>'+
				'<td>And any further details here (images etc)...</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Comments:</td>'+
				'<td>'+d.comments+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Action:</td>'+
				'<td>'+d.action+'</td>'+
			'</tr>'+
         '</table>';  
    }

    var testdata = {
    "data": [
    {
    "name": "Sharepoint Upgrade<br><small class='text-muted'><i>Budget: 5,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-info progress-bar-striped' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: 60%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../images/avatar/1.jpg' class='offline' alt='user'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",	
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info active' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-21-2017",
	"ends": "<strong>02-30-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
    },
    {
	"name": "IT Room Renovation<br><small class='text-muted'><i>Budget: 25,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-success progress-bar-striped' role='progressbar' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100' style='width: 30%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../images/avatar/2.jpg' class='online'></a> <a href='javascript:void(0)'><img src='../images/avatar/4.jpg' class='busy'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-17-2017",
	"ends": "<strong>02-30-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Car Industry Studies<br><small class='text-muted'><i>Budget: 1,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-primary progress-bar-striped' role='progressbar' aria-valuenow='55' aria-valuemin='0' aria-valuemax='100' style='width: 55%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../images/avatar/1.jpg' class='online' alt='user'></a><a href='javascript:void(0)'><img src='../images/avatar/2.jpg' class='online'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info active' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-8-2017",
	"ends": "<strong>03-03-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Update all forms <br><small class='text-muted'><i>Budget: 2,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-warning progress-bar-striped' role='progressbar' aria-valuenow='68' aria-valuemin='0' aria-valuemax='100' style='width: 68%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../images/avatar/5.jpg' class='busy'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-12-2017",
	"ends": "<strong>03-15-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Preliminary studies of client intel<br><small class='text-muted'><i>Budget: 3,500<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-danger progress-bar-striped' role='progressbar' aria-valuenow='10' aria-valuemin='0' aria-valuemax='100' style='width: 10%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../images/avatar/6.jpg' class='online'></a> <a href='javascript:void(0)'><img src='../images/avatar/3.jpg' class='busy'></a></div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-13-2017",
	"ends": "<strong>06-20-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},    
    ]
    };
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   


    $("#range_01").ionRangeSlider(), $("#range_02").ionRangeSlider( {
        min: 100, max: 1e3, from: 550
    }
    ), 
	$("#range_03").ionRangeSlider( {
        type: "double", grid: !0, min: 0, max: 1e3, from: 200, to: 800, prefix: "$"
    }
    ), 
	$("#range_04").ionRangeSlider( {
        type: "double", grid: !0, min: -1e3, max: 1e3, from: -500, to: 500
    }
    ), 
	$("#range_05").ionRangeSlider( {
        type: "double", grid: !0, min: -1e3, max: 1e3, from: -500, to: 500, step: 250
    }
    ), 
	$("#range_06").ionRangeSlider( {
        grid: !0, from: 3, values: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    }
    ), 
	$("#range_07").ionRangeSlider( {
        grid: !0, min: 1e3, max: 1e6, from: 2e5, step: 1e3, prettify_enabled: !0
    }
    ), 
	$("#range_08").ionRangeSlider( {
        min: 100, max: 1e3, from: 550, disable: !0
    }
    ), 
	$("#range_09").ionRangeSlider( {
        grid: !0, min: 18, max: 70, from: 30, prefix: "Age ", max_postfix: "+"
    }
    ), 
	$("#range_10").ionRangeSlider( {
        type: "double", min: 100, max: 200, from: 145, to: 155, prefix: "Weight: ", postfix: " million pounds", decorate_both: !0
    }
    ), 
	$("#range_11").ionRangeSlider( {
        type: "single", grid: !0, min: -90, max: 90, from: 0, postfix: "°"
    }
    ), 
	$("#range_12").ionRangeSlider( {
        type: "double", min: 1e3, max: 2e3, from: 1200, to: 1800, hide_min_max: !0, hide_from_to: !0, grid: !0
    }
    )


	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   
		
	/* BOOTSTRAP SLIDER */
		$('.slider').slider()
	
	
	/* flexslider SLIDER */
		$('.flexslider').flexslider({
			animation: "slide"
		  });
		  $('.flexslider2').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		  });
	/* owl-carousel SLIDER */
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			autoplay: true,
			responsive: {
			  0: {
				items: 1,
				nav: false
			  },
			  600: {
				items: 3,
				nav: false
			  },
			  1000: {
				items: 4,
				nav: true,
				margin: 20
			  }
			}
		});
	
  }); // End of use strict

  //[Javascript]



$(function () {
    "use strict";   

		
		$('.countnm').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 5000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	
  }); // End of use strict

  $(".tab-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "none"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onFinished: function (event, currentIndex) {
       swal("Your Order Submitted!", "Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.");
            
    }
});


var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "none"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onStepChanging: function (event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    }
    , onFinishing: function (event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    }
    , onFinished: function (event, currentIndex) {
         swal("Your Form Submitted!", "Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.");
    }
}), $(".validation-wizard").validate({
    ignore: "input[type=hidden]"
    , errorClass: "text-danger"
    , successClass: "text-success"
    , highlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , errorPlacement: function (error, element) {
        error.insertAfter(element)
    }
    , rules: {
        email: {
            email: !0
        }
    }
})

//[Javascript]



$(function () {
    "use strict";   
		
	/**********************Scroll Animation "START"************************************/
		$(document).ready(function(){
		var $animation_elements = $('.anim');
		var $window = $(window);

		function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + window_height);

		$.each($animation_elements, function() {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
		(element_top_position <= window_bottom_position)) {
		$element.addClass('animated');
		} else {
		$element.removeClass('animated');
		}
		});
		}

		$window.on('scroll resize', check_if_in_view);
		$window.trigger('scroll');
		});
		/**********************Scroll Animation "END"************************************/

		/**********************Change color of center aligned animated content small Circle  "START"************************************/
		$(document).ready(function(){
			$(" .debits").hover(function(){
				$(" .center-right").css("background-color", "#4997cd");
				}, function(){
				$(" .center-right").css("background-color", "#fff");
			}); 
		});
		$(document).ready(function(){
			$(".credits").hover(function(){
				$(".center-left").css("background-color", "#4997cd");
				}, function(){
				$(".center-left").css("background-color", "#fff");
			}); 
		});
		/**********************Change color of center aligned animated content small Circle  "END"************************************/
	
  }); // End of use strict

  $(document).ready(function () {
    $(".tst1").on("click", function () {
        $.toast({
            heading: 'Welcome to my Sunny Admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3000,
            stack: 6
        });

    });

    $(".tst2").on("click", function () {
        $.toast({
            heading: 'Welcome to my Sunny Admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'warning',
            hideAfter: 3500,
            stack: 6
        });

    });
    $(".tst3").on("click", function () {
        $.toast({
            heading: 'Welcome to my Sunny Admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });

    });

    $(".tst4").on("click", function () {
        $.toast({
            heading: 'Welcome to my Sunny Admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 3500

        });

    });


});

/* jqBootstrapValidation
 * A plugin for automating validation on Twitter Bootstrap formatted forms.
 *
 * v1.3.6
 *
 * License: MIT <http://opensource.org/licenses/mit-license.php> - see LICENSE file
 *
 * http://ReactiveRaven.github.com/jqBootstrapValidation/
 */
(function ($) {
    var createdElements = [];
    var defaults = {
        options: {
            prependExistingHelpBlock: false
            , sniffHtml: true, // sniff for 'required', 'maxlength', etc
            preventSubmit: true, // stop the form submit event from firing if validation fails
            submitError: false, // function called if there is an error when trying to submit
            submitSuccess: false, // function called just before a successful submit event is sent to the server
            semanticallyStrict: false, // set to true to tidy up generated HTML output
            bindEvents: [],
            autoAdd: {
                helpBlocks: true
            }
            , filter: function () {
                // return $(this).is(":visible"); // only validate elements you can see
                return true; // validate everything
            }
        }
        , methods: {
            init: function (options) {
                var settings = $.extend(true, {}, defaults);
                settings.options = $.extend(true, settings.options, options);
                var $siblingElements = this;
                var uniqueForms = $.unique($siblingElements.map(function () {
                    return $(this).parents("form")[0];
                }).toArray());
                $(uniqueForms).bind("submit.validationSubmit", function (e) {
                    var $form = $(this);
                    var warningsFound = 0;
                    var $allInputs = $form.find("input,textarea,select").not("[type=submit],[type=image]").filter(settings.options.filter);
                    var $allControlGroups = $form.find(".form-group");
                    var $inputsWithValidators = $allInputs.filter(function () {
                        return $(this).triggerHandler("getValidatorCount.validation") > 0;
                    });
                    $inputsWithValidators.trigger("submit.validation");
                    $allInputs.trigger("validationLostFocus.validation");
                    $allControlGroups.each(function (i, el) {
                        var $controlGroup = $(el);
                        if ($controlGroup.hasClass("issue") || $controlGroup.hasClass("error")) {
                            $controlGroup.removeClass("issue").addClass("error");
                            warningsFound++;
                        }
                    });
                    if (warningsFound) {
                        if (settings.options.preventSubmit) {
                            e.preventDefault();
                            e.stopImmediatePropagation();
                        }
                        $form.addClass("error");
                        if ($.isFunction(settings.options.submitError)) {
                            settings.options.submitError($form, e, $inputsWithValidators.jqBootstrapValidation("collectErrors", true));
                        }
                    }
                    else {
                        $form.removeClass("error");
                        if ($.isFunction(settings.options.submitSuccess)) {
                            settings.options.submitSuccess($form, e);
                        }
                    }
                });
                return this.each(function () {
                    var $this = $(this)
                        , $controlGroup = $this.parents(".form-group").first()
                        , $helpBlock = $controlGroup.find(".help-block").first()
                        , $form = $this.parents("form").first()
                        , validatorNames = [];
                    if (!$helpBlock.length && settings.options.autoAdd && settings.options.autoAdd.helpBlocks) {
                        $helpBlock = $('<div class="help-block" />');
                        $controlGroup.find('.controls').append($helpBlock);
                        createdElements.push($helpBlock[0]);
                    }
                    if (settings.options.sniffHtml) {
                        var message;
                        if ($this.data("validationPatternPattern")) {
                            $this.attr("pattern", $this.data("validationPatternPattern"));
                        }
                        if ($this.attr("pattern") !== undefined) {
                            message = "Not in the expected format<!-- data-validation-pattern-message to override -->";
                            if ($this.data("validationPatternMessage")) {
                                message = $this.data("validationPatternMessage");
                            }
                            $this.data("validationPatternMessage", message);
                            $this.data("validationPatternRegex", $this.attr("pattern"));
                        }
                        if ($this.attr("max") !== undefined || $this.attr("aria-valuemax") !== undefined) {
                            var max = ($this.attr("max") !== undefined ? $this.attr("max") : $this.attr("aria-valuemax"));
                            message = "Too high: Maximum of '" + max + "'<!-- data-validation-max-message to override -->";
                            if ($this.data("validationMaxMessage")) {
                                message = $this.data("validationMaxMessage");
                            }
                            $this.data("validationMaxMessage", message);
                            $this.data("validationMaxMax", max);
                        }
                        if ($this.attr("min") !== undefined || $this.attr("aria-valuemin") !== undefined) {
                            var min = ($this.attr("min") !== undefined ? $this.attr("min") : $this.attr("aria-valuemin"));
                            message = "Too low: Minimum of '" + min + "'<!-- data-validation-min-message to override -->";
                            if ($this.data("validationMinMessage")) {
                                message = $this.data("validationMinMessage");
                            }
                            $this.data("validationMinMessage", message);
                            $this.data("validationMinMin", min);
                        }
                        if ($this.attr("maxlength") !== undefined) {
                            message = "Too long: Maximum of '" + $this.attr("maxlength") + "' characters<!-- data-validation-maxlength-message to override -->";
                            if ($this.data("validationMaxlengthMessage")) {
                                message = $this.data("validationMaxlengthMessage");
                            }
                            $this.data("validationMaxlengthMessage", message);
                            $this.data("validationMaxlengthMaxlength", $this.attr("maxlength"));
                        }
                        if ($this.attr("minlength") !== undefined) {
                            message = "Too short: Minimum of '" + $this.attr("minlength") + "' characters<!-- data-validation-minlength-message to override -->";
                            if ($this.data("validationMinlengthMessage")) {
                                message = $this.data("validationMinlengthMessage");
                            }
                            $this.data("validationMinlengthMessage", message);
                            $this.data("validationMinlengthMinlength", $this.attr("minlength"));
                        }
                        if ($this.attr("required") !== undefined || $this.attr("aria-required") !== undefined) {
                            message = settings.builtInValidators.required.message;
                            if ($this.data("validationRequiredMessage")) {
                                message = $this.data("validationRequiredMessage");
                            }
                            $this.data("validationRequiredMessage", message);
                        }
                        if ($this.attr("type") !== undefined && $this.attr("type").toLowerCase() === "number") {
                            message = settings.validatorTypes.number.message;
                            if ($this.data("validationNumberMessage")) {
                                message = $this.data("validationNumberMessage");
                            }
                            $this.data("validationNumberMessage", message);
                            var step = settings.validatorTypes.number.step;
                            if ($this.data("validationNumberStep")) {
                                step = $this.data("validationNumberStep");
                            }
                            $this.data("validationNumberStep", step);
                            var decimal = settings.validatorTypes.number.decimal;
                            if ($this.data("validationNumberDecimal")) {
                                decimal = $this.data("validationNumberDecimal");
                            }
                            $this.data("validationNumberDecimal", decimal);
                        }
                        if ($this.attr("type") !== undefined && $this.attr("type").toLowerCase() === "email") {
                            message = "Not a valid email address<!-- data-validation-email-message to override -->";
                            if ($this.data("validationEmailMessage")) {
                                message = $this.data("validationEmailMessage");
                            }
                            $this.data("validationEmailMessage", message);
                        }						
                        if ($this.attr("minchecked") !== undefined) {
                            message = "Not enough options checked; Minimum of '" + $this.attr("minchecked") + "' required<!-- data-validation-minchecked-message to override -->";
                            if ($this.data("validationMincheckedMessage")) {
                                message = $this.data("validationMincheckedMessage");
                            }
                            $this.data("validationMincheckedMessage", message);
                            $this.data("validationMincheckedMinchecked", $this.attr("minchecked"));
                        }
                        if ($this.attr("maxchecked") !== undefined) {
                            message = "Too many options checked; Maximum of '" + $this.attr("maxchecked") + "' required<!-- data-validation-maxchecked-message to override -->";
                            if ($this.data("validationMaxcheckedMessage")) {
                                message = $this.data("validationMaxcheckedMessage");
                            }
                            $this.data("validationMaxcheckedMessage", message);
                            $this.data("validationMaxcheckedMaxchecked", $this.attr("maxchecked"));
                        }
                    }
                    if ($this.data("validation") !== undefined) {
                        validatorNames = $this.data("validation").split(",");
                    }
                    $.each($this.data(), function (i, el) {
                        var parts = i.replace(/([A-Z])/g, ",$1").split(",");
                        if (parts[0] === "validation" && parts[1]) {
                            validatorNames.push(parts[1]);
                        }
                    });
                    var validatorNamesToInspect = validatorNames;
                    var newValidatorNamesToInspect = [];
                    var uppercaseEachValidatorName = function (i, el) {
                        validatorNames[i] = formatValidatorName(el);
                    };
                    var inspectValidators = function (i, el) {
                        if ($this.data("validation" + el + "Shortcut") !== undefined) {
                            $.each($this.data("validation" + el + "Shortcut").split(","), function (i2, el2) {
                                newValidatorNamesToInspect.push(el2);
                            });
                        }
                        else if (settings.builtInValidators[el.toLowerCase()]) {
                            var validator = settings.builtInValidators[el.toLowerCase()];
                            if (validator.type.toLowerCase() === "shortcut") {
                                $.each(validator.shortcut.split(","), function (i, el) {
                                    el = formatValidatorName(el);
                                    newValidatorNamesToInspect.push(el);
                                    validatorNames.push(el);
                                });
                            }
                        }
                    };
                    do {
                        $.each(validatorNames, uppercaseEachValidatorName);
                        validatorNames = $.unique(validatorNames);
                        newValidatorNamesToInspect = [];
                        $.each(validatorNamesToInspect, inspectValidators);
                        validatorNamesToInspect = newValidatorNamesToInspect;
                    } while (validatorNamesToInspect.length > 0);
                    var validators = {};
                    $.each(validatorNames, function (i, el) {
                        var message = $this.data("validation" + el + "Message");
                        var hasOverrideMessage = !!message;
                        var foundValidator = false;
                        if (!message) {
                            message = "'" + el + "' validation failed <!-- Add attribute 'data-validation-" + el.toLowerCase() + "-message' to input to change this message -->";
                        }
                        $.each(settings.validatorTypes, function (validatorType, validatorTemplate) {
                            if (validators[validatorType] === undefined) {
                                validators[validatorType] = [];
                            }
                            if (!foundValidator && $this.data("validation" + el + formatValidatorName(validatorTemplate.name)) !== undefined) {
                                var initted = validatorTemplate.init($this, el);
                                if (hasOverrideMessage) {
                                    initted.message = message;
                                }
                                validators[validatorType].push($.extend(true, {
                                    name: formatValidatorName(validatorTemplate.name)
                                    , message: message
                                }, initted));
                                foundValidator = true;
                            }
                        });
                        if (!foundValidator && settings.builtInValidators[el.toLowerCase()]) {
                            var validator = $.extend(true, {}, settings.builtInValidators[el.toLowerCase()]);
                            if (hasOverrideMessage) {
                                validator.message = message;
                            }
                            var validatorType = validator.type.toLowerCase();
                            if (validatorType === "shortcut") {
                                foundValidator = true;
                            }
                            else {
                                $.each(settings.validatorTypes, function (validatorTemplateType, validatorTemplate) {
                                    if (validators[validatorTemplateType] === undefined) {
                                        validators[validatorTemplateType] = [];
                                    }
                                    if (!foundValidator && validatorType === validatorTemplateType.toLowerCase()) {
                                        $this.data("validation" + el + formatValidatorName(validatorTemplate.name), validator[validatorTemplate.name.toLowerCase()]);
                                        validators[validatorType].push($.extend(validator, validatorTemplate.init($this, el)));
                                        foundValidator = true;
                                    }
                                });
                            }
                        }
                        if (!foundValidator) {
                            $.error("Cannot find validation info for '" + el + "'");
                        }
                    });
                    $helpBlock.data("original-contents", ($helpBlock.data("original-contents") ? $helpBlock.data("original-contents") : $helpBlock.html()));
                    $helpBlock.data("original-role", ($helpBlock.data("original-role") ? $helpBlock.data("original-role") : $helpBlock.attr("role")));
                    $controlGroup.data("original-classes", ($controlGroup.data("original-clases") ? $controlGroup.data("original-classes") : $controlGroup.attr("class")));
                    $this.data("original-aria-invalid", ($this.data("original-aria-invalid") ? $this.data("original-aria-invalid") : $this.attr("aria-invalid")));
                    $this.bind("validation.validation", function (event, params) {
                        var value = getValue($this);
                        var errorsFound = [];
                        $.each(validators, function (validatorType, validatorTypeArray) {
                            if (value || value.length || ((params && params.includeEmpty) || !!settings.validatorTypes[validatorType].includeEmpty) || (!!settings.validatorTypes[validatorType].blockSubmit && params && !!params.submitting)) {
                                $.each(validatorTypeArray, function (i, validator) {
                                    if (settings.validatorTypes[validatorType].validate($this, value, validator)) {
                                        errorsFound.push(validator.message);
                                    }
                                });
                            }
                        });
                        return errorsFound;
                    });
                    $this.bind("getValidators.validation", function () {
                        return validators;
                    });
                    var numValidators = 0;
                    $.each(validators, function (i, el) {
                        numValidators += el.length;
                    });
                    $this.bind("getValidatorCount.validation", function () {
                        return numValidators;
                    });
                    $this.bind("submit.validation", function () {
                        return $this.triggerHandler("change.validation", {
                            submitting: true
                        });
                    });
                    $this.bind((settings.options.bindEvents.length > 0 ? settings.options.bindEvents : ["keyup", "focus", "blur", "click", "keydown", "keypress", "change"]).concat(["revalidate"]).join(".validation ") + ".validation", function (e, params) {
                        var value = getValue($this);
                        var errorsFound = [];
                        if (params && !!params.submitting) {
                            $controlGroup.data("jqbvIsSubmitting", true);
                        }
                        else if (e.type !== "revalidate") {
                            $controlGroup.data("jqbvIsSubmitting", false);
                        }
                        var formIsSubmitting = !!$controlGroup.data("jqbvIsSubmitting");
                        $controlGroup.find("input,textarea,select").not('[type=submit]').each(function (i, el) {
                            var oldCount = errorsFound.length;
                            $.each($(el).triggerHandler("validation.validation", params) || [], function (j, message) {
                                errorsFound.push(message);
                            });
                            if (errorsFound.length > oldCount) {
                                $(el).attr("aria-invalid", "true");
                            }
                            else {
                                var original = $this.data("original-aria-invalid");
                                $(el).attr("aria-invalid", (original !== undefined ? original : false));
                            }
                        });
                        $form.find("input,select,textarea").not($this).not("[name=\"" + $this.attr("name") + "\"]").trigger("validationLostFocus.validation");
                        errorsFound = $.unique(errorsFound.sort());
                        if (errorsFound.length) {
                            $controlGroup.removeClass("validate error issue").addClass(formIsSubmitting ? "error" : "issue");
                            if (settings.options.semanticallyStrict && errorsFound.length === 1) {
                                $helpBlock.html(errorsFound[0] + (settings.options.prependExistingHelpBlock ? $helpBlock.data("original-contents") : ""));
                            }
                            else {
                                $helpBlock.html("<ul role=\"alert\"><li>" + errorsFound.join("</li><li>") + "</li></ul>" + (settings.options.prependExistingHelpBlock ? $helpBlock.data("original-contents") : ""));
                            }
                        }
                        else {
                            $controlGroup.removeClass("issue error validate");
                            if (value.length > 0) {
                                $controlGroup.addClass("validate");
                            }
                            $helpBlock.html($helpBlock.data("original-contents"));
                        }
                        if (e.type === "blur") {
                            if (settings.options.removeSuccess) {}
                        }
                    });
                    $this.bind("validationLostFocus.validation", function () {
                        if (settings.options.removeSuccess) {}
                    });
                });
            }
            , destroy: function () {
                return this.each(function () {
                    var $this = $(this)
                        , $controlGroup = $this.parents(".form-group").first()
                        , $helpBlock = $controlGroup.find(".help-block").first()
                        , $form = $this.parents("form").first();
                    $this.unbind('.validation');
                    $form.unbind(".validationSubmit");
                    $helpBlock.html($helpBlock.data("original-contents"));
                    $controlGroup.attr("class", $controlGroup.data("original-classes"));
                    $this.attr("aria-invalid", $this.data("original-aria-invalid"));
                    $helpBlock.attr("role", $this.data("original-role"));
                    if ($.inArray($helpBlock[0], createdElements) > -1) {
                        $helpBlock.remove();
                    }
                });
            }
            , collectErrors: function (includeEmpty) {
                var errorMessages = {};
                this.each(function (i, el) {
                    var $el = $(el);
                    var name = $el.attr("name");
                    var errors = $el.triggerHandler("validation.validation", {
                        includeEmpty: true
                    });
                    errorMessages[name] = $.extend(true, errors, errorMessages[name]);
                });
                $.each(errorMessages, function (i, el) {
                    if (el.length === 0) {
                        delete errorMessages[i];
                    }
                });
                return errorMessages;
            }
            , hasErrors: function () {
                var errorMessages = [];
                this.find('input,select,textarea').add(this).each(function (i, el) {
                    errorMessages = errorMessages.concat($(el).triggerHandler("getValidators.validation") ? $(el).triggerHandler("validation.validation", {
                        submitting: true
                    }) : []);
                });
                return (errorMessages.length > 0);
            }
            , override: function (newDefaults) {
                defaults = $.extend(true, defaults, newDefaults);
            }
        }
        , validatorTypes: {
            callback: {
                name: "callback"
                , init: function ($this, name) {
                    var result = {
                        validatorName: name
                        , callback: $this.data("validation" + name + "Callback")
                        , lastValue: $this.val()
                        , lastValid: true
                        , lastFinished: true
                    };
                    var message = "Not valid";
                    if ($this.data("validation" + name + "Message")) {
                        message = $this.data("validation" + name + "Message");
                    }
                    result.message = message;
                    return result;
                }
                , validate: function ($this, value, validator) {
                    if (validator.lastValue === value && validator.lastFinished) {
                        return !validator.lastValid;
                    }
                    if (validator.lastFinished === true) {
                        validator.lastValue = value;
                        validator.lastValid = true;
                        validator.lastFinished = false;
                        var rrjqbvValidator = validator;
                        var rrjqbvThis = $this;
                        executeFunctionByName(validator.callback, window, $this, value, function (data) {
                            if (rrjqbvValidator.lastValue === data.value) {
                                rrjqbvValidator.lastValid = data.valid;
                                if (data.message) {
                                    rrjqbvValidator.message = data.message;
                                }
                                rrjqbvValidator.lastFinished = true;
                                rrjqbvThis.data("validation" + rrjqbvValidator.validatorName + "Message", rrjqbvValidator.message);
                                setTimeout(function () {
                                    if (!$this.is(":focus") && $this.parents("form").first().data("jqbvIsSubmitting")) {
                                        rrjqbvThis.trigger("blur.validation");
                                    }
                                    else {
                                        rrjqbvThis.trigger("revalidate.validation");
                                    }
                                }, 1);
                            }
                        });
                    }
                    return false;
                }
            }
            , ajax: {
                name: "ajax"
                , init: function ($this, name) {
                    return {
                        validatorName: name
                        , url: $this.data("validation" + name + "Ajax")
                        , lastValue: $this.val()
                        , lastValid: true
                        , lastFinished: true
                    };
                }
                , validate: function ($this, value, validator) {
                    if ("" + validator.lastValue === "" + value && validator.lastFinished === true) {
                        return validator.lastValid === false;
                    }
                    if (validator.lastFinished === true) {
                        validator.lastValue = value;
                        validator.lastValid = true;
                        validator.lastFinished = false;
                        $.ajax({
                            url: validator.url
                            , data: "value=" + encodeURIComponent(value) + "&field=" + $this.attr("name")
                            , dataType: "json"
                            , success: function (data) {
                                if ("" + validator.lastValue === "" + data.value) {
                                    validator.lastValid = !!(data.valid);
                                    if (data.message) {
                                        validator.message = data.message;
                                    }
                                    validator.lastFinished = true;
                                    $this.data("validation" + validator.validatorName + "Message", validator.message);
                                    setTimeout(function () {
                                        $this.trigger("revalidate.validation");
                                    }, 1);
                                }
                            }
                            , failure: function () {
                                validator.lastValid = true;
                                validator.message = "ajax call failed";
                                validator.lastFinished = true;
                                $this.data("validation" + validator.validatorName + "Message", validator.message);
                                setTimeout(function () {
                                    $this.trigger("revalidate.validation");
                                }, 1);
                            }
                        });
                    }
                    return false;
                }
            }
            , regex: {
                name: "regex"
                , init: function ($this, name) {
                    var result = {};
                    var regexString = $this.data("validation" + name + "Regex");
                    result.regex = regexFromString(regexString);
                    if (regexString === undefined) {
                        $.error("Can't find regex for '" + name + "' validator on '" + $this.attr("name") + "'");
                    }
                    var message = "Not in the expected format";
                    if ($this.data("validation" + name + "Message")) {
                        message = $this.data("validation" + name + "Message");
                    }
                    result.message = message;
                    result.originalName = name;
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return (!validator.regex.test(value) && !validator.negative) || (validator.regex.test(value) && validator.negative);
                }
            }
            , email: {
                name: "email"
                , init: function ($this, name) {
                    var result = {};
                    result.regex = regexFromString('[a-zA-Z0-9.!#$%&\u2019*+/=?^_`{|}~-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,4}');
                    var message = "Not a valid email address";
                    if ($this.data("validation" + name + "Message")) {
                        message = $this.data("validation" + name + "Message");
                    }
                    result.message = message;
                    result.originalName = name;
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return (!validator.regex.test(value) && !validator.negative) || (validator.regex.test(value) && validator.negative);
                }
            }
            , required: {
                name: "required"
                , init: function ($this, name) {
                    var message = "This is required";
                    if ($this.data("validation" + name + "Message")) {
                        message = $this.data("validation" + name + "Message");
                    }
                    return {
                        message: message
                        , includeEmpty: true
                    };
                }
                , validate: function ($this, value, validator) {
                    return !!((value.length === 0 && !validator.negative) || (value.length > 0 && validator.negative));
                }
                , blockSubmit: true
            }
            , match: {
                name: "match"
                , init: function ($this, name) {
                    var elementName = $this.data("validation" + name + "Match");
                    var $form = $this.parents("form").first();
                    var $element = $form.find("[name=\"" + elementName + "\"]").first();
                    $element.bind("validation.validation", function () {
                        $this.trigger("revalidate.validation", {
                            submitting: true
                        });
                    });
                    var result = {};
                    result.element = $element;
                    if ($element.length === 0) {
                        $.error("Can't find field '" + elementName + "' to match '" + $this.attr("name") + "' against in '" + name + "' validator");
                    }
                    var message = "Must match";
                    var $label = null;
                    if (($label = $form.find("label[for=\"" + elementName + "\"]")).length) {
                        message += " '" + $label.text() + "'";
                    }
                    else if (($label = $element.parents(".form-group").first().find("label")).length) {
                        message += " '" + $label.first().text() + "'";
                    }
                    if ($this.data("validation" + name + "Message")) {
                        message = $this.data("validation" + name + "Message");
                    }
                    result.message = message;
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return (value !== validator.element.val() && !validator.negative) || (value === validator.element.val() && validator.negative);
                }
                , blockSubmit: true
                , includeEmpty: true
            }
            , max: {
                name: "max"
                , init: function ($this, name) {
                    var result = {};
                    result.max = $this.data("validation" + name + "Max");
                    result.message = "Too high: Maximum of '" + result.max + "'";
                    if ($this.data("validation" + name + "Message")) {
                        result.message = $this.data("validation" + name + "Message");
                    }
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return (parseFloat(value, 10) > parseFloat(validator.max, 10) && !validator.negative) || (parseFloat(value, 10) <= parseFloat(validator.max, 10) && validator.negative);
                }
            }
            , min: {
                name: "min"
                , init: function ($this, name) {
                    var result = {};
                    result.min = $this.data("validation" + name + "Min");
                    result.message = "Too low: Minimum of '" + result.min + "'";
                    if ($this.data("validation" + name + "Message")) {
                        result.message = $this.data("validation" + name + "Message");
                    }
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return (parseFloat(value) < parseFloat(validator.min) && !validator.negative) || (parseFloat(value) >= parseFloat(validator.min) && validator.negative);
                }
            }
            , maxlength: {
                name: "maxlength"
                , init: function ($this, name) {
                    var result = {};
                    result.maxlength = $this.data("validation" + name + "Maxlength");
                    result.message = "Too long: Maximum of '" + result.maxlength + "' characters";
                    if ($this.data("validation" + name + "Message")) {
                        result.message = $this.data("validation" + name + "Message");
                    }
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return ((value.length > validator.maxlength) && !validator.negative) || ((value.length <= validator.maxlength) && validator.negative);
                }
            }
            , minlength: {
                name: "minlength"
                , init: function ($this, name) {
                    var result = {};
                    result.minlength = $this.data("validation" + name + "Minlength");
                    result.message = "Too short: Minimum of '" + result.minlength + "' characters";
                    if ($this.data("validation" + name + "Message")) {
                        result.message = $this.data("validation" + name + "Message");
                    }
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return ((value.length < validator.minlength) && !validator.negative) || ((value.length >= validator.minlength) && validator.negative);
                }
            }
            , maxchecked: {
                name: "maxchecked"
                , init: function ($this, name) {
                    var result = {};
                    var elements = $this.parents("form").first().find("[name=\"" + $this.attr("name") + "\"]");
                    elements.bind("change.validation click.validation", function () {
                        $this.trigger("revalidate.validation", {
                            includeEmpty: true
                        });
                    });
                    result.elements = elements;
                    result.maxchecked = $this.data("validation" + name + "Maxchecked");
                    var message = "Too many: Max '" + result.maxchecked + "' checked";
                    if ($this.data("validation" + name + "Message")) {
                        message = $this.data("validation" + name + "Message");
                    }
                    result.message = message;
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return (validator.elements.filter(":checked").length > validator.maxchecked && !validator.negative) || (validator.elements.filter(":checked").length <= validator.maxchecked && validator.negative);
                }
                , blockSubmit: true
            }
            , minchecked: {
                name: "minchecked"
                , init: function ($this, name) {
                    var result = {};
                    var elements = $this.parents("form").first().find("[name=\"" + $this.attr("name") + "\"]");
                    elements.bind("change.validation click.validation", function () {
                        $this.trigger("revalidate.validation", {
                            includeEmpty: true
                        });
                    });
                    result.elements = elements;
                    result.minchecked = $this.data("validation" + name + "Minchecked");
                    var message = "Too few: Min '" + result.minchecked + "' checked";
                    if ($this.data("validation" + name + "Message")) {
                        message = $this.data("validation" + name + "Message");
                    }
                    result.message = message;
                    return result;
                }
                , validate: function ($this, value, validator) {
                    return (validator.elements.filter(":checked").length < validator.minchecked && !validator.negative) || (validator.elements.filter(":checked").length >= validator.minchecked && validator.negative);
                }
                , blockSubmit: true
                , includeEmpty: true
            }
            , number: {
                name: "number"
                , init: function ($this, name) {
                    var result = {};
                    result.step = 1;
                    if ($this.attr("step")) {
                        result.step = $this.attr("step");
                    }
                    if ($this.data("validation" + name + "Step")) {
                        result.step = $this.data("validation" + name + "Step");
                    }
                    result.decimal = ".";
                    if ($this.data("validation" + name + "Decimal")) {
                        result.decimal = $this.data("validation" + name + "Decimal");
                    }
                    result.thousands = "";
                    if ($this.data("validation" + name + "Thousands")) {
                        result.thousands = $this.data("validation" + name + "Thousands");
                    }
                    result.regex = regexFromString("([+-]?\\d+(\\" + result.decimal + "\\d+)?)?");
                    result.message = "Must be a number";
                    var dataMessage = $this.data("validation" + name + "Message");
                    if (dataMessage) {
                        result.message = dataMessage;
                    }
                    return result;
                }
                , validate: function ($this, value, validator) {
                    var globalValue = value.replace(validator.decimal, ".").replace(validator.thousands, "");
                    var multipliedValue = parseFloat(globalValue);
                    var multipliedStep = parseFloat(validator.step);
                    while (multipliedStep % 1 !== 0) {
                        multipliedStep = parseFloat(multipliedStep.toPrecision(12)) * 10;
                        multipliedValue = parseFloat(multipliedValue.toPrecision(12)) * 10;
                    }
                    var regexResult = validator.regex.test(value);
                    var stepResult = parseFloat(multipliedValue) % parseFloat(multipliedStep) === 0;
                    var typeResult = !isNaN(parseFloat(globalValue)) && isFinite(globalValue);
                    var result = !(regexResult && stepResult && typeResult);
                    return result;
                }
                , message: "Must be a number",
            }
        }
        , builtInValidators: {
            email: {
                name: "Email"
                , type: "email"
            }
            , passwordagain: {
                name: "Passwordagain"
                , type: "match"
                , match: "password"
                , message: "Does not match the given password<!-- data-validator-paswordagain-message to override -->"
            }
            , positive: {
                name: "Positive"
                , type: "shortcut"
                , shortcut: "number,positivenumber"
            }
            , negative: {
                name: "Negative"
                , type: "shortcut"
                , shortcut: "number,negativenumber"
            }
            , integer: {
                name: "Integer"
                , type: "regex"
                , regex: "[+-]?\\d+"
                , message: "No decimal places allowed<!-- data-validator-integer-message to override -->"
            }
            , positivenumber: {
                name: "Positivenumber"
                , type: "min"
                , min: 0
                , message: "Must be a positive number<!-- data-validator-positivenumber-message to override -->"
            }
            , negativenumber: {
                name: "Negativenumber"
                , type: "max"
                , max: 0
                , message: "Must be a negative number<!-- data-validator-negativenumber-message to override -->"
            }
            , required: {
                name: "Required"
                , type: "required"
                , message: "This is required<!-- data-validator-required-message to override -->"
            }
            , checkone: {
                name: "Checkone"
                , type: "minchecked"
                , minchecked: 1
                , message: "Check at least one option<!-- data-validation-checkone-message to override -->"
            }
            , number: {
                name: "Number"
                , type: "number"
                , decimal: "."
                , step: "1"
            }
            , pattern: {
                name: "Pattern"
                , type: "regex"
                , message: "Not in expected format"
            }
        }
    };
    var formatValidatorName = function (name) {
        return name.toLowerCase().replace(/(^|\s)([a-z])/g, function (m, p1, p2) {
            return p1 + p2.toUpperCase();
        });
    };
    var getValue = function ($this) {
        var value = null;
        var type = $this.attr("type");
        if (type === "checkbox") {
            value = ($this.is(":checked") ? value : "");
            var checkboxParent = $this.parents("form").first() || $this.parents(".form-group").first();
            if (checkboxParent) {
                value = checkboxParent.find("input[name='" + $this.attr("name") + "']:checked").map(function (i, el) {
                    return $(el).val();
                }).toArray().join(",");
            }
        }
        else if (type === "radio") {
            value = ($('input[name="' + $this.attr("name") + '"]:checked').length > 0 ? $this.val() : "");
            var radioParent = $this.parents("form").first() || $this.parents(".form-group").first();
            if (radioParent) {
                value = radioParent.find("input[name='" + $this.attr("name") + "']:checked").map(function (i, el) {
                    return $(el).val();
                }).toArray().join(",");
            }
        }
        else if (type === "number") {
            if ($this[0].validity.valid) {
                value = $this.val();
            }
            else {
                if ($this[0].validity.badInput || $this[0].validity.stepMismatch) {
                    value = "NaN";
                }
                else {
                    value = "";
                }
            }
        }
        else {
            value = $this.val();
        }
        return value;
    };

    function regexFromString(inputstring) {
        return new RegExp("^" + inputstring + "$");
    }
    /**
       * Thanks to Jason Bunting via StackOverflow.com
       *
       * http://stackoverflow.com/questions/359788/how-to-execute-a-javascript-function-when-i-have-its-name-as-a-string#answer-359910
       * Short link: http://tinyurl.com/executeFunctionByName
      **/
    function executeFunctionByName(functionName, context) {
        var args = Array.prototype.slice.call(arguments, 2);
        var namespaces = functionName.split(".");
        var func = namespaces.pop();
        for (var i = 0; i < namespaces.length; i++) {
            context = context[namespaces[i]];
        }
        return context[func].apply(context, args);
    }
    $.fn.jqBootstrapValidation = function (method) {
        if (defaults.methods[method]) {
            return defaults.methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        }
        else if (typeof method === 'object' || !method) {
            return defaults.methods.init.apply(this, arguments);
        }
        else {
            $.error('Method ' + method + ' does not exist on jQuery.jqBootstrapValidation');
            return null;
        }
    };
    $.jqBootstrapValidation = function (options) {
        $(":input").not("[type=image],[type=submit]").jqBootstrapValidation.apply(this, arguments);
    };
})(jQuery);


//[Javascript]



$(function () {
    "use strict";   

		WeatherIcon.add('icon1'	, WeatherIcon.SLEET , {stroke:false , shadow:false , animated:true } );
		WeatherIcon.add('icon2'	, WeatherIcon.SNOW , {stroke:false , shadow:false , animated:true } );
		WeatherIcon.add('icon3'	, WeatherIcon.LIGHTRAINTHUNDER , {stroke:false , shadow:false , animated:true } ); 
	
  }); // End of use strict

  //[widget charts Javascript]


$(function () {
    "use strict"; 
	
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			autoplay: true,
			responsive: {
			  0: {
				items: 1,
				nav: false
			  },
			  600: {
				items: 3,
				nav: false
			  },
			  1000: {
				items: 4,
				nav: false,
				margin: 20
			  }
			}
		  });
	
}); // End of use strict

//[widget charts Javascript]


$( document ).ready(function() {
    "use strict";
	
	//-----demo-1
	
	new Chartist.Line('.ct-chart-1', {
	  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
	  series: [
		[12, 9, 7, 8, 5],
		[2, 1, 3.5, 7, 3],
		[1, 3, 4, 5, 6]
	  ]
	}, {
	  fullWidth: true,
	  chartPadding: {
		right: 40
	  }
	});
	
	//-----demo-2
	
	var chart = new Chartist.Line('.ct-chart-2', {
	  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
	  series: [
		[5, 5, 10, 8, 7, 5, 4, null, null, null, 10, 10, 7, 8, 6, 9],
		[10, 15, null, 12, null, 10, 12, 15, null, null, 12, null, 14, null, null, null],
		[null, null, null, null, 3, 4, 1, 3, 4,  6,  7,  9, 5, null, null, null],
		[{x:3, y: 3},{x: 4, y: 3}, {x: 5, y: undefined}, {x: 6, y: 4}, {x: 7, y: null}, {x: 8, y: 4}, {x: 9, y: 4}]
	  ]
	}, {
	  fullWidth: true,
	  chartPadding: {
		right: 10
	  },
	  low: 0
	});
	
	//-----demo-3
	
	var chart = new Chartist.Line('.ct-chart-3', {
	  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
	  series: [
		[5, 5, 10, 8, 7, 5, 4, null, null, null, 10, 10, 7, 8, 6, 9],
		[10, 15, null, 12, null, 10, 12, 15, null, null, 12, null, 14, null, null, null],
		[null, null, null, null, 3, 4, 1, 3, 4,  6,  7,  9, 5, null, null, null],
		[{x:3, y: 3},{x: 4, y: 3}, {x: 5, y: undefined}, {x: 6, y: 4}, {x: 7, y: null}, {x: 8, y: 4}, {x: 9, y: 4}]
	  ]
	}, {
	  fullWidth: true,
	  chartPadding: {
		right: 10
	  },
	  lineSmooth: Chartist.Interpolation.cardinal({
		fillHoles: true,
	  }),
	  low: 0
	});
	
	//-----demo-4
	new Chartist.Line('.ct-chart-4', {
	  labels: [1, 2, 3, 4, 5, 6, 7, 8],
	  series: [
		[5, 9, 7, 8, 5, 3, 5, 4]
	  ]
	}, {
	  low: 0,
	  showArea: true
	});
	
	//-----demo-5
	new Chartist.Line('.ct-chart-5', {
	  labels: [1, 2, 3, 4, 5, 6, 7, 8],
	  series: [
		[1, 2, 3, 1, -2, 0, 1, 0],
		[-2, -1, -2, -1, -2.5, -1, -2, -1],
		[0, 0, 0, 1, 2, 2.5, 2, 1],
		[2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
	  ]
	}, {
	  high: 3,
	  low: -3,
	  showArea: true,
	  showLine: false,
	  showPoint: false,
	  fullWidth: true,
	  axisX: {
		showLabel: false,
		showGrid: false
	  }
	});
	
	//-----demo-6	
	var chart = new Chartist.Line('.ct-chart-6', {
	  labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
	  series: [
		[12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
		[4,  5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
		[5,  3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
		[3,  4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
	  ]
	}, {
	  low: 0
	});

	// Let's put a sequence number aside so we can use it in the event callbacks
	var seq = 0,
	  delays = 80,
	  durations = 500;

	// Once the chart is fully created we reset the sequence
	chart.on('created', function() {
	  seq = 0;
	});

	// On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
	chart.on('draw', function(data) {
	  seq++;

	  if(data.type === 'line') {
		// If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
		data.element.animate({
		  opacity: {
			// The delay when we like to start the animation
			begin: seq * delays + 1000,
			// Duration of the animation
			dur: durations,
			// The value where the animation should start
			from: 0,
			// The value where it should end
			to: 1
		  }
		});
	  } else if(data.type === 'label' && data.axis === 'x') {
		data.element.animate({
		  y: {
			begin: seq * delays,
			dur: durations,
			from: data.y + 100,
			to: data.y,
			// We can specify an easing function from Chartist.Svg.Easing
			easing: 'easeOutQuart'
		  }
		});
	  } else if(data.type === 'label' && data.axis === 'y') {
		data.element.animate({
		  x: {
			begin: seq * delays,
			dur: durations,
			from: data.x - 100,
			to: data.x,
			easing: 'easeOutQuart'
		  }
		});
	  } else if(data.type === 'point') {
		data.element.animate({
		  x1: {
			begin: seq * delays,
			dur: durations,
			from: data.x - 10,
			to: data.x,
			easing: 'easeOutQuart'
		  },
		  x2: {
			begin: seq * delays,
			dur: durations,
			from: data.x - 10,
			to: data.x,
			easing: 'easeOutQuart'
		  },
		  opacity: {
			begin: seq * delays,
			dur: durations,
			from: 0,
			to: 1,
			easing: 'easeOutQuart'
		  }
		});
	  } else if(data.type === 'grid') {
		// Using data.axis we get x or y which we can use to construct our animation definition objects
		var pos1Animation = {
		  begin: seq * delays,
		  dur: durations,
		  from: data[data.axis.units.pos + '1'] - 30,
		  to: data[data.axis.units.pos + '1'],
		  easing: 'easeOutQuart'
		};

		var pos2Animation = {
		  begin: seq * delays,
		  dur: durations,
		  from: data[data.axis.units.pos + '2'] - 100,
		  to: data[data.axis.units.pos + '2'],
		  easing: 'easeOutQuart'
		};

		var animations = {};
		animations[data.axis.units.pos + '1'] = pos1Animation;
		animations[data.axis.units.pos + '2'] = pos2Animation;
		animations['opacity'] = {
		  begin: seq * delays,
		  dur: durations,
		  from: 0,
		  to: 1,
		  easing: 'easeOutQuart'
		};

		data.element.animate(animations);
	  }
	});

	// For the sake of the example we update the chart every time it's created with a delay of 10 seconds
	chart.on('created', function() {
	  if(window.__exampleAnimateTimeout) {
		clearTimeout(window.__exampleAnimateTimeout);
		window.__exampleAnimateTimeout = null;
	  }
	  window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
	});
	
	//-----demo-7
	var chart = new Chartist.Line('.ct-chart-7', {
	  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	  series: [
		[1, 5, 2, 5, 4, 3],
		[2, 3, 4, 8, 1, 2],
		[5, 4, 3, 2, 1, 0.5]
	  ]
	}, {
	  low: 0,
	  showArea: true,
	  showPoint: false,
	  fullWidth: true
	});

	chart.on('draw', function(data) {
	  if(data.type === 'line' || data.type === 'area') {
		data.element.animate({
		  d: {
			begin: 2000 * data.index,
			dur: 2000,
			from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
			to: data.path.clone().stringify(),
			easing: Chartist.Svg.Easing.easeOutQuint
		  }
		});
	  }
	});
	
	//-----demo-8	
	var chart = new Chartist.Pie('.ct-chart-8', {
	  series: [10, 20, 50, 20, 5, 50, 15],
	  labels: [1, 2, 3, 4, 5, 6, 7]
	}, {
	  donut: true,
	  showLabel: false
	});

	chart.on('draw', function(data) {
	  if(data.type === 'slice') {
		// Get the total path length in order to use for dash array animation
		var pathLength = data.element._node.getTotalLength();

		// Set a dasharray that matches the path length as prerequisite to animate dashoffset
		data.element.attr({
		  'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
		});

		// Create animation definition while also assigning an ID to the animation for later sync usage
		var animationDefinition = {
		  'stroke-dashoffset': {
			id: 'anim' + data.index,
			dur: 1000,
			from: -pathLength + 'px',
			to:  '0px',
			easing: Chartist.Svg.Easing.easeOutQuint,
			// We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
			fill: 'freeze'
		  }
		};

		// If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
		if(data.index !== 0) {
		  animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
		}

		// We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
		data.element.attr({
		  'stroke-dashoffset': -pathLength + 'px'
		});

		// We can't use guided mode as the animations need to rely on setting begin manually
		// See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
		data.element.animate(animationDefinition, false);
	  }
	});

	// For the sake of the example we update the chart every time it's created with a delay of 8 seconds
	chart.on('created', function() {
	  if(window.__anim21278907124) {
		clearTimeout(window.__anim21278907124);
		window.__anim21278907124 = null;
	  }
	  window.__anim21278907124 = setTimeout(chart.update.bind(chart), 10000);
	});

	
	//-----demo-9	
	var data = {
	  labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
	  series: [
		[1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
	  ]
	};

	var options = {
	  high: 10,
	  low: -10,
	  axisX: {
		labelInterpolationFnc: function(value, index) {
		  return index % 2 === 0 ? value : null;
		}
	  }
	};

	new Chartist.Bar('.ct-chart-9', data, options);
	
	//-----demo-10
	
	new Chartist.Bar('.ct-chart-10', {
	  labels: ['Q1', 'Q2', 'Q3', 'Q4'],
	  series: [
		[800000, 1200000, 1400000, 1300000],
		[200000, 400000, 500000, 300000],
		[100000, 200000, 400000, 600000]
	  ]
	}, {
	  stackBars: true,
	  axisY: {
		labelInterpolationFnc: function(value) {
		  return (value / 1000) + 'k';
		}
	  }
	}).on('draw', function(data) {
	  if(data.type === 'bar') {
		data.element.attr({
		  style: 'stroke-width: 30px'
		});
	  }
	});
	
	
	// ct-gauge-chart

	new Chartist.Pie('.ct-gauge-chart', {
	  series: [20, 10, 30, 40]
	}, {
	  donut: true,
	  donutWidth: 60,
	  startAngle: 270,
	  total: 200,
	  low:0,
	  showLabel: false
	});

	
	//-----demo-11	
	new Chartist.Bar('.ct-chart-11', {
	  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
	  series: [
		[5, 4, 3, 7, 5, 10, 3],
		[3, 2, 9, 5, 4, 6, 4]
	  ]
	}, {
	  seriesBarDistance: 10,
	  reverseData: true,
	  horizontalBars: true,
	  axisY: {
		offset: 70
	  }
	});
	
	//-----demo-12		
	new Chartist.Bar('.ct-chart-12', {
	  labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'],
	  series: [
		[5, 4, 3, 7],
		[3, 2, 9, 5],
		[1, 5, 8, 4],
		[2, 3, 4, 6],
		[4, 1, 2, 1]
	  ]
	}, {
	  // Default mobile configuration
	  stackBars: true,
	  axisX: {
		labelInterpolationFnc: function(value) {
		  return value.split(/\s+/).map(function(word) {
			return word[0];
		  }).join('');
		}
	  },
	  axisY: {
		offset: 20
	  }
	}, [
	  // Options override for media > 400px
	  ['screen and (min-width: 400px)', {
		reverseData: true,
		horizontalBars: true,
		axisX: {
		  labelInterpolationFnc: Chartist.noop
		},
		axisY: {
		  offset: 60
		}
	  }],
	  // Options override for media > 800px
	  ['screen and (min-width: 800px)', {
		stackBars: false,
		seriesBarDistance: 10
	  }],
	  // Options override for media > 1000px
	  ['screen and (min-width: 1000px)', {
		reverseData: false,
		horizontalBars: false,
		seriesBarDistance: 15
	  }]
	]);

	
}); // End of use strict

//[widget charts Javascript]

//Project:	Unique Admin - Responsive Admin Template
//Primary use:   Used only for the  widget charts



$( document ).ready(function() {
    "use strict";
	

	if( $('#bubble-chart').length > 0 ){
		var ctx5 = document.getElementById("bubble-chart").getContext("2d");
		var data5 = {
			datasets: [
				{
					label: 'First Dataset',
					data: [
						{
							x: 80,
							y: 60,
							r: 10
						},
						{
							x: 40,
							y: 40,
							r: 10
						},
						{
							x: 30,
							y: 40,
							r: 20
						},
						{
							x: 20,
							y: 10,
							r: 10
						},
						{
							x: 50,
							y: 30,
							r: 10
						}
					],
					backgroundColor:"#689f38",
					hoverBackgroundColor: "#33691e",
				},
				{
					label: 'Second Dataset',
					data: [
						{
							x: 40,
							y: 30,
							r: 10
						},
						{
							x: 25,
							y: 20,
							r: 10
						},
						{
							x: 35,
							y: 30,
							r: 10
						}
					],
					backgroundColor:"#38649f",
					hoverBackgroundColor: "#244674",
				}]
		};
		
		var bubbleChart = new Chart(ctx5,{
			type:"bubble",
			data:data5,
			options: {
				elements: {
					points: {
						borderWidth: 1,
						borderColor: 'rgb(33, 33, 33)'
					}
				},
				scales: {
					xAxes: [
					{
						ticks: {
							min: -10,
							max: 100,
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						},
						gridLines: {
							color: "rgba(135,135,135,0)",
						}
					}],
					yAxes: [
					{
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						},
						gridLines: {
							color: "rgba(135,135,135,0)",
						}
					}]
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				legend: {
					labels: {
					fontFamily: "Nunito Sans",
					fontColor:"#878787"
					}
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				}
			}
		});
	}

	if( $('#pie-chart').length > 0 ){
		var ctx6 = document.getElementById("pie-chart").getContext("2d");
		var data6 = {
			 labels: [
			"lab 1",
			"lab 2",
			"lab 3"
		],
		datasets: [
			{
				data: [300, 50, 100],
				backgroundColor: [
					"#689f38",
					"#38649f",
					"#389f99"
				],
				hoverBackgroundColor: [
					"#33691e",
					"#244674",
					"#18625e"
				]
			}]
		};
		
		var pieChart  = new Chart(ctx6,{
			type: 'pie',
			data: data6,
			options: {
				animation: {
					duration:	3000
				},
				responsive: true,
				legend: {
					labels: {
					fontFamily: "Nunito Sans",
					fontColor:"#878787"
					}
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				},
				elements: {
					arc: {
						borderWidth: 0
					}
				}
			}
		});
	}

	if( $('#doughnut-chart').length > 0 ){
		var ctx7 = document.getElementById("doughnut-chart").getContext("2d");
		var data7 = {
			 labels: [
			"lab 1",
			"lab 2",
			"lab 3"
		],
		datasets: [
			{
				data: [300, 50, 100],
				backgroundColor: [
					"#389f99",
					"#ee1044",
					"#ff8f00"
				],
				hoverBackgroundColor: [
					"#18625e",
					"#b31338",
					"#c0720f"
				]
			}]
		};
		
		var doughnutChart = new Chart(ctx7, {
			type: 'doughnut',
			data: data7,
			options: {
				animation: {
					duration:	3000
				},
				responsive: true,
				legend: {
					labels: {
					fontFamily: "Nunito Sans",
					fontColor:"#878787"
					}
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				},
				elements: {
					arc: {
						borderWidth: 0
					}
				}
			}
		});
	}
	
	// Bar chart
	new Chart(document.getElementById("bar-chart1"), {
		type: 'bar',
		data: {
		  labels: ["January", "February", "March", "April", "May"],
		  datasets: [
			{
			  label: "Dataset",
			  backgroundColor: ["#689f38", "#38649f","#389f99","#ee1044","#ff8f00"],
			  data: [8545,6589,5894,4985,1548]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'My dataset'
		  }
		}
	});
	
	if( $('#bar-chart2').length > 0 ){
		var ctx2 = document.getElementById("bar-chart2").getContext("2d");
		var data2 = {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [
				{
					label: "My First dataset",
					backgroundColor: "#689f38",
					borderColor: "#689f38",
					data: [15, 20, 70, 51, 36, 85, 50]
				},
				{
					label: "My Second dataset",
					backgroundColor: "#38649f",
					borderColor: "#38649f",
					data: [28, 48, 40, 19, 86, 27, 90]
				},
				{
					label: "My Third dataset",
					backgroundColor: "#389f99",
					borderColor: "#389f99",
					data: [8, 28, 50, 29, 76, 77, 40]
				}
			]
		};
		
		var hBar = new Chart(ctx2, {
			type:"bar",
			data:data2,
			
			options: {
				tooltips: {
					mode:"label"
				},
				scales: {
					yAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					xAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					
				},
				elements:{
					point: {
						hitRadius:40
					}
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				maintainAspectRatio:false,
				legend: {
					display: false,
				},
				
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				}
				
			}
		});
	};


	// Horizental Bar Chart
	new Chart(document.getElementById("bar-chart-horizontal1"), {
		type: 'horizontalBar',
		data: {
		  labels: ["January", "February", "March", "April", "May"],
		  datasets: [
			{
			  label: "Dataset",
			  backgroundColor: ["#689f38", "#38649f","#389f99","#ee1044","#ff8f00"],
			  data: [8545,6589,5894,4985,1548]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'My dataset'
		  }
		}
	});
	
	if( $('#bar-chart-horizontal2').length > 0 ){
		var ctx2 = document.getElementById("bar-chart-horizontal2").getContext("2d");
		var data2 = {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [
				{
					label: "My First dataset",
					backgroundColor: "#689f38",
					borderColor: "#689f38",
					data: [10, 59, 40, 75, 50, 45, 80]
				},
				{
					label: "My Second dataset",
					backgroundColor: "#38649f",
					borderColor: "#38649f",
					data: [48, 88, 50, 58, 34, 67, 65]
				}
			]
		};
		
		var hBar = new Chart(ctx2, {
			type:"horizontalBar",
			data:data2,
			
			options: {
				tooltips: {
					mode:"label"
				},
				scales: {
					yAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					xAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					
				},
				elements:{
					point: {
						hitRadius:40
					}
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				legend: {
					display: false,
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				}
				
			}
		});
	}

	//Polar Chart
	new Chart(document.getElementById("polar-chart1"), {
		type: 'polarArea',
		data: {
		  labels: ["January", "February", "March", "April"],
		  datasets: [
			{
			  label: "Dataset",
			  backgroundColor: ["#689f38", "#38649f","#389f99","#ee1044","#ff8f00"],
			  data: [2584,5698,5987,3485]
			}
		  ]
		},
		options: {
		  title: {
			display: true,
			text: 'Mt Dataset'
		  }
		}
	});

	if( $('#polar-chart2').length > 0 ){
		var ctx4 = document.getElementById("polar-chart2").getContext("2d");
		var data4 = {
			datasets: [{
				data: [
					11,
					16,
					7,
					3,
					14
				],
				backgroundColor: [
					"#689f38",
					"#38649f",
					"#389f99",
					"#ee1044",
					"#ff8f00"
				],
				hoverBackgroundColor: [
					"#33691e",
					"#244674",
					"#18625e",
					"#b31338",
					"#c0720f"
				],
				label: 'My dataset' // for legend
			}],
			labels: [
				"lab 1",
				"lab 2",
				"lab 3",
				"lab 4",
				"lab 5"
			]
		};
		var polarChart = new Chart(ctx4, {
			type: "polarArea",
			data: data4,
			options: {
				elements: {
					arc: {
						borderColor: "#fff",
						borderWidth: 0
					}
				},
				scale: {
					ticks: {
						beginAtZero: true,
						fontFamily: "Nunito Sans",
						
					},
					gridLines: {
						color: "rgba(135,135,135,0)",
					}
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				legend: {
					labels: {
					fontFamily: "Nunito Sans",
					fontColor:"#878787"
					}
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				}
			}
		});
	}

	//Radar chart
	new Chart(document.getElementById("radar-chart1"), {
		type: 'radar',
		data: {
		  labels: ["January", "February", "March", "April", "May"],
		  datasets: [
			{
			  label: "250",
			  fill: true,
			  backgroundColor: "rgba(179,181,198,0.2)",
			  borderColor: "rgba(179,181,198,1)",
			  pointBorderColor: "#fff",
			  pointBackgroundColor: "rgba(179,181,198,1)",
			  data: [8.77,55.61,21.69,6.62,6.82]
			}, {
			  label: "4050",
			  fill: true,
			  backgroundColor: "rgba(239, 72, 62, 0.2)",
			  borderColor: "rgba(239, 72, 62, 1)",
			  pointBorderColor: "#fff",
			  pointBackgroundColor: "#ff4c52",
			  pointBorderColor: "#fff",
			  data: [25.48,54.16,7.61,8.06,4.45]
			}
		  ]
		},
		options: {
		  title: {
			display: true,
			text: 'My dataset'
		  }
		}
	});

	if( $('#radar-chart2').length > 0 ){
		var ctx3 = document.getElementById("radar-chart2").getContext("2d");
		var data3 = {
			labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
			datasets: [
				{
					label: "My First dataset",
					backgroundColor: "rgba(116, 96, 238, 0.6)",
					borderColor: "rgba(116, 96, 238, 0.6)",
					pointBackgroundColor: "rgba(116, 96, 238, 0.6)",
					pointBorderColor: "#fff",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(116, 96, 238, 0.6)",
					data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
					label: "My Second dataset",
					backgroundColor: "rgba(57, 139, 247, 1)",
					borderColor: "rgba(57, 139, 247, 1)",
					pointBackgroundColor: "rgba(57, 139, 247, 1)",
					pointBorderColor: "#fff",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(57, 139, 247, 1)",
					data: [28, 48, 40, 19, 96, 27, 100]
				}
			]
		};
		var radarChart = new Chart(ctx3, {
			type: "radar",
			data: data3,
			options: {
					scale: {
						ticks: {
							beginAtZero: true,
							fontFamily: "Nunito Sans",
							
						},
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						pointLabels:{
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						},
					},
					
					animation: {
						duration:	3000
					},
					responsive: true,
					legend: {
							labels: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
							}
						},
						elements: {
							arc: {
								borderWidth: 0
							}
						},
						tooltip: {
						backgroundColor:'rgba(33,33,33,1)',
						cornerRadius:0,
						footerFontFamily:"'Nunito Sans'"
					}
			}
		});
	}
	//Line Chart
	
	new Chart(document.getElementById("line-chart1"), {
	  type: 'line',
	  data: {
		labels: [4500,3500,3200,3050,2700,2450,2200,1750,1499,2050],
		datasets: [{ 
			data: [86,114,106,106,107,111,133,221,783,2478],
			label: "January",
			borderColor: "#689f38",
			fill: false
		  }, { 
			data: [282,350,411,502,635,809,947,1402,3700,5267],
			label: "February",
			borderColor: "#38649f",
			fill: false
		  }, { 
			data: [168,170,178,190,203,276,408,547,675,734],
			label: "March",
			borderColor: "#389f99",
			fill: false
		  }, { 
			data: [40,20,10,16,24,38,74,167,508,784],
			label: "April",
			borderColor: "#ee1044",
			fill: false
		  }, { 
			data: [6,3,2,2,7,26,82,172,312,433],
			label: "May",
			borderColor: "#ff8f00",
			fill: false
		  }
		]
	  },
	  options: {
		title: {
		  display: true,
		  text: 'My Dateset'
		}
	  }
	});
	
	if( $('#line-chart2').length > 0 ){
		var ctx1 = document.getElementById("line-chart2").getContext("2d");
		var data1 = {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [
			{
				label: "fir",
				backgroundColor: "#ff8f00",
				borderColor: "#ff8f00",
				pointBorderColor: "#ff8f00",
				pointHighlightStroke: "#ff8f00",
				data: [0, 59, 40, 75, 50, 45, 80]
			},
			{
				label: "sec",
				backgroundColor: "#ee1044",
				borderColor: "#ee1044",
				pointBorderColor: "#ee1044",
				pointBackgroundColor: "#ee1044",
				data: [48, 88, 50, 58, 34, 67, 65],
			}
			
		]
		};
		
		var areaChart = new Chart(ctx1, {
			type:"line",
			data:data1,
			
			options: {
				tooltips: {
					mode:"label"
				},
				elements:{
					point: {
						hitRadius:90
					}
				},
				
				scales: {
					yAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					xAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}]
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				legend: {
					display: false,
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				}
				
			}
		});
	}

	
}); // End of use strict

//[widget charts Javascript]


$( document ).ready(function() {
    "use strict";	
	var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'Dataset 1',
				backgroundColor: color(window.chartColors.primary).alpha(1).rgbString(),
				borderColor: window.chartColors.primary,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'Dataset 2',
				backgroundColor: color(window.chartColors.danger).alpha(1).rgbString(),
				borderColor: window.chartColors.danger,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas-1').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: false,
					}
				}
			});

		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			var zero = Math.random() < 0.2 ? true : false;
			barChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return zero ? 0.0 : randomScalingFactor();
				});

			});
			window.myBar.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[barChartData.datasets.length % colorNames.length];
			var dsColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + barChartData.datasets.length,
				backgroundColor: color(dsColor).alpha(0.5).rgbString(),
				borderColor: dsColor,
				borderWidth: 1,
				data: []
			};

			for (var index = 0; index < barChartData.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			barChartData.datasets.push(newDataset);
			window.myBar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (barChartData.datasets.length > 0) {
				var month = MONTHS[barChartData.labels.length % MONTHS.length];
				barChartData.labels.push(month);

				for (var index = 0; index < barChartData.datasets.length; ++index) {
					// window.myBar.addData(randomScalingFactor(), index);
					barChartData.datasets[index].data.push(randomScalingFactor());
				}

				window.myBar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			barChartData.datasets.splice(0, 1);
			window.myBar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			barChartData.labels.splice(-1, 1); // remove the label first

			barChartData.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myBar.update();
		});
	
	
	
}); // End of use strict


//[widget flot charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the  widget flot charts


$(function () {

    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 1000

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 200) {
          y = 200
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid: {
            color: "#AFAFAF"
            , hoverable: true
            , borderWidth: 0
            , backgroundColor: 'rgba(255, 255, 255, 0)'
        },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#689f38'
      },
	  tooltip: true,
      lines : {
        fill : false, //Converts the line chart to area chart
        color: '#689f38'
      },
	  tooltipOpts: {
            content: "Visit: %y"
            , defaultTheme: false
        },
      yaxis : {
        min : 0,
        max : 200,
        show: true
      },
      xaxis : {
        show: true
      }
    })

    var updateInterval = 30 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */
	
	
	

    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = -0.1; i < 8; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#689f38'
    }
    var line_data2 = {
      data : cos,
      color: '#38649f'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#689f38', '#38649f']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[3.5, 58.0], [4.5, 93.4], [5.5, 122.4], [6.5, 128.4], [7.5, 135.7], [8.5, 139.7],
      [9.5, 134.6], [10.5, 120.3], [11.5, 155.3], [12.5, 165.4], [13.5, 166.5], [14.5, 161.7], [15.5, 179.9],
      [16.5, 195.4], [17.5, 157.8], [18.5, 158.2], [19.5, 199.5], [20.5, 200.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#389f99'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['Jan', 19], ['Feb', 25], ['Mar', 27], ['Apr', 28], ['May', 15], ['Jun', 6], ['Jul', 17], ['Aug', 7], ['Sep', 14], ['Oct', 24], ['Nov', 16], ['Dec', 2]],
      color: '#ee1044', borderWidth:'0.5'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
		  lineWidth: 0,
		  fillColor:'#ee1044',
          align   : 'center',
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      { label: 'Jan-Apr', data: 85, color: '#ee1044' },
      { label: 'May-Aug', data: 68, color: '#ff8f00' },
      { label: 'Sep-Dec', data: 42, color: '#689f38' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.3,
          label      : {
          show       : true,
          radius     : 1,
          formatter  : labelFormatter,
          threshold  : 0.1,
		  background : {opacity: 0.5,color: '#000'}
          }
        }
      },
      legend: {
        show: true
      },
	  grid: {
        hoverable: true,
        clickable: true
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }


//[widget inline charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the  widget inline charts


$(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle   // Previous start angle
              , sat = this.startAngle  // Start angle
              , ea                     // Previous end angle
              , eat = sat + a          // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */
	
	//SPARKLINE pia CHARTS
	
	$("#sparkline5").sparkline([18, 22, 38, 20], {
        type: 'pie',
        height: '100',
        sliceColors: ['#3aa0dc', '#06d79c', '#745af2', '#ff4c52'],
        highlightLighten: 1.1
    }); 
	
    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data());
    });

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines();
    drawMouseSpeedDemo();

  });
  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
    $('#compositebar').sparkline([7,3,10,5,4,8,6,4,2,4,5,3,4,5],
        {composite: true, fillColor: false, lineColor: '#ff4c52'});


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline();

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
        {type: 'line', height: '2.5em', width: '4em'});

    // Customized line chart
    $('#linecustom').sparkline('html',
        {
          height: '1.5em', width: '8em', lineColor: '#ff4c52', fillColor: '#faa700',
          minSpotColor: false, maxSpotColor: false, spotColor: '#745af2', spotRadius: 3
        });

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', {type: 'bar'});

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
      type: 'bar',
      tooltipFormat: '{{value:levels}} - {{value}}',
      tooltipValueLookups: {
        levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
      }
    });

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', {type: 'tristate'});
    $('.sparktristatecols').sparkline('html',
        {type: 'tristate', colorMap: {'-2': '#3aa0dc', '2': '#3aa0dc'}});

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
    $('#compositeline').sparkline([7,3,10,5,4,8,6,4,2,4,5,3,4,5],
        {composite: true, fillColor: false, lineColor: '#ff4c52', changeRangeMin: 0, chartRangeMax: 10});

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
    $('#normalExample').sparkline('html',
        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

    // Discrete charts
    $('.discrete1').sparkline('html',
        {type: 'discrete', lineColor: '#3aa0dc', xwidth: 18});
    $('#discrete2').sparkline('html',
        {type: 'discrete', lineColor: '#3aa0dc', thresholdColor: '#ff4c52', thresholdValue: 4});

    // Bullet charts
    $('.sparkbullet').sparkline('html', {type: 'bullet'});

    // Pie charts
    $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

    // Box plots
    $('.sparkboxplot').sparkline('html', {type: 'box'});
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
        {type: 'box', raw: true, showOutliers: true, target: 6});

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type: 'box',
      tooltipFormatFieldlist: ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    });

    // click event demo sparkline
    $('.clickdemo').sparkline();
    $('.clickdemo').bind('sparklineClick', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      alert("Clicked on x=" + region.x + " y=" + region.y);
    });

    // mouseover event demo sparkline
    $('.mouseoverdemo').sparkline();
    $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
    }).bind('mouseleave', function () {
      $('.mouseoverregion').text('');
    });
  }

  /**
   ** Draw the little mouse speed animated graph
   ** This just attaches a handler to the mousemove event to see
   ** (roughly) how far the mouse has moved
   ** and then updates the display a couple of times a second via
   ** setTimeout()
   **/
  function drawMouseSpeedDemo() {
    var mrefreshinterval = 500; // update display every 500ms
    var lastmousex = -1;
    var lastmousey = -1;
    var lastmousetime;
    var mousetravel = 0;
    var mpoints = [];
    var mpoints_max = 30;
    $('html').mousemove(function (e) {
      var mousex = e.pageX;
      var mousey = e.pageY;
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
      }
      lastmousex = mousex;
      lastmousey = mousey;
    });
    var mdraw = function () {
      var md = new Date();
      var timenow = md.getTime();
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
        mpoints.push(pps);
        if (mpoints.length > mpoints_max)
          mpoints.splice(0, 1);
        mousetravel = 0;
        $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
      }
      lastmousetime = timenow;
      setTimeout(mdraw, mrefreshinterval);
    };
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval);
  }

  //[widget morris charts Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";

    Morris.Area({
        element: 'area-chart',
        data: [{
            period: '2010',
            data1: 55,
            data2: 85,
            data3: 25
        }, {
            period: '2011',
            data1: 135,
            data2: 105,
            data3: 85
        }, {
            period: '2012',
            data1: 85,
            data2: 65,
            data3: 75
        }, {
            period: '2013',
            data1: 75,
            data2: 205,
            data3: 145
        }, {
            period: '2014',
            data1: 185,
            data2: 155,
            data3: 145
        }, {
            period: '2015',
            data1: 110,
            data2: 105,
            data3: 85
        },
         {
            period: '2016',
            data1: 255,
            data2: 155,
            data3: 205
        }],
        xkey: 'period',
        ykeys: ['data1', 'data2', 'data3'],
        labels: ['Data 1', 'Data 2', 'Data 3'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#0bb2d4', '#17b3a3', '#3e8ef7'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#0bb2d4', '#17b3a3', '#3e8ef7'],
        resize: true
        
    });

Morris.Area({
        element: 'area-chart2',
        data: [{
            period: '2013',
            data1: 0,
            data2: 0,
            
        }, {
            period: '2014',
            data1: 135,
            data2: 105,
            
        }, {
            period: '2015',
            data1: 85,
            data2: 65,
            
        }, {
            period: '2016',
            data1: 75,
            data2: 205,
            
        }, {
            period: '2017',
            data1: 185,
            data2: 155,
            
        }, {
            period: '2018',
            data1: 110,
            data2: 95,
            
        },
         {
            period: '2019',
            data1: 255,
            data2: 155,
           
        }],
        xkey: 'period',
        ykeys: ['data1', 'data2'],
        labels: ['Data 1', 'Data 2'],
        pointSize: 0,
        fillOpacity: 0.4,
        pointStrokeColors:['#faa700', '#ff4c52'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#faa700', '#ff4c52'],
        resize: true
        
    });


// LINE CHART
        var line = new Morris.Line({
          element: 'line-chart',
          resize: true,
          data: [
            {y: '2016 Q1', data1: 2566},
            {y: '2016 Q2', data1: 2678},
            {y: '2016 Q3', data1: 4812},
            {y: '2016 Q4', data1: 3867},
            {y: '2017 Q1', data1: 6910},
            {y: '2017 Q2', data1: 5770},
            {y: '2017 Q3', data1: 4920},
            {y: '2017 Q4', data1: 15173},
            {y: '2018 Q1', data1: 11687},
            {y: '2018 Q2', data1: 8632}
          ],
          xkey: 'y',
          ykeys: ['data1'],
          labels: ['Data 1'],
          gridLineColor: '#eef0f2',
          lineColors: ['#0bb2d4'],
          lineWidth: 1,
          hideHover: 'auto'
        });
 // donut chart
        
    Morris.Donut({
        element: 'donut-chart',
        data: [{
            label: "Online Sales",
            value: 15,

        }, {
            label: "In-Store Sales",
            value: 45
        }, {
            label: "Retail Sales",
            value: 35
        }],
        resize: true,
        colors:['#17b3a3', '#3e8ef7', '#ff4c52']
    });

// bar chart
    Morris.Bar({
        element: 'bar-chart',
        data: [{
            y: '2012',
            a: 105,
            b: 95,
            c: 65
        }, {
            y: '2013',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2014',
            a: 55,
            b: 45,
            c: 35
        }, {
            y: '2015',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2016',
            a: 55,
            b: 45,
            c: 35
        }, {
            y: '2017',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2018',
            a: 105,
            b: 95,
            c: 45
        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['A', 'B', 'C'],
        barColors:['#ff4c52', '#faa700', '#0bb2d4'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
// area chart
 Morris.Area({
        element: 'area-chart3',
        data: [{
                    period: '2013',
                    data1: 0,
                    data2: 0,
                    data3: 0
                }, {
                    period: '2014',
                    data1: 55,
                    data2: 20,
                    data3: 10
                }, {
                    period: '2015',
                    data1: 25,
                    data2: 55,
                    data3: 70
                }, {
                    period: '2016',
                    data1: 65,
                    data2: 17,
                    data3: 12
                }, {
                    period: '2017',
                    data1: 35,
                    data2: 25,
                    data3: 125
                }, {
                    period: '2018',
                    data1: 30,
                    data2: 85,
                    data3: 45
                }, {
                    period: '2019',
                    data1: 15,
                    data2: 15,
                    data3: 15
                }


                ],
                lineColors: ['#17b3a3', '#3e8ef7', '#faa700'],
                xkey: 'period',
                ykeys: ['data1', 'data2', 'data3'],
                labels: ['Data 1', 'Data 2', 'Data 3'],
                pointSize: 0,
                lineWidth: 0,
                resize:true,
                fillOpacity: 0.8,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'
        
    });
	
	
  });

  //[Preview Menu Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:   This file is for demo purposes only.

$(function () {
    'use strict'
  
  
    /**
     * Get access to plugins
     */
  
    $('[data-toggle="control-sidebar"]').controlSidebar()
    $('[data-toggle="push-menu"]').pushMenu()
  
    var $pushMenu       = $('[data-toggle="push-menu"]').data('lte.pushmenu')
    var $controlSidebar = $('[data-toggle="control-sidebar"]').data('lte.controlsidebar')
    var $layout         = $('body').data('lte.layout')
  
    /**
     * List of all the available themes
     *
     * @type Array
     */
    var mySkins = [
      'theme-fruit',
      'theme-purple',
      'theme-oceansky',
      'theme-rosegold',
      'theme-ultraviolet',
      'theme-botani',
      'theme-ubuntu',
      'theme-patriot',
      'theme-vintage',
      'theme-mint',
      'theme-deepocean',
      'theme-school',
      'theme-leaf',
      'theme-metalred',
      'theme-grey',
    ]
  
    /**
     * Get a prestored setting
     *
     * @param String name Name of of the setting
     * @returns String The value of the setting | null
     */
    function get(name) {
      if (typeof (Storage) !== 'undefined') {
        return localStorage.getItem(name)
      } else {
        window.alert('Please use a modern browser to properly view this template!')
      }
    }
  
    /**
     * Store a new settings in the browser
     *
     * @param String name Name of the setting
     * @param String val Value of the setting
     * @returns void
     */
    function store(name, val) {
      if (typeof (Storage) !== 'undefined') {
        localStorage.setItem(name, val)
      } else {
        window.alert('Please use a modern browser to properly view this template!')
      }
    }
  
    /**
     * Toggles layout classes
     *
     * @param String cls the layout class to toggle
     * @returns void
     */
    function changeLayout(cls) {
      $('body').toggleClass(cls)
      if ($('body').hasClass('fixed') && cls == 'fixed') {
        $pushMenu.expandOnHover()
        $layout.activate()
      }
      $controlSidebar.fix()
    }
  
    /**
     * Replaces the old skin with the new skin
     * @param String cls the new skin class
     * @returns Boolean false to prevent link's default action
     */
    function changeSkin(cls) {
      $.each(mySkins, function (i) {
        $('body').removeClass(mySkins[i])
      })
  
      $('body').addClass(cls)
      store('theme', cls)
      return false
    }
  
    /**
     * Retrieve default settings and apply them to the template
     *
     * @returns void
     */
    function setup() {
      var tmp = get('theme')
      if (tmp && $.inArray(tmp, mySkins))
        changeSkin(tmp)
  
      // Add the change skin listener
      $('[data-theme]').on('click', function (e) {
        if ($(this).hasClass('knob'))
          return
        e.preventDefault()
        changeSkin($(this).data('theme'))
      })
  
      // Add the layout manager
      $('[data-layout]').on('click', function () {
        changeLayout($(this).data('layout'))
      })
  
      $('[data-controlsidebar]').on('click', function () {
        changeLayout($(this).data('controlsidebar'))
        var slide = !$controlSidebar.options.slide
  
        $controlSidebar.options.slide = slide
        if (!slide)
          $('.control-sidebar').removeClass('control-sidebar-open')
      })
  
  
      $('[data-enable="expandOnHover"]').on('click', function () {
        $(this).attr('disabled', true)
        $pushMenu.expandOnHover()
        if (!$('body').hasClass('sidebar-collapse'))
          $('[data-layout="sidebar-collapse"]').click()
      })
  
      $('[data-enable="rtl"]').on('click', function () {
        $(this).attr('disabled', true)
        $pushMenu.expandOnHover()
        if (!$('body').hasClass('rtl'))
          $('[data-layout="rtl"]').click()
      })
  
            
  
      $('[data-mainsidebarskin="toggle"]').on('click', function () {
        var $sidebar = $('body')
        if ($sidebar.hasClass('dark-skin')) {
          $sidebar.removeClass('dark-skin')
          $sidebar.addClass('light-skin')
        } else {
          $sidebar.removeClass('light-skin')
          $sidebar.addClass('dark-skin')
        }
      })
  
      //  Reset options
      if ($('body').hasClass('fixed')) {
        $('[data-layout="fixed"]').attr('checked', 'checked')
      }
      if ($('body').hasClass('layout-boxed')) {
        $('[data-layout="layout-boxed"]').attr('checked', 'checked')
      }
      if ($('body').hasClass('sidebar-collapse')) {
        $('[data-layout="sidebar-collapse"]').attr('checked', 'checked')
      }
      if ($('body').hasClass('rtl')) {
        $('[data-layout="rtl"]').attr('checked', 'checked')
      }
     // if ($('body').hasClass('dark')) {
  //      $('[data-layout="dark"]').attr('checked', 'checked')
  //    }
  
    }
  
    // Create the new tab
    var $tabPane = $('<div />', {
      'id'   : 'control-sidebar-theme-demo-options-tab',
      'class': 'tab-pane active'
    })
  
    // Create the tab button
    var $tabButton = $('<li />', { 'class': 'nav-item' })
      .html('<a href=\'#control-sidebar-theme-demo-options-tab\' class=\'active\' data-toggle=\'tab\'>'
        + 'Settings'
        + '</a>')
  
    // Add the tab button to the right sidebar tabs
    $('[href="#control-sidebar-home-tab"]')
      .parent()
      .before($tabButton)
  
    // Create the menu
    var $demoSettings = $('<div />')
    
      // Layout options
    $demoSettings.append(
      '<h4 class="control-sidebar-heading">'
      + 'Background Size'
      + '</h4>'
        
      // Theme Skin Toggle	  
      + '<div class="flexbox mb-10 pb-10 bb-1">'
      + '<label class="control-sidebar-subheading w-p100 mt-5">'
      + 'Choose Size'
      + '</label>'
      + '<select id="bg-size" class="bg-size custom-select">'
      + '<option value="full">Full</option>'
      + '<option value="half" selected="">Half</option>'
      + '<option value="header">Header</option>'
      + '</select>'
      + '</div>'
        
      
    )
      
    
    // Layout options
    $demoSettings.append(
      '<h4 class="control-sidebar-heading">'
      + 'Dark or Light Skin'
      + '</h4>'
        
      // Theme Skin Toggle	  
      + '<div class="flexbox mb-10 pb-10 bb-1">'
      + '<label for="toggle_left_sidebar_skin" class="control-sidebar-subheading">'
      + 'Turn Dark/Light'
      + '</label>'
      + '<label class="switch switch-border switch-danger">'
      + '<input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">'
      + '<span class="switch-indicator"></span>'
      + '<span class="switch-description"></span>'
      + '</label>'
      + '</div>'
        
      
    )
      
    // Layout options
    $demoSettings.append(
      '<h4 class="control-sidebar-heading">'
      + 'RTL or LTR'
      + '</h4>'
        
      // rtl layout
      + '<div class="flexbox mb-10 pb-10 bb-1">'
      + '<label for="rtl" class="control-sidebar-subheading">'
      + 'Turn RTL/LTR'
      + '</label>'
      + '<label class="switch switch-border switch-danger">'
      + '<input type="checkbox" data-layout="rtl" id="rtl">'
      + '<span class="switch-indicator"></span>'
      + '<span class="switch-description"></span>'
      + '</label>'
      + '</div>'
    )
  
  
    // Layout options
    $demoSettings.append(
      '<h4 class="control-sidebar-heading">'
      + 'Layout Options'
      + '</h4>'
        
        
      // Fixed layout
      + '<div class="flexbox mb-10">'
      + '<label for="layout_fixed" class="control-sidebar-subheading">'
      + 'Fixed layout'
      + '</label>'
      + '<label class="switch switch-border switch-danger">'
      + '<input type="checkbox" data-layout="fixed" id="layout_fixed">'
      + '<span class="switch-indicator"></span>'
      + '<span class="switch-description"></span>'
      + '</label>'
      + '</div>'	
        
      // Boxed layout
      + '<div class="flexbox mb-10">'
      + '<label for="layout_boxed" class="control-sidebar-subheading">'
      + 'Boxed Layout'
      + '</label>'
      + '<label class="switch switch-border switch-danger">'
      + '<input type="checkbox" data-layout="layout-boxed" id="layout_boxed">'
      + '<span class="switch-indicator"></span>'
      + '<span class="switch-description"></span>'
      + '</label>'
      + '</div>'
        
      // Sidebar Toggle
      + '<div class="flexbox mb-10">'
      + '<label for="toggle_sidebar" class="control-sidebar-subheading">'
      + 'Toggle Sidebar'
      + '</label>'
      + '<label class="switch switch-border switch-danger">'
      + '<input type="checkbox" data-layout="sidebar-collapse" id="toggle_sidebar">'
      + '<span class="switch-indicator"></span>'
      + '<span class="switch-description"></span>'
      + '</label>'
      + '</div>'	  
      
      // Control Sidebar Toggle
      + '<div class="flexbox mb-10">'
      + '<label for="toggle_right_sidebar" class="control-sidebar-subheading">'
      + 'Toggle Right Sidebar Slide'
      + '</label>'
      + '<label class="switch switch-border switch-danger">'
      + '<input type="checkbox" data-controlsidebar="control-sidebar-open" id="toggle_right_sidebar">'
      + '<span class="switch-indicator"></span>'
      + '<span class="switch-description"></span>'
      + '</label>'
      + '</div>'	  
      
    )
    
    var $skinsList = $('<ul />', { 'class': 'list-inline clearfix theme-switch' })
  
    // Dark sidebar skins
    var $themeFruit =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-fruit" style="display: inline-block;vertical-align: middle;" class="clearfix active bg-gradient-fruit rounded w-40 h-80" title="Theme Fruit">'
              + '</a>')
    $skinsList.append($themeFruit)
      
    var $themePurple =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-purple" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-purple rounded w-40 h-80" title="Theme Purple">'
              + '</a>')
    $skinsList.append($themePurple)
      
    var $themeOceansky =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-oceansky" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-oceansky rounded w-40 h-80" title="Theme Oceansky">'
              + '</a>')
    $skinsList.append($themeOceansky)
      
    var $themeRosegold =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-rosegold" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-rosegold rounded w-40 h-80" title="Theme Rosegold">'
              + '</a>')
    $skinsList.append($themeRosegold)
      
    var $themeUltraviolet =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-ultraviolet" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-ultraviolet rounded w-40 h-80" title="Theme Ultraviolet">'
              + '</a>')
    $skinsList.append($themeUltraviolet)
      
    var $themeBotani =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-botani" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-botani rounded w-40 h-80" title="Theme Botani">'
              + '</a>')
    $skinsList.append($themeBotani)
      
    var $themeUbuntu =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-ubuntu" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-ubuntu rounded w-40 h-80" title="Theme Ubuntu">'
              + '</a>')
    $skinsList.append($themeUbuntu)
      
    var $themePatriot =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-patriot" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-patriot rounded w-40 h-80" title="Theme Patriot">'
              + '</a>')
    $skinsList.append($themePatriot)
      
    var $themeVintage =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-vintage" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-vintage rounded w-40 h-80" title="Theme Vintage">'
              + '</a>')
    $skinsList.append($themeVintage)
      
    var $themeMint =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-mint" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-mint rounded w-40 h-80" title="Theme Mint">'
              + '</a>')
    $skinsList.append($themeMint)
      
    var $themeDeepocean =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-deepocean" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-deepocean rounded w-40 h-80" title="Theme Deepocean">'
              + '</a>')
    $skinsList.append($themeDeepocean)
      
    var $themeSchool =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-school" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-school rounded w-40 h-80" title="Theme School">'
              + '</a>')
    $skinsList.append($themeSchool)
      
    var $themeLeaf =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-leaf" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-leaf rounded w-40 h-80" title="Theme Leaf">'
              + '</a>')
    $skinsList.append($themeLeaf)
      
    var $themeMetalred =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-metalred" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-metalred rounded w-40 h-80" title="Theme Metalred">'
              + '</a>')
    $skinsList.append($themeMetalred)
      
    var $themeGrey =
          $('<li />', { style: 'padding: 5px;line-height: 25px;' })
            .append('<a href="javascript:void(0)" data-theme="theme-grey" style="display: inline-block;vertical-align: middle;" class="clearfix bg-gradient-grey rounded w-40 h-80" title="Theme Grey">'
              + '</a>')
    $skinsList.append($themeGrey)
      
  
    
  
    $demoSettings.append('<h4 class="control-sidebar-heading">Theme Colors</h4>')
    $demoSettings.append($skinsList)
  
    $tabPane.append($demoSettings)
    $('#control-sidebar-home-tab').after($tabPane)
  
    setup()
  
    $('[data-toggle="tooltip"]').tooltip()
  });// End of use strict
  
  $(function () {
    'use strict'
      
      $('.theme-switch li a').click(function () {
          $('.theme-switch li a').removeClass('active').addClass('inactive');
          $(this).toggleClass('active inactive');
      });
      
  });// End of use strict
  
  
  $(function () {
    'use strict'	
       $('.bg-size').on('change',function(){
          var $this = $(this),
          width_val = this.value,
          wrapper = $('body');
  
          if(width_val === 'full'){
              $(wrapper).removeClass('onlyheader').addClass('onlyfull');
          }
          else if(width_val === 'header'){
              $(wrapper).removeClass('onlyfull').addClass('onlyheader');
          }
          else{
              $(wrapper).removeClass('onlyfull onlyheader');
          }
      });
  });// End of use strict


  //[Master Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:	Sunny Admin - Responsive Admin Template

//should be included in all pages. It controls some layout


// Make sure jQuery has been loaded
if (typeof jQuery === 'undefined') {
throw new Error('template requires jQuery')
}

// Layout()

//  Implements layout.
//  Fixes the layout height in case min-height fails.

//  @usage activated automatically upon window load.
//  Configure any options by passing data-option="value"
//  to the body tag.



+function ($) {
  'use strict'

  var DataKey = 'Aquaadmin.layout'

  var Default = {
    slimscroll : true,
    resetHeight: true
  }

  var Selector = {
    wrapper       : '.wrapper',
    contentWrapper: '.content-wrapper',
    layoutBoxed   : '.layout-boxed',
    mainFooter    : '.main-footer',
    mainHeader    : '.main-header',
    sidebar       : '.sidebar',
    controlSidebar: '.control-sidebar',
    fixed         : '.fixed',
    sidebarMenu   : '.sidebar-menu',
    logo          : '.main-header .logo'
  }

  var ClassName = {
    fixed         : 'fixed',
    holdTransition: 'hold-transition'
  }

  var Layout = function (options) {
    this.options      = options
    this.bindedResize = false
    this.activate()
  }

  Layout.prototype.activate = function () {
    this.fix()
    this.fixSidebar()

    $('body').removeClass(ClassName.holdTransition)

    if (this.options.resetHeight) {
      $('body, html, ' + Selector.wrapper).css({
        'height'    : 'auto',
        'min-height': '100%'
      })
    }

    if (!this.bindedResize) {
      $(window).resize(function () {
        this.fix()
        this.fixSidebar()

        $(Selector.logo + ', ' + Selector.sidebar).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
          this.fix()
          this.fixSidebar()
        }.bind(this))
      }.bind(this))

      this.bindedResize = true
    }

    $(Selector.sidebarMenu).on('expanded.tree', function () {
      this.fix()
      this.fixSidebar()
    }.bind(this))

    $(Selector.sidebarMenu).on('collapsed.tree', function () {
      this.fix()
      this.fixSidebar()
    }.bind(this))
  }

  Layout.prototype.fix = function () {
    // Remove overflow from .wrapper if layout-boxed exists
    $(Selector.layoutBoxed + ' > ' + Selector.wrapper).css('overflow', 'hidden')

    // Get window height and the wrapper height
    var footerHeight  = $(Selector.mainFooter).outerHeight() || 0
    var neg           = $(Selector.mainHeader).outerHeight() + footerHeight
    var windowHeight  = $(window).height()
    var sidebarHeight = $(Selector.sidebar).height() || 0

    // Set the min-height of the content and sidebar based on
    // the height of the document.
    if ($('body').hasClass(ClassName.fixed)) {
      $(Selector.contentWrapper).css('min-height', windowHeight - footerHeight)
    } else {
      var postSetHeight

      if (windowHeight >= sidebarHeight) {
        $(Selector.contentWrapper).css('min-height', windowHeight - neg)
        postSetHeight = windowHeight - neg
      } else {
        $(Selector.contentWrapper).css('min-height', sidebarHeight)
        postSetHeight = sidebarHeight
      }

      // Fix for the control sidebar height
      var $controlSidebar = $(Selector.controlSidebar)
      if (typeof $controlSidebar !== 'undefined') {
        if ($controlSidebar.height() > postSetHeight)
          $(Selector.contentWrapper).css('min-height', $controlSidebar.height())
      }
    }
  }

  Layout.prototype.fixSidebar = function () {
    // Make sure the body tag has the .fixed class
    if (!$('body').hasClass(ClassName.fixed)) {
      if (typeof $.fn.slimScroll !== 'undefined') {
        $(Selector.sidebar).slimScroll({ destroy: true }).height('auto')
      }
      return
    }

    // Enable slimscroll for fixed layout
    if (this.options.slimscroll) {
      if (typeof $.fn.slimScroll !== 'undefined') {
        // Destroy if it exists
        $(Selector.sidebar).slimScroll({ destroy: true }).height('auto')

        // Add slimscroll
        $(Selector.sidebar).slimScroll({
          height: ($(window).height() - $(Selector.mainHeader).height()) + 'px',
          color : 'rgba(0,0,0,0.2)',
          size  : '3px'
        })
      }
    }
  }

  // Plugin Definition
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data(DataKey)

      if (!data) {
        var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
        $this.data(DataKey, (data = new Layout(options)))
      }

      if (typeof option == 'string') {
        if (typeof data[option] == 'undefined') {
          throw new Error('No method named ' + option)
        }
        data[option]()
      }
    })
  }

  var old = $.fn.layout

  $.fn.layout            = Plugin
  $.fn.layout.Constuctor = Layout

  // No conflict mode
  $.fn.layout.noConflict = function () {
    $.fn.layout = old
    return this
  }

  // Layout DATA-API
  $(window).on('load', function () {
    Plugin.call($('body'))
  });
}(jQuery)  // End of use strict

/* PushMenu()
 * Adds the push menu functionality to the sidebar.
 *
 * @usage: $('.btn').pushMenu(options)
 *          or add [data-toggle="push-menu"] to any button
 *          Pass any option as data-option="value"
 */
+function ($) {
  'use strict'

  var DataKey = 'Aquaadmin.pushmenu'

  var Default = {
    collapseScreenSize   : 767,
    expandOnHover        : false,
    expandTransitionDelay: 200
  }

  var Selector = {
    collapsed     : '.sidebar-collapse',
    open          : '.sidebar-open',
    mainSidebar   : '.main-sidebar',
    contentWrapper: '.content-wrapper',
    searchInput   : '.sidebar-form .form-control',
    button        : '[data-toggle="push-menu"]',
    mini          : '.sidebar-mini',
    expanded      : '.sidebar-expanded-on-hover',
    layoutFixed   : '.fixed'
  }

  var ClassName = {
    collapsed    : 'sidebar-collapse',
    open         : 'sidebar-open',
    mini         : 'sidebar-mini',
    expanded     : 'sidebar-expanded-on-hover',
    expandFeature: 'sidebar-mini-expand-feature',
    layoutFixed  : 'fixed'
  }

  var Event = {
    expanded : 'expanded.pushMenu',
    collapsed: 'collapsed.pushMenu'
  }

  // PushMenu Class Definition
  var PushMenu = function (options) {
    this.options = options
    this.init()
  }

  PushMenu.prototype.init = function () {
    if (this.options.expandOnHover
      || ($('body').is(Selector.mini + Selector.layoutFixed))) {
      this.expandOnHover()
      $('body').addClass(ClassName.expandFeature)
    }

    $(Selector.contentWrapper).on(function () {
      // Enable hide menu when clicking on the content-wrapper on small screens
      if ($(window).width() <= this.options.collapseScreenSize && $('body').hasClass(ClassName.open)) {
        this.close()
      }
    }.bind(this))

    // __Fix for android devices
    $(Selector.searchInput).on(function (e) {
      e.stopPropagation()
    })
  }

  PushMenu.prototype.toggle = function () {
    var windowWidth = $(window).width()
    var isOpen      = !$('body').hasClass(ClassName.collapsed)

    if (windowWidth <= this.options.collapseScreenSize) {
      isOpen = $('body').hasClass(ClassName.open)
    }

    if (!isOpen) {
      this.open()
    } else {
      this.close()
    }
  }

  PushMenu.prototype.open = function () {
    var windowWidth = $(window).width()

    if (windowWidth > this.options.collapseScreenSize) {
      $('body').removeClass(ClassName.collapsed)
        .trigger($.Event(Event.expanded))
    }
    else {
      $('body').addClass(ClassName.open)
        .trigger($.Event(Event.expanded))
    }
  }

  PushMenu.prototype.close = function () {
    var windowWidth = $(window).width()
    if (windowWidth > this.options.collapseScreenSize) {
      $('body').addClass(ClassName.collapsed)
        .trigger($.Event(Event.collapsed))
    } else {
      $('body').removeClass(ClassName.open + ' ' + ClassName.collapsed)
        .trigger($.Event(Event.collapsed))
    }
  }

  PushMenu.prototype.expandOnHover = function () {
    $(Selector.mainSidebar).hover(function () {
      if ($('body').is(Selector.mini + Selector.collapsed)
        && $(window).width() > this.options.collapseScreenSize) {
        this.expand()
      }
    }.bind(this), function () {
      if ($('body').is(Selector.expanded)) {
        this.collapse()
      }
    }.bind(this))
  }

  PushMenu.prototype.expand = function () {
    setTimeout(function () {
      $('body').removeClass(ClassName.collapsed)
        .addClass(ClassName.expanded)
    }, this.options.expandTransitionDelay)
  }

  PushMenu.prototype.collapse = function () {
    setTimeout(function () {
      $('body').removeClass(ClassName.expanded)
        .addClass(ClassName.collapsed)
    }, this.options.expandTransitionDelay)
  }

  // PushMenu Plugin Definition
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data(DataKey)

      if (!data) {
        var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
        $this.data(DataKey, (data = new PushMenu(options)))
      }

      if (option == 'toggle') data.toggle()
    })
  }

  var old = $.fn.pushMenu

  $.fn.pushMenu             = Plugin
  $.fn.pushMenu.Constructor = PushMenu

  // No Conflict Mode
  $.fn.pushMenu.noConflict = function () {
    $.fn.pushMenu = old
    return this
  }

  // Data API
  $(document).on('click', Selector.button, function (e) {
    e.preventDefault()
    Plugin.call($(this), 'toggle')
  })
  $(window).on('load', function () {
    Plugin.call($(Selector.button))
  })
}(jQuery) // End of use strict


/* Tree()
 * Converts a nested list into a multilevel
 * tree view menu.
 *
 * @Usage: $('.my-menu').tree(options)
 *         or add [data-widget="tree"] to the ul element
 *         Pass any option as data-option="value"
 */
+function ($) {
  'use strict'

  var DataKey = 'Aquaadmin.tree'

  var Default = {
    animationSpeed: 500,
    accordion     : true,
    followLink    : false,
    trigger       : '.treeview a'
  }

  var Selector = {
    tree        : '.tree',
    treeview    : '.treeview',
    treeviewMenu: '.treeview-menu',
    open        : '.menu-open, .active',
    li          : 'li',
    data        : '[data-widget="tree"]',
    active      : '.active'
  }

  var ClassName = {
    open: 'menu-open',
    tree: 'tree'
  }

  var Event = {
    collapsed: 'collapsed.tree',
    expanded : 'expanded.tree'
  }

  // Tree Class Definition
  var Tree = function (element, options) {
    this.element = element
    this.options = options

    $(this.element).addClass(ClassName.tree)

    $(Selector.treeview + Selector.active, this.element).addClass(ClassName.open)

    this._setUpListeners()
  }

  Tree.prototype.toggle = function (link, event) {
    var treeviewMenu = link.next(Selector.treeviewMenu)
    var parentLi     = link.parent()
    var isOpen       = parentLi.hasClass(ClassName.open)

    if (!parentLi.is(Selector.treeview)) {
      return
    }

    if (!this.options.followLink || link.attr('href') == '#') {
      event.preventDefault()
    }

    if (isOpen) {
      this.collapse(treeviewMenu, parentLi)
    } else {
      this.expand(treeviewMenu, parentLi)
    }
  }

  Tree.prototype.expand = function (tree, parent) {
    var expandedEvent = $.Event(Event.expanded)

    if (this.options.accordion) {
      var openMenuLi = parent.siblings(Selector.open)
      var openTree   = openMenuLi.children(Selector.treeviewMenu)
      this.collapse(openTree, openMenuLi)
    }

    parent.addClass(ClassName.open)
    tree.slideDown(this.options.animationSpeed, function () {
      $(this.element).trigger(expandedEvent)
    }.bind(this))
  }

  Tree.prototype.collapse = function (tree, parentLi) {
    var collapsedEvent = $.Event(Event.collapsed)

    tree.find(Selector.open).removeClass(ClassName.open)
    parentLi.removeClass(ClassName.open)
    tree.slideUp(this.options.animationSpeed, function () {
      tree.find(Selector.open + ' > ' + Selector.treeview).slideUp()
      $(this.element).trigger(collapsedEvent)
    }.bind(this))
  }

  // Private

  Tree.prototype._setUpListeners = function () {
    var that = this

    $(this.element).on('click', this.options.trigger, function (event) {
      that.toggle($(this), event)
    })
  }

  // Plugin Definition
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data(DataKey)

      if (!data) {
        var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
        $this.data(DataKey, new Tree($this, options))
      }
    })
  }

  var old = $.fn.tree

  $.fn.tree             = Plugin
  $.fn.tree.Constructor = Tree

  // No Conflict Mode
  $.fn.tree.noConflict = function () {
    $.fn.tree = old
    return this
  }

  // Tree Data API
  $(window).on('load', function () {
    $(Selector.data).each(function () {
      Plugin.call($(this))
    })
  })

}(jQuery) // End of use strict


/* ControlSidebar()
 * Toggles the state of the control sidebar
 *
 * @Usage: $('#control-sidebar-trigger').controlSidebar(options)
 *         or add [data-toggle="control-sidebar"] to the trigger
 *         Pass any option as data-option="value"
 */
+function ($) {
  'use strict'

  var DataKey = 'Aquaadmin.controlsidebar'

  var Default = {
    slide: true
  }

  var Selector = {
    sidebar: '.control-sidebar',
    data   : '[data-toggle="control-sidebar"]',
    open   : '.control-sidebar-open',
    bg     : '.control-sidebar-bg',
    wrapper: '.wrapper',
    content: '.content-wrapper',
    boxed  : '.layout-boxed'
  }

  var ClassName = {
    open : 'control-sidebar-open',
    fixed: 'fixed'
  }

  var Event = {
    collapsed: 'collapsed.controlsidebar',
    expanded : 'expanded.controlsidebar'
  }

  // ControlSidebar Class Definition
  var ControlSidebar = function (element, options) {
    this.element         = element
    this.options         = options
    this.hasBindedResize = false

    this.init()
  }

  ControlSidebar.prototype.init = function () {
    // Add click listener if the element hasn't been
    // initialized using the data API
    if (!$(this.element).is(Selector.data)) {
      $(this).on('click', this.toggle)
    }

    this.fix()
    $(window).resize(function () {
      this.fix()
    }.bind(this))
  }

  ControlSidebar.prototype.toggle = function (event) {
    if (event) event.preventDefault()

    this.fix()

    if (!$(Selector.sidebar).is(Selector.open) && !$('body').is(Selector.open)) {
      this.expand()
    } else {
      this.collapse()
    }
  }

  ControlSidebar.prototype.expand = function () {
    if (!this.options.slide) {
      $('body').addClass(ClassName.open)
    } else {
      $(Selector.sidebar).addClass(ClassName.open)
    }

    $(this.element).trigger($.Event(Event.expanded))
  }

  ControlSidebar.prototype.collapse = function () {
    $('body, ' + Selector.sidebar).removeClass(ClassName.open)
    $(this.element).trigger($.Event(Event.collapsed))
  }

  ControlSidebar.prototype.fix = function () {
    if ($('body').is(Selector.boxed)) {
      this._fixForBoxed($(Selector.bg))
    }
  }

  // Private

  ControlSidebar.prototype._fixForBoxed = function (bg) {
    bg.css({
      position: 'absolute',
      height  : $(Selector.wrapper).height()
    })
  }

  // Plugin Definition
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data(DataKey)

      if (!data) {
        var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
        $this.data(DataKey, (data = new ControlSidebar($this, options)))
      }

      if (typeof option == 'string') data.toggle()
    })
  }

  var old = $.fn.controlSidebar

  $.fn.controlSidebar             = Plugin
  $.fn.controlSidebar.Constructor = ControlSidebar

  // No Conflict Mode
  $.fn.controlSidebar.noConflict = function () {
    $.fn.controlSidebar = old
    return this
  }

  // ControlSidebar Data API
  $(document).on('click', Selector.data, function (event) {
    if (event) event.preventDefault()
    Plugin.call($(this), 'toggle')
  })

}(jQuery) // End of use strict


/* BoxWidget()
 * Adds box widget functions to boxes.
 *
 * @Usage: $('.my-box').boxWidget(options)
 *         This plugin auto activates on any element using the `.box` class
 *         Pass any option as data-option="value"
 */
+function ($) {
  'use strict'

  var DataKey = 'Aquaadmin.boxwidget'

  var Default = {
    animationSpeed : 500,
    collapseTrigger: '[data-widget="collapse"]',
    removeTrigger  : '[data-widget="remove"]',
    collapseIcon   : 'fa-minus',
    expandIcon     : 'fa-plus',
    removeIcon     : 'fa-times'
  }

  var Selector = {
    data     : '.box',
    collapsed: '.collapsed-box',
    body     : '.box-body',
    footer   : '.box-footer',
    tools    : '.box-tools'
  }

  var ClassName = {
    collapsed: 'collapsed-box'
  }

  var Event = {
    collapsed: 'collapsed.boxwidget',
    expanded : 'expanded.boxwidget',
    removed  : 'removed.boxwidget'
  }

  // BoxWidget Class Definition
  var BoxWidget = function (element, options) {
    this.element = element
    this.options = options

    this._setUpListeners()
  }

  BoxWidget.prototype.toggle = function () {
    var isOpen = !$(this.element).is(Selector.collapsed)

    if (isOpen) {
      this.collapse()
    } else {
      this.expand()
    }
  }

  BoxWidget.prototype.expand = function () {
    var expandedEvent = $.Event(Event.expanded)
    var collapseIcon  = this.options.collapseIcon
    var expandIcon    = this.options.expandIcon

    $(this.element).removeClass(ClassName.collapsed)

    $(this.element)
      .find(Selector.tools)
      .find('.' + expandIcon)
      .removeClass(expandIcon)
      .addClass(collapseIcon)

    $(this.element).find(Selector.body + ', ' + Selector.footer)
      .slideDown(this.options.animationSpeed, function () {
        $(this.element).trigger(expandedEvent)
      }.bind(this))
  }

  BoxWidget.prototype.collapse = function () {
    var collapsedEvent = $.Event(Event.collapsed)
    var collapseIcon   = this.options.collapseIcon
    var expandIcon     = this.options.expandIcon

    $(this.element)
      .find(Selector.tools)
      .find('.' + collapseIcon)
      .removeClass(collapseIcon)
      .addClass(expandIcon)

    $(this.element).find(Selector.body + ', ' + Selector.footer)
      .slideUp(this.options.animationSpeed, function () {
        $(this.element).addClass(ClassName.collapsed)
        $(this.element).trigger(collapsedEvent)
      }.bind(this))
  }

  BoxWidget.prototype.remove = function () {
    var removedEvent = $.Event(Event.removed)

    $(this.element).slideUp(this.options.animationSpeed, function () {
      $(this.element).trigger(removedEvent)
      $(this.element).remove()
    }.bind(this))
  }

  // Private

  BoxWidget.prototype._setUpListeners = function () {
    var that = this

    $(this.element).on('click', this.options.collapseTrigger, function (event) {
      if (event) event.preventDefault()
      that.toggle()
    })

    $(this.element).on('click', this.options.removeTrigger, function (event) {
      if (event) event.preventDefault()
      that.remove()
    })
  }

  // Plugin Definition
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data(DataKey)

      if (!data) {
        var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
        $this.data(DataKey, (data = new BoxWidget($this, options)))
      }

      if (typeof option == 'string') {
        if (typeof data[option] == 'undefined') {
          throw new Error('No method named ' + option)
        }
        data[option]()
      }
    })
  }

  var old = $.fn.boxWidget

  $.fn.boxWidget             = Plugin
  $.fn.boxWidget.Constructor = BoxWidget

  // No Conflict Mode
  $.fn.boxWidget.noConflict = function () {
    $.fn.boxWidget = old
    return this
  }

  // BoxWidget Data API
  $(window).on('load', function () {
    $(Selector.data).each(function () {
      Plugin.call($(this))
    })
  })

}(jQuery) // End of use strict


/* TodoList()
 * Converts a list into a todoList.
 *
 * @Usage: $('.my-list').todoList(options)
 *         or add [data-widget="todo-list"] to the ul element
 *         Pass any option as data-option="value"
 */
+function ($) {
  'use strict'

  var DataKey = 'Aquaadmin.todolist'

  var Default = {
    iCheck   : false,
    onCheck  : function () {
    },
    onUnCheck: function () {
    }
  }

  var Selector = {
    data: '[data-widget="todo-list"]'
  }

  var ClassName = {
    done: 'done'
  }

  // TodoList Class Definition
  var TodoList = function (element, options) {
    this.element = element
    this.options = options

    this._setUpListeners()
  }

  TodoList.prototype.toggle = function (item) {
    item.parents(Selector.li).first().toggleClass(ClassName.done)
    if (!item.prop('checked')) {
      this.unCheck(item)
      return
    }

    this.check(item)
  }

  TodoList.prototype.check = function (item) {
    this.options.onCheck.call(item)
  }

  TodoList.prototype.unCheck = function (item) {
    this.options.onUnCheck.call(item)
  }

  // Private

  TodoList.prototype._setUpListeners = function () {
    var that = this
    $(this.element).on('change ifChanged', 'input:checkbox', function () {
      that.toggle($(this))
    })
  }

  // Plugin Definition
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data(DataKey)

      if (!data) {
        var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
        $this.data(DataKey, (data = new TodoList($this, options)))
      }

      if (typeof data == 'string') {
        if (typeof data[option] == 'undefined') {
          throw new Error('No method named ' + option)
        }
        data[option]()
      }
    })
  }

  var old = $.fn.todoList

  $.fn.todoList         = Plugin
  $.fn.todoList.Constructor = TodoList

  // No Conflict Mode
  $.fn.todoList.noConflict = function () {
    $.fn.todoList = old
    return this
  }

  // TodoList Data API
  $(window).on('load', function () {
    $(Selector.data).each(function () {
      Plugin.call($(this))
    })
  })

}(jQuery) // End of use strict


/* DirectChat()
 * Toggles the state of the control sidebar
 *
 * @Usage: $('#my-chat-box').directChat()
 *         or add [data-widget="direct-chat"] to the trigger
 */
+function ($) {
  'use strict'

  var DataKey = 'Aquaadmin.directchat'

  var Selector = {
    data: '[data-widget="chat-pane-toggle"]',
    box : '.direct-chat'
  }

  var ClassName = {
    open: 'direct-chat-contacts-open'
  }

  // DirectChat Class Definition
  var DirectChat = function (element) {
    this.element = element
  }

  DirectChat.prototype.toggle = function ($trigger) {
    $trigger.parents(Selector.box).first().toggleClass(ClassName.open)
  }

  // Plugin Definition
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data(DataKey)

      if (!data) {
        $this.data(DataKey, (data = new DirectChat($this)))
      }

      if (typeof option == 'string') data.toggle($this)
    })
  }

  var old = $.fn.directChat

  $.fn.directChat             = Plugin
  $.fn.directChat.Constructor = DirectChat

  // No Conflict Mode
  $.fn.directChat.noConflict = function () {
    $.fn.directChat = old
    return this
  }

  // DirectChat Data API
  $(document).on('click', Selector.data, function (event) {
    if (event) event.preventDefault()
    Plugin.call($(this), 'toggle')
  })
  
  // Slim scrolling
  
  $('.inner-content-div').slimScroll({
    height: '200'
  });

  $('.sm-scrol').slimScroll({
    height: '250'
  });
	
  $('.direct-chat-messages').slimScroll({
    height: '310'
  });

  
  $(".search-box a, .search-box .app-search .srh-btn").on('click', function() {
        $(".app-search").toggle(200);
    });
	
	
	
  // Close
    //
    $(document).on('click', '.box-btn-close', function() {
      $(this).parents('.box').fadeOut(600, function() {
        if ($(this).parent().children().length == 1) {
          $(this).parent().remove();
        }
        else {
          $(this).remove();
        }
      });
    });



    // Slide up/down
    //
    $(document).on('click', '.box-btn-slide', function(){
      $(this).toggleClass('rotate-180').parents('.box').find('.box-content, .box-body').slideToggle();
    });



    // Maximize
    //
    $(document).on('click', '.box-btn-maximize', function(){
      $(this).parents('.box').toggleClass('box-maximize').removeClass('box-fullscreen');
    });



    // Fullscreen
    //
    $(document).on('click', '.box-btn-fullscreen', function(){
      $(this).parents('.box').toggleClass('box-fullscreen').removeClass('box-maximize');
    });
	
		
		// Disable demonstrative links!
    //
    $(document).on('click', 'a[href="#"]', function(e){
      e.preventDefault();
    });
	
	
    // This is for the innerleft sidebar
    $(".open-left-block").on('click', function() {
        $('.left-block').toggleClass('open-panel');
        $('.open-left-block').toggleClass('mdi-menu');
    });
	
	
    // Upload
    //
    $(document).on('click', '.file-browser', function() {
      var $browser = $(this);
      if ( $browser.hasClass('form-control') ) {
        setTimeout(function(){
          $browser.closest('.file-group').find('[type="file"]').trigger('click');
        },300);
      }
      else {
        var file = $browser.closest('.file-group').find('[type="file"]');
        file.on( 'click', function(e) {
          e.stopPropagation();
        });
        file.trigger('click');
      }
    });

    // Event to change file name after file selection
    $(document).on('change', '.file-group [type="file"]', function(){
      var input = $(this)[0];
      var len = input.files.length;
      var filename = '';

      for (var i = 0; i < len; ++i) {
        filename += input.files.item(i).name + ', ';
      }
      filename = filename.substr(0, filename.length-2);
      $(this).closest('.file-group').find('.file-value').val(filename).text(filename).focus();
    });

    // Update file name for bootstrap custom file upload
    $(document).on('change', '.custom-file-input', function(){
      var filename = $(this).val().split('\\').pop();
      $(this).next('.custom-file-control').attr('data-input-value', filename);
    });
    $('.custom-file-control:not([data-input-value])').attr('data-input-value', 'Choose file...');
	
		

	/* The todo list plugin */
	  $('.todo-list').todoList({
		onCheck  : function () {
		  window.console.log($(this), 'The element has been checked');
		},
		onUnCheck: function () {
		  window.console.log($(this), 'The element has been unchecked');
		}
	  });
	
	
}(jQuery) // End of use strict

// Fullscreen
	$(function () {
		'use strict'

			$('[data-provide~="fullscreen"]').on('click', function () {
				screenfull.toggle($('#container')[0]);
			});
		
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})

	}); // End of use strict


// feather icon
	$(function () {
		'use strict'			
		feather.replace();		
	}); // End of use strict


+function ($) {
  'use strict'
	
// Dynamic active menu
    var path = window.location.pathname.split("/").pop();
    var target = $('.sidebar-menu li a[href="'+path+'"]');
    target.parent().addClass('active');
    $('.sidebar-menu li.active').parents('li').addClass('active');

}(jQuery) // End of use strict


/*!
 * Waves v0.6.4
 * http://fian.my.id/Waves
 *
 * Copyright 2014 Alfiana E. Sibuea and other contributors
 * Released under the MIT license
 * https://github.com/fians/Waves/blob/master/LICENSE
 */

;(function(window) {
    'use strict';

    var Waves = Waves || {};
    var $$ = document.querySelectorAll.bind(document);

    // Find exact position of element
    function isWindow(obj) {
        return obj !== null && obj === obj.window;
    }

    function getWindow(elem) {
        return isWindow(elem) ? elem : elem.nodeType === 9 && elem.defaultView;
    }

    function offset(elem) {
        var docElem, win,
            box = {top: 0, left: 0},
            doc = elem && elem.ownerDocument;

        docElem = doc.documentElement;

        if (typeof elem.getBoundingClientRect !== typeof undefined) {
            box = elem.getBoundingClientRect();
        }
        win = getWindow(doc);
        return {
            top: box.top + win.pageYOffset - docElem.clientTop,
            left: box.left + win.pageXOffset - docElem.clientLeft
        };
    }

    function convertStyle(obj) {
        var style = '';

        for (var a in obj) {
            if (obj.hasOwnProperty(a)) {
                style += (a + ':' + obj[a] + ';');
            }
        }

        return style;
    }

    var Effect = {

        // Effect delay
        duration: 750,

        show: function(e, element) {

            // Disable right click
            if (e.button === 2) {
                return false;
            }

            var el = element || this;

            // Create ripple
            var ripple = document.createElement('div');
            ripple.className = 'waves-ripple';
            el.appendChild(ripple);

            // Get click coordinate and element witdh
            var pos         = offset(el);
            var relativeY   = (e.pageY - pos.top);
            var relativeX   = (e.pageX - pos.left);
            var scale       = 'scale('+((el.clientWidth / 100) * 10)+')';

            // Support for touch devices
            if ('touches' in e) {
              relativeY   = (e.touches[0].pageY - pos.top);
              relativeX   = (e.touches[0].pageX - pos.left);
            }

            // Attach data to element
            ripple.setAttribute('data-hold', Date.now());
            ripple.setAttribute('data-scale', scale);
            ripple.setAttribute('data-x', relativeX);
            ripple.setAttribute('data-y', relativeY);

            // Set ripple position
            var rippleStyle = {
                'top': relativeY+'px',
                'left': relativeX+'px'
            };

            ripple.className = ripple.className + ' waves-notransition';
            ripple.setAttribute('style', convertStyle(rippleStyle));
            ripple.className = ripple.className.replace('waves-notransition', '');

            // Scale the ripple
            rippleStyle['-webkit-transform'] = scale;
            rippleStyle['-moz-transform'] = scale;
            rippleStyle['-ms-transform'] = scale;
            rippleStyle['-o-transform'] = scale;
            rippleStyle.transform = scale;
            rippleStyle.opacity   = '1';

            rippleStyle['-webkit-transition-duration'] = Effect.duration + 'ms';
            rippleStyle['-moz-transition-duration']    = Effect.duration + 'ms';
            rippleStyle['-o-transition-duration']      = Effect.duration + 'ms';
            rippleStyle['transition-duration']         = Effect.duration + 'ms';

            rippleStyle['-webkit-transition-timing-function'] = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
            rippleStyle['-moz-transition-timing-function']    = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
            rippleStyle['-o-transition-timing-function']      = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
            rippleStyle['transition-timing-function']         = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';

            ripple.setAttribute('style', convertStyle(rippleStyle));
        },

        hide: function(e) {
            TouchHandler.touchup(e);

            var el = this;
            var width = el.clientWidth * 1.4;

            // Get first ripple
            var ripple = null;
            var ripples = el.getElementsByClassName('waves-ripple');
            if (ripples.length > 0) {
                ripple = ripples[ripples.length - 1];
            } else {
                return false;
            }

            var relativeX   = ripple.getAttribute('data-x');
            var relativeY   = ripple.getAttribute('data-y');
            var scale       = ripple.getAttribute('data-scale');

            // Get delay beetween mousedown and mouse leave
            var diff = Date.now() - Number(ripple.getAttribute('data-hold'));
            var delay = 350 - diff;

            if (delay < 0) {
                delay = 0;
            }

            // Fade out ripple after delay
            setTimeout(function() {
                var style = {
                    'top': relativeY+'px',
                    'left': relativeX+'px',
                    'opacity': '0',

                    // Duration
                    '-webkit-transition-duration': Effect.duration + 'ms',
                    '-moz-transition-duration': Effect.duration + 'ms',
                    '-o-transition-duration': Effect.duration + 'ms',
                    'transition-duration': Effect.duration + 'ms',
                    '-webkit-transform': scale,
                    '-moz-transform': scale,
                    '-ms-transform': scale,
                    '-o-transform': scale,
                    'transform': scale,
                };

                ripple.setAttribute('style', convertStyle(style));

                setTimeout(function() {
                    try {
                        el.removeChild(ripple);
                    } catch(e) {
                        return false;
                    }
                }, Effect.duration);
            }, delay);
        },

        // Little hack to make <input> can perform waves effect
        wrapInput: function(elements) {
            for (var a = 0; a < elements.length; a++) {
                var el = elements[a];

                if (el.tagName.toLowerCase() === 'input') {
                    var parent = el.parentNode;

                    // If input already have parent just pass through
                    if (parent.tagName.toLowerCase() === 'i' && parent.className.indexOf('waves-effect') !== -1) {
                        continue;
                    }

                    // Put element class and style to the specified parent
                    var wrapper = document.createElement('i');
                    wrapper.className = el.className + ' waves-input-wrapper';

                    var elementStyle = el.getAttribute('style');

                    if (!elementStyle) {
                        elementStyle = '';
                    }

                    wrapper.setAttribute('style', elementStyle);

                    el.className = 'waves-button-input';
                    el.removeAttribute('style');

                    // Put element as child
                    parent.replaceChild(wrapper, el);
                    wrapper.appendChild(el);
                }
            }
        }
    };


    /**
     * Disable mousedown event for 500ms during and after touch
     */
    var TouchHandler = {
        /* uses an integer rather than bool so there's no issues with
         * needing to clear timeouts if another touch event occurred
         * within the 500ms. Cannot mouseup between touchstart and
         * touchend, nor in the 500ms after touchend. */
        touches: 0,
        allowEvent: function(e) {
            var allow = true;

            if (e.type === 'touchstart') {
                TouchHandler.touches += 1; //push
            } else if (e.type === 'touchend' || e.type === 'touchcancel') {
                setTimeout(function() {
                    if (TouchHandler.touches > 0) {
                        TouchHandler.touches -= 1; //pop after 500ms
                    }
                }, 500);
            } else if (e.type === 'mousedown' && TouchHandler.touches > 0) {
                allow = false;
            }

            return allow;
        },
        touchup: function(e) {
            TouchHandler.allowEvent(e);
        }
    };


    /**
     * Delegated click handler for .waves-effect element.
     * returns null when .waves-effect element not in "click tree"
     */
    function getWavesEffectElement(e) {
        if (TouchHandler.allowEvent(e) === false) {
            return null;
        }

        var element = null;
        var target = e.target || e.srcElement;

        while (target.parentNode !== null) {
            if (!(target instanceof SVGElement) && target.className.indexOf('waves-effect') !== -1) {
                element = target;
                break;
            }
            target = target.parentNode;
        }
        return element;
    }

    /**
     * Bubble the click and show effect if .waves-effect elem was found
     */
    function showEffect(e) {
        var element = getWavesEffectElement(e);

        if (element !== null) {
            Effect.show(e, element);

            if ('ontouchstart' in window) {
                element.addEventListener('touchend', Effect.hide, false);
                element.addEventListener('touchcancel', Effect.hide, false);
            }

            element.addEventListener('mouseup', Effect.hide, false);
            element.addEventListener('mouseleave', Effect.hide, false);
            element.addEventListener('dragend', Effect.hide, false);
        }
    }

    Waves.displayEffect = function(options) {
        options = options || {};

        if ('duration' in options) {
            Effect.duration = options.duration;
        }

        //Wrap input inside <i> tag
        Effect.wrapInput($$('.waves-effect'));

        if ('ontouchstart' in window) {
            document.body.addEventListener('touchstart', showEffect, false);
        }

        document.body.addEventListener('mousedown', showEffect, false);
    };

    /**
     * Attach Waves to an input element (or any element which doesn't
     * bubble mouseup/mousedown events).
     *   Intended to be used with dynamically loaded forms/inputs, or
     * where the user doesn't want a delegated click handler.
     */
    Waves.attach = function(element) {
        //FUTURE: automatically add waves classes and allow users
        // to specify them with an options param? Eg. light/classic/button
        if (element.tagName.toLowerCase() === 'input') {
            Effect.wrapInput([element]);
            element = element.parentNode;
        }

        if ('ontouchstart' in window) {
            element.addEventListener('touchstart', showEffect, false);
        }

        element.addEventListener('mousedown', showEffect, false);
    };

    window.Waves = Waves;

    document.addEventListener('DOMContentLoaded', function() {
        Waves.displayEffect();
    }, false);

})(window);

//[Master Javascript]

//Project:	Sunny Admin - Responsive Admin Template
//Primary use:	Sunny Admin - Responsive Admin Template

//should be included in all pages. It controls some layout


// Make sure jQuery has been loaded
if (typeof jQuery === 'undefined') {
    throw new Error('template requires jQuery')
    }
    
    // Layout()
    
    //  Implements layout.
    //  Fixes the layout height in case min-height fails.
    
    //  @usage activated automatically upon window load.
    //  Configure any options by passing data-option="value"
    //  to the body tag.
    
    
    
    +function ($) {
      'use strict'
    
      var DataKey = 'Aquaadmin.layout'
    
      var Default = {
        slimscroll : true,
        resetHeight: true
      }
    
      var Selector = {
        wrapper       : '.wrapper',
        contentWrapper: '.content-wrapper',
        layoutBoxed   : '.layout-boxed',
        mainFooter    : '.main-footer',
        mainHeader    : '.main-header',
        sidebar       : '.sidebar',
        controlSidebar: '.control-sidebar',
        fixed         : '.fixed',
        sidebarMenu   : '.sidebar-menu',
        logo          : '.main-header .logo'
      }
    
      var ClassName = {
        fixed         : 'fixed',
        holdTransition: 'hold-transition'
      }
    
      var Layout = function (options) {
        this.options      = options
        this.bindedResize = false
        this.activate()
      }
    
      Layout.prototype.activate = function () {
        this.fix()
        this.fixSidebar()
    
        $('body').removeClass(ClassName.holdTransition)
    
        if (this.options.resetHeight) {
          $('body, html, ' + Selector.wrapper).css({
            'height'    : 'auto',
            'min-height': '100%'
          })
        }
    
        if (!this.bindedResize) {
          $(window).resize(function () {
            this.fix()
            this.fixSidebar()
    
            $(Selector.logo + ', ' + Selector.sidebar).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
              this.fix()
              this.fixSidebar()
            }.bind(this))
          }.bind(this))
    
          this.bindedResize = true
        }
    
        $(Selector.sidebarMenu).on('expanded.tree', function () {
          this.fix()
          this.fixSidebar()
        }.bind(this))
    
        $(Selector.sidebarMenu).on('collapsed.tree', function () {
          this.fix()
          this.fixSidebar()
        }.bind(this))
      }
    
      Layout.prototype.fix = function () {
        // Remove overflow from .wrapper if layout-boxed exists
        $(Selector.layoutBoxed + ' > ' + Selector.wrapper).css('overflow', 'hidden')
    
        // Get window height and the wrapper height
        var footerHeight  = $(Selector.mainFooter).outerHeight() || 0
        var neg           = $(Selector.mainHeader).outerHeight() + footerHeight
        var windowHeight  = $(window).height()
        var sidebarHeight = $(Selector.sidebar).height() || 0
    
        // Set the min-height of the content and sidebar based on
        // the height of the document.
        if ($('body').hasClass(ClassName.fixed)) {
          $(Selector.contentWrapper).css('min-height', windowHeight - footerHeight)
        } else {
          var postSetHeight
    
          if (windowHeight >= sidebarHeight) {
            $(Selector.contentWrapper).css('min-height', windowHeight - neg)
            postSetHeight = windowHeight - neg
          } else {
            $(Selector.contentWrapper).css('min-height', sidebarHeight)
            postSetHeight = sidebarHeight
          }
    
          // Fix for the control sidebar height
          var $controlSidebar = $(Selector.controlSidebar)
          if (typeof $controlSidebar !== 'undefined') {
            if ($controlSidebar.height() > postSetHeight)
              $(Selector.contentWrapper).css('min-height', $controlSidebar.height())
          }
        }
      }
    
      Layout.prototype.fixSidebar = function () {
        // Make sure the body tag has the .fixed class
        if (!$('body').hasClass(ClassName.fixed)) {
          if (typeof $.fn.slimScroll !== 'undefined') {
            $(Selector.sidebar).slimScroll({ destroy: true }).height('auto')
          }
          return
        }
    
        // Enable slimscroll for fixed layout
        if (this.options.slimscroll) {
          if (typeof $.fn.slimScroll !== 'undefined') {
            // Destroy if it exists
            $(Selector.sidebar).slimScroll({ destroy: true }).height('auto')
    
            // Add slimscroll
            $(Selector.sidebar).slimScroll({
              height: ($(window).height() - $(Selector.mainHeader).height()) + 'px',
              color : 'rgba(0,0,0,0.2)',
              size  : '3px'
            })
          }
        }
      }
    
      // Plugin Definition
      function Plugin(option) {
        return this.each(function () {
          var $this = $(this)
          var data  = $this.data(DataKey)
    
          if (!data) {
            var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
            $this.data(DataKey, (data = new Layout(options)))
          }
    
          if (typeof option == 'string') {
            if (typeof data[option] == 'undefined') {
              throw new Error('No method named ' + option)
            }
            data[option]()
          }
        })
      }
    
      var old = $.fn.layout
    
      $.fn.layout            = Plugin
      $.fn.layout.Constuctor = Layout
    
      // No conflict mode
      $.fn.layout.noConflict = function () {
        $.fn.layout = old
        return this
      }
    
      // Layout DATA-API
      $(window).on('load', function () {
        Plugin.call($('body'))
      });
    }(jQuery)  // End of use strict
    
    /* PushMenu()
     * Adds the push menu functionality to the sidebar.
     *
     * @usage: $('.btn').pushMenu(options)
     *          or add [data-toggle="push-menu"] to any button
     *          Pass any option as data-option="value"
     */
    +function ($) {
      'use strict'
    
      var DataKey = 'Aquaadmin.pushmenu'
    
      var Default = {
        collapseScreenSize   : 767,
        expandOnHover        : false,
        expandTransitionDelay: 200
      }
    
      var Selector = {
        collapsed     : '.sidebar-collapse',
        open          : '.sidebar-open',
        mainSidebar   : '.main-sidebar',
        contentWrapper: '.content-wrapper',
        searchInput   : '.sidebar-form .form-control',
        button        : '[data-toggle="push-menu"]',
        mini          : '.sidebar-mini',
        expanded      : '.sidebar-expanded-on-hover',
        layoutFixed   : '.fixed'
      }
    
      var ClassName = {
        collapsed    : 'sidebar-collapse',
        open         : 'sidebar-open',
        mini         : 'sidebar-mini',
        expanded     : 'sidebar-expanded-on-hover',
        expandFeature: 'sidebar-mini-expand-feature',
        layoutFixed  : 'fixed'
      }
    
      var Event = {
        expanded : 'expanded.pushMenu',
        collapsed: 'collapsed.pushMenu'
      }
    
      // PushMenu Class Definition
      var PushMenu = function (options) {
        this.options = options
        this.init()
      }
    
      PushMenu.prototype.init = function () {
        if (this.options.expandOnHover
          || ($('body').is(Selector.mini + Selector.layoutFixed))) {
          this.expandOnHover()
          $('body').addClass(ClassName.expandFeature)
        }
    
        $(Selector.contentWrapper).on(function () {
          // Enable hide menu when clicking on the content-wrapper on small screens
          if ($(window).width() <= this.options.collapseScreenSize && $('body').hasClass(ClassName.open)) {
            this.close()
          }
        }.bind(this))
    
        // __Fix for android devices
        $(Selector.searchInput).on(function (e) {
          e.stopPropagation()
        })
      }
    
      PushMenu.prototype.toggle = function () {
        var windowWidth = $(window).width()
        var isOpen      = !$('body').hasClass(ClassName.collapsed)
    
        if (windowWidth <= this.options.collapseScreenSize) {
          isOpen = $('body').hasClass(ClassName.open)
        }
    
        if (!isOpen) {
          this.open()
        } else {
          this.close()
        }
      }
    
      PushMenu.prototype.open = function () {
        var windowWidth = $(window).width()
    
        if (windowWidth > this.options.collapseScreenSize) {
          $('body').removeClass(ClassName.collapsed)
            .trigger($.Event(Event.expanded))
        }
        else {
          $('body').addClass(ClassName.open)
            .trigger($.Event(Event.expanded))
        }
      }
    
      PushMenu.prototype.close = function () {
        var windowWidth = $(window).width()
        if (windowWidth > this.options.collapseScreenSize) {
          $('body').addClass(ClassName.collapsed)
            .trigger($.Event(Event.collapsed))
        } else {
          $('body').removeClass(ClassName.open + ' ' + ClassName.collapsed)
            .trigger($.Event(Event.collapsed))
        }
      }
    
      PushMenu.prototype.expandOnHover = function () {
        $(Selector.mainSidebar).hover(function () {
          if ($('body').is(Selector.mini + Selector.collapsed)
            && $(window).width() > this.options.collapseScreenSize) {
            this.expand()
          }
        }.bind(this), function () {
          if ($('body').is(Selector.expanded)) {
            this.collapse()
          }
        }.bind(this))
      }
    
      PushMenu.prototype.expand = function () {
        setTimeout(function () {
          $('body').removeClass(ClassName.collapsed)
            .addClass(ClassName.expanded)
        }, this.options.expandTransitionDelay)
      }
    
      PushMenu.prototype.collapse = function () {
        setTimeout(function () {
          $('body').removeClass(ClassName.expanded)
            .addClass(ClassName.collapsed)
        }, this.options.expandTransitionDelay)
      }
    
      // PushMenu Plugin Definition
      function Plugin(option) {
        return this.each(function () {
          var $this = $(this)
          var data  = $this.data(DataKey)
    
          if (!data) {
            var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
            $this.data(DataKey, (data = new PushMenu(options)))
          }
    
          if (option == 'toggle') data.toggle()
        })
      }
    
      var old = $.fn.pushMenu
    
      $.fn.pushMenu             = Plugin
      $.fn.pushMenu.Constructor = PushMenu
    
      // No Conflict Mode
      $.fn.pushMenu.noConflict = function () {
        $.fn.pushMenu = old
        return this
      }
    
      // Data API
      $(document).on('click', Selector.button, function (e) {
        e.preventDefault()
        Plugin.call($(this), 'toggle')
      })
      $(window).on('load', function () {
        Plugin.call($(Selector.button))
      })
    }(jQuery) // End of use strict
    
    
    /* Tree()
     * Converts a nested list into a multilevel
     * tree view menu.
     *
     * @Usage: $('.my-menu').tree(options)
     *         or add [data-widget="tree"] to the ul element
     *         Pass any option as data-option="value"
     */
    +function ($) {
      'use strict'
    
      var DataKey = 'Aquaadmin.tree'
    
      var Default = {
        animationSpeed: 500,
        accordion     : true,
        followLink    : false,
        trigger       : '.treeview a'
      }
    
      var Selector = {
        tree        : '.tree',
        treeview    : '.treeview',
        treeviewMenu: '.treeview-menu',
        open        : '.menu-open, .active',
        li          : 'li',
        data        : '[data-widget="tree"]',
        active      : '.active'
      }
    
      var ClassName = {
        open: 'menu-open',
        tree: 'tree'
      }
    
      var Event = {
        collapsed: 'collapsed.tree',
        expanded : 'expanded.tree'
      }
    
      // Tree Class Definition
      var Tree = function (element, options) {
        this.element = element
        this.options = options
    
        $(this.element).addClass(ClassName.tree)
    
        $(Selector.treeview + Selector.active, this.element).addClass(ClassName.open)
    
        this._setUpListeners()
      }
    
      Tree.prototype.toggle = function (link, event) {
        var treeviewMenu = link.next(Selector.treeviewMenu)
        var parentLi     = link.parent()
        var isOpen       = parentLi.hasClass(ClassName.open)
    
        if (!parentLi.is(Selector.treeview)) {
          return
        }
    
        if (!this.options.followLink || link.attr('href') == '#') {
          event.preventDefault()
        }
    
        if (isOpen) {
          this.collapse(treeviewMenu, parentLi)
        } else {
          this.expand(treeviewMenu, parentLi)
        }
      }
    
      Tree.prototype.expand = function (tree, parent) {
        var expandedEvent = $.Event(Event.expanded)
    
        if (this.options.accordion) {
          var openMenuLi = parent.siblings(Selector.open)
          var openTree   = openMenuLi.children(Selector.treeviewMenu)
          this.collapse(openTree, openMenuLi)
        }
    
        parent.addClass(ClassName.open)
        tree.slideDown(this.options.animationSpeed, function () {
          $(this.element).trigger(expandedEvent)
        }.bind(this))
      }
    
      Tree.prototype.collapse = function (tree, parentLi) {
        var collapsedEvent = $.Event(Event.collapsed)
    
        tree.find(Selector.open).removeClass(ClassName.open)
        parentLi.removeClass(ClassName.open)
        tree.slideUp(this.options.animationSpeed, function () {
          tree.find(Selector.open + ' > ' + Selector.treeview).slideUp()
          $(this.element).trigger(collapsedEvent)
        }.bind(this))
      }
    
      // Private
    
      Tree.prototype._setUpListeners = function () {
        var that = this
    
        $(this.element).on('click', this.options.trigger, function (event) {
          that.toggle($(this), event)
        })
      }
    
      // Plugin Definition
      function Plugin(option) {
        return this.each(function () {
          var $this = $(this)
          var data  = $this.data(DataKey)
    
          if (!data) {
            var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
            $this.data(DataKey, new Tree($this, options))
          }
        })
      }
    
      var old = $.fn.tree
    
      $.fn.tree             = Plugin
      $.fn.tree.Constructor = Tree
    
      // No Conflict Mode
      $.fn.tree.noConflict = function () {
        $.fn.tree = old
        return this
      }
    
      // Tree Data API
      $(window).on('load', function () {
        $(Selector.data).each(function () {
          Plugin.call($(this))
        })
      })
    
    }(jQuery) // End of use strict
    
    
    /* ControlSidebar()
     * Toggles the state of the control sidebar
     *
     * @Usage: $('#control-sidebar-trigger').controlSidebar(options)
     *         or add [data-toggle="control-sidebar"] to the trigger
     *         Pass any option as data-option="value"
     */
    +function ($) {
      'use strict'
    
      var DataKey = 'Aquaadmin.controlsidebar'
    
      var Default = {
        slide: true
      }
    
      var Selector = {
        sidebar: '.control-sidebar',
        data   : '[data-toggle="control-sidebar"]',
        open   : '.control-sidebar-open',
        bg     : '.control-sidebar-bg',
        wrapper: '.wrapper',
        content: '.content-wrapper',
        boxed  : '.layout-boxed'
      }
    
      var ClassName = {
        open : 'control-sidebar-open',
        fixed: 'fixed'
      }
    
      var Event = {
        collapsed: 'collapsed.controlsidebar',
        expanded : 'expanded.controlsidebar'
      }
    
      // ControlSidebar Class Definition
      var ControlSidebar = function (element, options) {
        this.element         = element
        this.options         = options
        this.hasBindedResize = false
    
        this.init()
      }
    
      ControlSidebar.prototype.init = function () {
        // Add click listener if the element hasn't been
        // initialized using the data API
        if (!$(this.element).is(Selector.data)) {
          $(this).on('click', this.toggle)
        }
    
        this.fix()
        $(window).resize(function () {
          this.fix()
        }.bind(this))
      }
    
      ControlSidebar.prototype.toggle = function (event) {
        if (event) event.preventDefault()
    
        this.fix()
    
        if (!$(Selector.sidebar).is(Selector.open) && !$('body').is(Selector.open)) {
          this.expand()
        } else {
          this.collapse()
        }
      }
    
      ControlSidebar.prototype.expand = function () {
        if (!this.options.slide) {
          $('body').addClass(ClassName.open)
        } else {
          $(Selector.sidebar).addClass(ClassName.open)
        }
    
        $(this.element).trigger($.Event(Event.expanded))
      }
    
      ControlSidebar.prototype.collapse = function () {
        $('body, ' + Selector.sidebar).removeClass(ClassName.open)
        $(this.element).trigger($.Event(Event.collapsed))
      }
    
      ControlSidebar.prototype.fix = function () {
        if ($('body').is(Selector.boxed)) {
          this._fixForBoxed($(Selector.bg))
        }
      }
    
      // Private
    
      ControlSidebar.prototype._fixForBoxed = function (bg) {
        bg.css({
          position: 'absolute',
          height  : $(Selector.wrapper).height()
        })
      }
    
      // Plugin Definition
      function Plugin(option) {
        return this.each(function () {
          var $this = $(this)
          var data  = $this.data(DataKey)
    
          if (!data) {
            var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
            $this.data(DataKey, (data = new ControlSidebar($this, options)))
          }
    
          if (typeof option == 'string') data.toggle()
        })
      }
    
      var old = $.fn.controlSidebar
    
      $.fn.controlSidebar             = Plugin
      $.fn.controlSidebar.Constructor = ControlSidebar
    
      // No Conflict Mode
      $.fn.controlSidebar.noConflict = function () {
        $.fn.controlSidebar = old
        return this
      }
    
      // ControlSidebar Data API
      $(document).on('click', Selector.data, function (event) {
        if (event) event.preventDefault()
        Plugin.call($(this), 'toggle')
      })
    
    }(jQuery) // End of use strict
    
    
    /* BoxWidget()
     * Adds box widget functions to boxes.
     *
     * @Usage: $('.my-box').boxWidget(options)
     *         This plugin auto activates on any element using the `.box` class
     *         Pass any option as data-option="value"
     */
    +function ($) {
      'use strict'
    
      var DataKey = 'Aquaadmin.boxwidget'
    
      var Default = {
        animationSpeed : 500,
        collapseTrigger: '[data-widget="collapse"]',
        removeTrigger  : '[data-widget="remove"]',
        collapseIcon   : 'fa-minus',
        expandIcon     : 'fa-plus',
        removeIcon     : 'fa-times'
      }
    
      var Selector = {
        data     : '.box',
        collapsed: '.collapsed-box',
        body     : '.box-body',
        footer   : '.box-footer',
        tools    : '.box-tools'
      }
    
      var ClassName = {
        collapsed: 'collapsed-box'
      }
    
      var Event = {
        collapsed: 'collapsed.boxwidget',
        expanded : 'expanded.boxwidget',
        removed  : 'removed.boxwidget'
      }
    
      // BoxWidget Class Definition
      var BoxWidget = function (element, options) {
        this.element = element
        this.options = options
    
        this._setUpListeners()
      }
    
      BoxWidget.prototype.toggle = function () {
        var isOpen = !$(this.element).is(Selector.collapsed)
    
        if (isOpen) {
          this.collapse()
        } else {
          this.expand()
        }
      }
    
      BoxWidget.prototype.expand = function () {
        var expandedEvent = $.Event(Event.expanded)
        var collapseIcon  = this.options.collapseIcon
        var expandIcon    = this.options.expandIcon
    
        $(this.element).removeClass(ClassName.collapsed)
    
        $(this.element)
          .find(Selector.tools)
          .find('.' + expandIcon)
          .removeClass(expandIcon)
          .addClass(collapseIcon)
    
        $(this.element).find(Selector.body + ', ' + Selector.footer)
          .slideDown(this.options.animationSpeed, function () {
            $(this.element).trigger(expandedEvent)
          }.bind(this))
      }
    
      BoxWidget.prototype.collapse = function () {
        var collapsedEvent = $.Event(Event.collapsed)
        var collapseIcon   = this.options.collapseIcon
        var expandIcon     = this.options.expandIcon
    
        $(this.element)
          .find(Selector.tools)
          .find('.' + collapseIcon)
          .removeClass(collapseIcon)
          .addClass(expandIcon)
    
        $(this.element).find(Selector.body + ', ' + Selector.footer)
          .slideUp(this.options.animationSpeed, function () {
            $(this.element).addClass(ClassName.collapsed)
            $(this.element).trigger(collapsedEvent)
          }.bind(this))
      }
    
      BoxWidget.prototype.remove = function () {
        var removedEvent = $.Event(Event.removed)
    
        $(this.element).slideUp(this.options.animationSpeed, function () {
          $(this.element).trigger(removedEvent)
          $(this.element).remove()
        }.bind(this))
      }
    
      // Private
    
      BoxWidget.prototype._setUpListeners = function () {
        var that = this
    
        $(this.element).on('click', this.options.collapseTrigger, function (event) {
          if (event) event.preventDefault()
          that.toggle()
        })
    
        $(this.element).on('click', this.options.removeTrigger, function (event) {
          if (event) event.preventDefault()
          that.remove()
        })
      }
    
      // Plugin Definition
      function Plugin(option) {
        return this.each(function () {
          var $this = $(this)
          var data  = $this.data(DataKey)
    
          if (!data) {
            var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
            $this.data(DataKey, (data = new BoxWidget($this, options)))
          }
    
          if (typeof option == 'string') {
            if (typeof data[option] == 'undefined') {
              throw new Error('No method named ' + option)
            }
            data[option]()
          }
        })
      }
    
      var old = $.fn.boxWidget
    
      $.fn.boxWidget             = Plugin
      $.fn.boxWidget.Constructor = BoxWidget
    
      // No Conflict Mode
      $.fn.boxWidget.noConflict = function () {
        $.fn.boxWidget = old
        return this
      }
    
      // BoxWidget Data API
      $(window).on('load', function () {
        $(Selector.data).each(function () {
          Plugin.call($(this))
        })
      })
    
    }(jQuery) // End of use strict
    
    
    /* TodoList()
     * Converts a list into a todoList.
     *
     * @Usage: $('.my-list').todoList(options)
     *         or add [data-widget="todo-list"] to the ul element
     *         Pass any option as data-option="value"
     */
    +function ($) {
      'use strict'
    
      var DataKey = 'Aquaadmin.todolist'
    
      var Default = {
        iCheck   : false,
        onCheck  : function () {
        },
        onUnCheck: function () {
        }
      }
    
      var Selector = {
        data: '[data-widget="todo-list"]'
      }
    
      var ClassName = {
        done: 'done'
      }
    
      // TodoList Class Definition
      var TodoList = function (element, options) {
        this.element = element
        this.options = options
    
        this._setUpListeners()
      }
    
      TodoList.prototype.toggle = function (item) {
        item.parents(Selector.li).first().toggleClass(ClassName.done)
        if (!item.prop('checked')) {
          this.unCheck(item)
          return
        }
    
        this.check(item)
      }
    
      TodoList.prototype.check = function (item) {
        this.options.onCheck.call(item)
      }
    
      TodoList.prototype.unCheck = function (item) {
        this.options.onUnCheck.call(item)
      }
    
      // Private
    
      TodoList.prototype._setUpListeners = function () {
        var that = this
        $(this.element).on('change ifChanged', 'input:checkbox', function () {
          that.toggle($(this))
        })
      }
    
      // Plugin Definition
      function Plugin(option) {
        return this.each(function () {
          var $this = $(this)
          var data  = $this.data(DataKey)
    
          if (!data) {
            var options = $.extend({}, Default, $this.data(), typeof option === 'object' && option)
            $this.data(DataKey, (data = new TodoList($this, options)))
          }
    
          if (typeof data == 'string') {
            if (typeof data[option] == 'undefined') {
              throw new Error('No method named ' + option)
            }
            data[option]()
          }
        })
      }
    
      var old = $.fn.todoList
    
      $.fn.todoList         = Plugin
      $.fn.todoList.Constructor = TodoList
    
      // No Conflict Mode
      $.fn.todoList.noConflict = function () {
        $.fn.todoList = old
        return this
      }
    
      // TodoList Data API
      $(window).on('load', function () {
        $(Selector.data).each(function () {
          Plugin.call($(this))
        })
      })
    
    }(jQuery) // End of use strict
    
    
    /* DirectChat()
     * Toggles the state of the control sidebar
     *
     * @Usage: $('#my-chat-box').directChat()
     *         or add [data-widget="direct-chat"] to the trigger
     */
    +function ($) {
      'use strict'
    
      var DataKey = 'Aquaadmin.directchat'
    
      var Selector = {
        data: '[data-widget="chat-pane-toggle"]',
        box : '.direct-chat'
      }
    
      var ClassName = {
        open: 'direct-chat-contacts-open'
      }
    
      // DirectChat Class Definition
      var DirectChat = function (element) {
        this.element = element
      }
    
      DirectChat.prototype.toggle = function ($trigger) {
        $trigger.parents(Selector.box).first().toggleClass(ClassName.open)
      }
    
      // Plugin Definition
      function Plugin(option) {
        return this.each(function () {
          var $this = $(this)
          var data  = $this.data(DataKey)
    
          if (!data) {
            $this.data(DataKey, (data = new DirectChat($this)))
          }
    
          if (typeof option == 'string') data.toggle($this)
        })
      }
    
      var old = $.fn.directChat
    
      $.fn.directChat             = Plugin
      $.fn.directChat.Constructor = DirectChat
    
      // No Conflict Mode
      $.fn.directChat.noConflict = function () {
        $.fn.directChat = old
        return this
      }
    
      // DirectChat Data API
      $(document).on('click', Selector.data, function (event) {
        if (event) event.preventDefault()
        Plugin.call($(this), 'toggle')
      })
      
      // Slim scrolling
      
      $('.inner-content-div').slimScroll({
        height: '200'
      });
    
      $('.sm-scrol').slimScroll({
        height: '250'
      });
        
      $('.direct-chat-messages').slimScroll({
        height: '310'
      });
    
      
      $(".search-box a, .search-box .app-search .srh-btn").on('click', function() {
            $(".app-search").toggle(200);
        });
        
        
        
      // Close
        //
        $(document).on('click', '.box-btn-close', function() {
          $(this).parents('.box').fadeOut(600, function() {
            if ($(this).parent().children().length == 1) {
              $(this).parent().remove();
            }
            else {
              $(this).remove();
            }
          });
        });
    
    
    
        // Slide up/down
        //
        $(document).on('click', '.box-btn-slide', function(){
          $(this).toggleClass('rotate-180').parents('.box').find('.box-content, .box-body').slideToggle();
        });
    
    
    
        // Maximize
        //
        $(document).on('click', '.box-btn-maximize', function(){
          $(this).parents('.box').toggleClass('box-maximize').removeClass('box-fullscreen');
        });
    
    
    
        // Fullscreen
        //
        $(document).on('click', '.box-btn-fullscreen', function(){
          $(this).parents('.box').toggleClass('box-fullscreen').removeClass('box-maximize');
        });
        
            
            // Disable demonstrative links!
        //
        $(document).on('click', 'a[href="#"]', function(e){
          e.preventDefault();
        });
        
        
        // This is for the innerleft sidebar
        $(".open-left-block").on('click', function() {
            $('.left-block').toggleClass('open-panel');
            $('.open-left-block').toggleClass('mdi-menu');
        });
        
        
        // Upload
        //
        $(document).on('click', '.file-browser', function() {
          var $browser = $(this);
          if ( $browser.hasClass('form-control') ) {
            setTimeout(function(){
              $browser.closest('.file-group').find('[type="file"]').trigger('click');
            },300);
          }
          else {
            var file = $browser.closest('.file-group').find('[type="file"]');
            file.on( 'click', function(e) {
              e.stopPropagation();
            });
            file.trigger('click');
          }
        });
    
        // Event to change file name after file selection
        $(document).on('change', '.file-group [type="file"]', function(){
          var input = $(this)[0];
          var len = input.files.length;
          var filename = '';
    
          for (var i = 0; i < len; ++i) {
            filename += input.files.item(i).name + ', ';
          }
          filename = filename.substr(0, filename.length-2);
          $(this).closest('.file-group').find('.file-value').val(filename).text(filename).focus();
        });
    
        // Update file name for bootstrap custom file upload
        $(document).on('change', '.custom-file-input', function(){
          var filename = $(this).val().split('\\').pop();
          $(this).next('.custom-file-control').attr('data-input-value', filename);
        });
        $('.custom-file-control:not([data-input-value])').attr('data-input-value', 'Choose file...');
        
            
    
        /* The todo list plugin */
          $('.todo-list').todoList({
            onCheck  : function () {
              window.console.log($(this), 'The element has been checked');
            },
            onUnCheck: function () {
              window.console.log($(this), 'The element has been unchecked');
            }
          });
        
        
    }(jQuery) // End of use strict
    
    // Fullscreen
        $(function () {
            'use strict'
    
                $('[data-provide~="fullscreen"]').on('click', function () {
                    screenfull.toggle($('#container')[0]);
                });
            
                $(function () {
                  $('[data-toggle="tooltip"]').tooltip()
                })
    
        }); // End of use strict
    
    
    // feather icon
        $(function () {
            'use strict'			
            feather.replace();		
        }); // End of use strict
    
    
    +function ($) {
      'use strict'
        
    // Dynamic active menu
        var path = window.location.pathname.split("/").pop();
        var target = $('.sidebar-menu li a[href="'+path+'"]');
        target.parent().addClass('active');
        $('.sidebar-menu li.active').parents('li').addClass('active');
    
    }(jQuery) // End of use strict
    
    
    /*!
     * Waves v0.6.4
     * http://fian.my.id/Waves
     *
     * Copyright 2014 Alfiana E. Sibuea and other contributors
     * Released under the MIT license
     * https://github.com/fians/Waves/blob/master/LICENSE
     */
    
    ;(function(window) {
        'use strict';
    
        var Waves = Waves || {};
        var $$ = document.querySelectorAll.bind(document);
    
        // Find exact position of element
        function isWindow(obj) {
            return obj !== null && obj === obj.window;
        }
    
        function getWindow(elem) {
            return isWindow(elem) ? elem : elem.nodeType === 9 && elem.defaultView;
        }
    
        function offset(elem) {
            var docElem, win,
                box = {top: 0, left: 0},
                doc = elem && elem.ownerDocument;
    
            docElem = doc.documentElement;
    
            if (typeof elem.getBoundingClientRect !== typeof undefined) {
                box = elem.getBoundingClientRect();
            }
            win = getWindow(doc);
            return {
                top: box.top + win.pageYOffset - docElem.clientTop,
                left: box.left + win.pageXOffset - docElem.clientLeft
            };
        }
    
        function convertStyle(obj) {
            var style = '';
    
            for (var a in obj) {
                if (obj.hasOwnProperty(a)) {
                    style += (a + ':' + obj[a] + ';');
                }
            }
    
            return style;
        }
    
        var Effect = {
    
            // Effect delay
            duration: 750,
    
            show: function(e, element) {
    
                // Disable right click
                if (e.button === 2) {
                    return false;
                }
    
                var el = element || this;
    
                // Create ripple
                var ripple = document.createElement('div');
                ripple.className = 'waves-ripple';
                el.appendChild(ripple);
    
                // Get click coordinate and element witdh
                var pos         = offset(el);
                var relativeY   = (e.pageY - pos.top);
                var relativeX   = (e.pageX - pos.left);
                var scale       = 'scale('+((el.clientWidth / 100) * 10)+')';
    
                // Support for touch devices
                if ('touches' in e) {
                  relativeY   = (e.touches[0].pageY - pos.top);
                  relativeX   = (e.touches[0].pageX - pos.left);
                }
    
                // Attach data to element
                ripple.setAttribute('data-hold', Date.now());
                ripple.setAttribute('data-scale', scale);
                ripple.setAttribute('data-x', relativeX);
                ripple.setAttribute('data-y', relativeY);
    
                // Set ripple position
                var rippleStyle = {
                    'top': relativeY+'px',
                    'left': relativeX+'px'
                };
    
                ripple.className = ripple.className + ' waves-notransition';
                ripple.setAttribute('style', convertStyle(rippleStyle));
                ripple.className = ripple.className.replace('waves-notransition', '');
    
                // Scale the ripple
                rippleStyle['-webkit-transform'] = scale;
                rippleStyle['-moz-transform'] = scale;
                rippleStyle['-ms-transform'] = scale;
                rippleStyle['-o-transform'] = scale;
                rippleStyle.transform = scale;
                rippleStyle.opacity   = '1';
    
                rippleStyle['-webkit-transition-duration'] = Effect.duration + 'ms';
                rippleStyle['-moz-transition-duration']    = Effect.duration + 'ms';
                rippleStyle['-o-transition-duration']      = Effect.duration + 'ms';
                rippleStyle['transition-duration']         = Effect.duration + 'ms';
    
                rippleStyle['-webkit-transition-timing-function'] = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
                rippleStyle['-moz-transition-timing-function']    = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
                rippleStyle['-o-transition-timing-function']      = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
                rippleStyle['transition-timing-function']         = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
    
                ripple.setAttribute('style', convertStyle(rippleStyle));
            },
    
            hide: function(e) {
                TouchHandler.touchup(e);
    
                var el = this;
                var width = el.clientWidth * 1.4;
    
                // Get first ripple
                var ripple = null;
                var ripples = el.getElementsByClassName('waves-ripple');
                if (ripples.length > 0) {
                    ripple = ripples[ripples.length - 1];
                } else {
                    return false;
                }
    
                var relativeX   = ripple.getAttribute('data-x');
                var relativeY   = ripple.getAttribute('data-y');
                var scale       = ripple.getAttribute('data-scale');
    
                // Get delay beetween mousedown and mouse leave
                var diff = Date.now() - Number(ripple.getAttribute('data-hold'));
                var delay = 350 - diff;
    
                if (delay < 0) {
                    delay = 0;
                }
    
                // Fade out ripple after delay
                setTimeout(function() {
                    var style = {
                        'top': relativeY+'px',
                        'left': relativeX+'px',
                        'opacity': '0',
    
                        // Duration
                        '-webkit-transition-duration': Effect.duration + 'ms',
                        '-moz-transition-duration': Effect.duration + 'ms',
                        '-o-transition-duration': Effect.duration + 'ms',
                        'transition-duration': Effect.duration + 'ms',
                        '-webkit-transform': scale,
                        '-moz-transform': scale,
                        '-ms-transform': scale,
                        '-o-transform': scale,
                        'transform': scale,
                    };
    
                    ripple.setAttribute('style', convertStyle(style));
    
                    setTimeout(function() {
                        try {
                            el.removeChild(ripple);
                        } catch(e) {
                            return false;
                        }
                    }, Effect.duration);
                }, delay);
            },
    
            // Little hack to make <input> can perform waves effect
            wrapInput: function(elements) {
                for (var a = 0; a < elements.length; a++) {
                    var el = elements[a];
    
                    if (el.tagName.toLowerCase() === 'input') {
                        var parent = el.parentNode;
    
                        // If input already have parent just pass through
                        if (parent.tagName.toLowerCase() === 'i' && parent.className.indexOf('waves-effect') !== -1) {
                            continue;
                        }
    
                        // Put element class and style to the specified parent
                        var wrapper = document.createElement('i');
                        wrapper.className = el.className + ' waves-input-wrapper';
    
                        var elementStyle = el.getAttribute('style');
    
                        if (!elementStyle) {
                            elementStyle = '';
                        }
    
                        wrapper.setAttribute('style', elementStyle);
    
                        el.className = 'waves-button-input';
                        el.removeAttribute('style');
    
                        // Put element as child
                        parent.replaceChild(wrapper, el);
                        wrapper.appendChild(el);
                    }
                }
            }
        };
    
    
        /**
         * Disable mousedown event for 500ms during and after touch
         */
        var TouchHandler = {
            /* uses an integer rather than bool so there's no issues with
             * needing to clear timeouts if another touch event occurred
             * within the 500ms. Cannot mouseup between touchstart and
             * touchend, nor in the 500ms after touchend. */
            touches: 0,
            allowEvent: function(e) {
                var allow = true;
    
                if (e.type === 'touchstart') {
                    TouchHandler.touches += 1; //push
                } else if (e.type === 'touchend' || e.type === 'touchcancel') {
                    setTimeout(function() {
                        if (TouchHandler.touches > 0) {
                            TouchHandler.touches -= 1; //pop after 500ms
                        }
                    }, 500);
                } else if (e.type === 'mousedown' && TouchHandler.touches > 0) {
                    allow = false;
                }
    
                return allow;
            },
            touchup: function(e) {
                TouchHandler.allowEvent(e);
            }
        };
    
    
        /**
         * Delegated click handler for .waves-effect element.
         * returns null when .waves-effect element not in "click tree"
         */
        function getWavesEffectElement(e) {
            if (TouchHandler.allowEvent(e) === false) {
                return null;
            }
    
            var element = null;
            var target = e.target || e.srcElement;
    
            while (target.parentNode !== null) {
                if (!(target instanceof SVGElement) && target.className.indexOf('waves-effect') !== -1) {
                    element = target;
                    break;
                }
                target = target.parentNode;
            }
            return element;
        }
    
        /**
         * Bubble the click and show effect if .waves-effect elem was found
         */
        function showEffect(e) {
            var element = getWavesEffectElement(e);
    
            if (element !== null) {
                Effect.show(e, element);
    
                if ('ontouchstart' in window) {
                    element.addEventListener('touchend', Effect.hide, false);
                    element.addEventListener('touchcancel', Effect.hide, false);
                }
    
                element.addEventListener('mouseup', Effect.hide, false);
                element.addEventListener('mouseleave', Effect.hide, false);
                element.addEventListener('dragend', Effect.hide, false);
            }
        }
    
        Waves.displayEffect = function(options) {
            options = options || {};
    
            if ('duration' in options) {
                Effect.duration = options.duration;
            }
    
            //Wrap input inside <i> tag
            Effect.wrapInput($$('.waves-effect'));
    
            if ('ontouchstart' in window) {
                document.body.addEventListener('touchstart', showEffect, false);
            }
    
            document.body.addEventListener('mousedown', showEffect, false);
        };
    
        /**
         * Attach Waves to an input element (or any element which doesn't
         * bubble mouseup/mousedown events).
         *   Intended to be used with dynamically loaded forms/inputs, or
         * where the user doesn't want a delegated click handler.
         */
        Waves.attach = function(element) {
            //FUTURE: automatically add waves classes and allow users
            // to specify them with an options param? Eg. light/classic/button
            if (element.tagName.toLowerCase() === 'input') {
                Effect.wrapInput([element]);
                element = element.parentNode;
            }
    
            if ('ontouchstart' in window) {
                element.addEventListener('touchstart', showEffect, false);
            }
    
            element.addEventListener('mousedown', showEffect, false);
        };
    
        window.Waves = Waves;
    
        document.addEventListener('DOMContentLoaded', function() {
            Waves.displayEffect();
        }, false);
    
    })(window);
    
    /*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(e,t){"use strict";var n=[],r=e.document,i=Object.getPrototypeOf,o=n.slice,a=n.concat,s=n.push,u=n.indexOf,l={},c=l.toString,f=l.hasOwnProperty,p=f.toString,d=p.call(Object),h={},g=function e(t){return"function"==typeof t&&"number"!=typeof t.nodeType},y=function e(t){return null!=t&&t===t.window},v={type:!0,src:!0,noModule:!0};function m(e,t,n){var i,o=(t=t||r).createElement("script");if(o.text=e,n)for(i in v)n[i]&&(o[i]=n[i]);t.head.appendChild(o).parentNode.removeChild(o)}function x(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?l[c.call(e)]||"object":typeof e}var b="3.3.1",w=function(e,t){return new w.fn.init(e,t)},T=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;w.fn=w.prototype={jquery:"3.3.1",constructor:w,length:0,toArray:function(){return o.call(this)},get:function(e){return null==e?o.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=w.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return w.each(this,e)},map:function(e){return this.pushStack(w.map(this,function(t,n){return e.call(t,n,t)}))},slice:function(){return this.pushStack(o.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(n>=0&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:s,sort:n.sort,splice:n.splice},w.extend=w.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||g(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)n=a[t],a!==(r=e[t])&&(l&&r&&(w.isPlainObject(r)||(i=Array.isArray(r)))?(i?(i=!1,o=n&&Array.isArray(n)?n:[]):o=n&&w.isPlainObject(n)?n:{},a[t]=w.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},w.extend({expando:"jQuery"+("3.3.1"+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==c.call(e))&&(!(t=i(e))||"function"==typeof(n=f.call(t,"constructor")&&t.constructor)&&p.call(n)===d)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e){m(e)},each:function(e,t){var n,r=0;if(C(e)){for(n=e.length;r<n;r++)if(!1===t.call(e[r],r,e[r]))break}else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},trim:function(e){return null==e?"":(e+"").replace(T,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(C(Object(e))?w.merge(n,"string"==typeof e?[e]:e):s.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:u.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r,i=[],o=0,a=e.length,s=!n;o<a;o++)(r=!t(e[o],o))!==s&&i.push(e[o]);return i},map:function(e,t,n){var r,i,o=0,s=[];if(C(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&s.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&s.push(i);return a.apply([],s)},guid:1,support:h}),"function"==typeof Symbol&&(w.fn[Symbol.iterator]=n[Symbol.iterator]),w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){l["[object "+t+"]"]=t.toLowerCase()});function C(e){var t=!!e&&"length"in e&&e.length,n=x(e);return!g(e)&&!y(e)&&("array"===n||0===t||"number"==typeof t&&t>0&&t-1 in e)}var E=function(e){var t,n,r,i,o,a,s,u,l,c,f,p,d,h,g,y,v,m,x,b="sizzle"+1*new Date,w=e.document,T=0,C=0,E=ae(),k=ae(),S=ae(),D=function(e,t){return e===t&&(f=!0),0},N={}.hasOwnProperty,A=[],j=A.pop,q=A.push,L=A.push,H=A.slice,O=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},P="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",R="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",I="\\["+M+"*("+R+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+R+"))|)"+M+"*\\]",W=":("+R+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+I+")*)|.*)\\)|)",$=new RegExp(M+"+","g"),B=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),F=new RegExp("^"+M+"*,"+M+"*"),_=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),z=new RegExp("="+M+"*([^\\]'\"]*?)"+M+"*\\]","g"),X=new RegExp(W),U=new RegExp("^"+R+"$"),V={ID:new RegExp("^#("+R+")"),CLASS:new RegExp("^\\.("+R+")"),TAG:new RegExp("^("+R+"|[*])"),ATTR:new RegExp("^"+I),PSEUDO:new RegExp("^"+W),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+P+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},G=/^(?:input|select|textarea|button)$/i,Y=/^h\d$/i,Q=/^[^{]+\{\s*\[native \w/,J=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,K=/[+~]/,Z=new RegExp("\\\\([\\da-f]{1,6}"+M+"?|("+M+")|.)","ig"),ee=function(e,t,n){var r="0x"+t-65536;return r!==r||n?t:r<0?String.fromCharCode(r+65536):String.fromCharCode(r>>10|55296,1023&r|56320)},te=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ne=function(e,t){return t?"\0"===e?"\ufffd":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},re=function(){p()},ie=me(function(e){return!0===e.disabled&&("form"in e||"label"in e)},{dir:"parentNode",next:"legend"});try{L.apply(A=H.call(w.childNodes),w.childNodes),A[w.childNodes.length].nodeType}catch(e){L={apply:A.length?function(e,t){q.apply(e,H.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function oe(e,t,r,i){var o,s,l,c,f,h,v,m=t&&t.ownerDocument,T=t?t.nodeType:9;if(r=r||[],"string"!=typeof e||!e||1!==T&&9!==T&&11!==T)return r;if(!i&&((t?t.ownerDocument||t:w)!==d&&p(t),t=t||d,g)){if(11!==T&&(f=J.exec(e)))if(o=f[1]){if(9===T){if(!(l=t.getElementById(o)))return r;if(l.id===o)return r.push(l),r}else if(m&&(l=m.getElementById(o))&&x(t,l)&&l.id===o)return r.push(l),r}else{if(f[2])return L.apply(r,t.getElementsByTagName(e)),r;if((o=f[3])&&n.getElementsByClassName&&t.getElementsByClassName)return L.apply(r,t.getElementsByClassName(o)),r}if(n.qsa&&!S[e+" "]&&(!y||!y.test(e))){if(1!==T)m=t,v=e;else if("object"!==t.nodeName.toLowerCase()){(c=t.getAttribute("id"))?c=c.replace(te,ne):t.setAttribute("id",c=b),s=(h=a(e)).length;while(s--)h[s]="#"+c+" "+ve(h[s]);v=h.join(","),m=K.test(e)&&ge(t.parentNode)||t}if(v)try{return L.apply(r,m.querySelectorAll(v)),r}catch(e){}finally{c===b&&t.removeAttribute("id")}}}return u(e.replace(B,"$1"),t,r,i)}function ae(){var e=[];function t(n,i){return e.push(n+" ")>r.cacheLength&&delete t[e.shift()],t[n+" "]=i}return t}function se(e){return e[b]=!0,e}function ue(e){var t=d.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function le(e,t){var n=e.split("|"),i=n.length;while(i--)r.attrHandle[n[i]]=t}function ce(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function fe(e){return function(t){return"input"===t.nodeName.toLowerCase()&&t.type===e}}function pe(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function de(e){return function(t){return"form"in t?t.parentNode&&!1===t.disabled?"label"in t?"label"in t.parentNode?t.parentNode.disabled===e:t.disabled===e:t.isDisabled===e||t.isDisabled!==!e&&ie(t)===e:t.disabled===e:"label"in t&&t.disabled===e}}function he(e){return se(function(t){return t=+t,se(function(n,r){var i,o=e([],n.length,t),a=o.length;while(a--)n[i=o[a]]&&(n[i]=!(r[i]=n[i]))})})}function ge(e){return e&&"undefined"!=typeof e.getElementsByTagName&&e}n=oe.support={},o=oe.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return!!t&&"HTML"!==t.nodeName},p=oe.setDocument=function(e){var t,i,a=e?e.ownerDocument||e:w;return a!==d&&9===a.nodeType&&a.documentElement?(d=a,h=d.documentElement,g=!o(d),w!==d&&(i=d.defaultView)&&i.top!==i&&(i.addEventListener?i.addEventListener("unload",re,!1):i.attachEvent&&i.attachEvent("onunload",re)),n.attributes=ue(function(e){return e.className="i",!e.getAttribute("className")}),n.getElementsByTagName=ue(function(e){return e.appendChild(d.createComment("")),!e.getElementsByTagName("*").length}),n.getElementsByClassName=Q.test(d.getElementsByClassName),n.getById=ue(function(e){return h.appendChild(e).id=b,!d.getElementsByName||!d.getElementsByName(b).length}),n.getById?(r.filter.ID=function(e){var t=e.replace(Z,ee);return function(e){return e.getAttribute("id")===t}},r.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&g){var n=t.getElementById(e);return n?[n]:[]}}):(r.filter.ID=function(e){var t=e.replace(Z,ee);return function(e){var n="undefined"!=typeof e.getAttributeNode&&e.getAttributeNode("id");return n&&n.value===t}},r.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&g){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];i=t.getElementsByName(e),r=0;while(o=i[r++])if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),r.find.TAG=n.getElementsByTagName?function(e,t){return"undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e):n.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},r.find.CLASS=n.getElementsByClassName&&function(e,t){if("undefined"!=typeof t.getElementsByClassName&&g)return t.getElementsByClassName(e)},v=[],y=[],(n.qsa=Q.test(d.querySelectorAll))&&(ue(function(e){h.appendChild(e).innerHTML="<a id='"+b+"'></a><select id='"+b+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&y.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||y.push("\\["+M+"*(?:value|"+P+")"),e.querySelectorAll("[id~="+b+"-]").length||y.push("~="),e.querySelectorAll(":checked").length||y.push(":checked"),e.querySelectorAll("a#"+b+"+*").length||y.push(".#.+[+~]")}),ue(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=d.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&y.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&y.push(":enabled",":disabled"),h.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&y.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),y.push(",.*:")})),(n.matchesSelector=Q.test(m=h.matches||h.webkitMatchesSelector||h.mozMatchesSelector||h.oMatchesSelector||h.msMatchesSelector))&&ue(function(e){n.disconnectedMatch=m.call(e,"*"),m.call(e,"[s!='']:x"),v.push("!=",W)}),y=y.length&&new RegExp(y.join("|")),v=v.length&&new RegExp(v.join("|")),t=Q.test(h.compareDocumentPosition),x=t||Q.test(h.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},D=t?function(e,t){if(e===t)return f=!0,0;var r=!e.compareDocumentPosition-!t.compareDocumentPosition;return r||(1&(r=(e.ownerDocument||e)===(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!n.sortDetached&&t.compareDocumentPosition(e)===r?e===d||e.ownerDocument===w&&x(w,e)?-1:t===d||t.ownerDocument===w&&x(w,t)?1:c?O(c,e)-O(c,t):0:4&r?-1:1)}:function(e,t){if(e===t)return f=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e===d?-1:t===d?1:i?-1:o?1:c?O(c,e)-O(c,t):0;if(i===o)return ce(e,t);n=e;while(n=n.parentNode)a.unshift(n);n=t;while(n=n.parentNode)s.unshift(n);while(a[r]===s[r])r++;return r?ce(a[r],s[r]):a[r]===w?-1:s[r]===w?1:0},d):d},oe.matches=function(e,t){return oe(e,null,null,t)},oe.matchesSelector=function(e,t){if((e.ownerDocument||e)!==d&&p(e),t=t.replace(z,"='$1']"),n.matchesSelector&&g&&!S[t+" "]&&(!v||!v.test(t))&&(!y||!y.test(t)))try{var r=m.call(e,t);if(r||n.disconnectedMatch||e.document&&11!==e.document.nodeType)return r}catch(e){}return oe(t,d,null,[e]).length>0},oe.contains=function(e,t){return(e.ownerDocument||e)!==d&&p(e),x(e,t)},oe.attr=function(e,t){(e.ownerDocument||e)!==d&&p(e);var i=r.attrHandle[t.toLowerCase()],o=i&&N.call(r.attrHandle,t.toLowerCase())?i(e,t,!g):void 0;return void 0!==o?o:n.attributes||!g?e.getAttribute(t):(o=e.getAttributeNode(t))&&o.specified?o.value:null},oe.escape=function(e){return(e+"").replace(te,ne)},oe.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},oe.uniqueSort=function(e){var t,r=[],i=0,o=0;if(f=!n.detectDuplicates,c=!n.sortStable&&e.slice(0),e.sort(D),f){while(t=e[o++])t===e[o]&&(i=r.push(o));while(i--)e.splice(r[i],1)}return c=null,e},i=oe.getText=function(e){var t,n="",r=0,o=e.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=i(e)}else if(3===o||4===o)return e.nodeValue}else while(t=e[r++])n+=i(t);return n},(r=oe.selectors={cacheLength:50,createPseudo:se,match:V,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(Z,ee),e[3]=(e[3]||e[4]||e[5]||"").replace(Z,ee),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||oe.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&oe.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return V.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=a(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(Z,ee).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=E[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&E(e,function(e){return t.test("string"==typeof e.className&&e.className||"undefined"!=typeof e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(e,t,n){return function(r){var i=oe.attr(r,e);return null==i?"!="===t:!t||(i+="","="===t?i===n:"!="===t?i!==n:"^="===t?n&&0===i.indexOf(n):"*="===t?n&&i.indexOf(n)>-1:"$="===t?n&&i.slice(-n.length)===n:"~="===t?(" "+i.replace($," ")+" ").indexOf(n)>-1:"|="===t&&(i===n||i.slice(0,n.length+1)===n+"-"))}},CHILD:function(e,t,n,r,i){var o="nth"!==e.slice(0,3),a="last"!==e.slice(-4),s="of-type"===t;return 1===r&&0===i?function(e){return!!e.parentNode}:function(t,n,u){var l,c,f,p,d,h,g=o!==a?"nextSibling":"previousSibling",y=t.parentNode,v=s&&t.nodeName.toLowerCase(),m=!u&&!s,x=!1;if(y){if(o){while(g){p=t;while(p=p[g])if(s?p.nodeName.toLowerCase()===v:1===p.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[a?y.firstChild:y.lastChild],a&&m){x=(d=(l=(c=(f=(p=y)[b]||(p[b]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]||[])[0]===T&&l[1])&&l[2],p=d&&y.childNodes[d];while(p=++d&&p&&p[g]||(x=d=0)||h.pop())if(1===p.nodeType&&++x&&p===t){c[e]=[T,d,x];break}}else if(m&&(x=d=(l=(c=(f=(p=t)[b]||(p[b]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]||[])[0]===T&&l[1]),!1===x)while(p=++d&&p&&p[g]||(x=d=0)||h.pop())if((s?p.nodeName.toLowerCase()===v:1===p.nodeType)&&++x&&(m&&((c=(f=p[b]||(p[b]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]=[T,x]),p===t))break;return(x-=i)===r||x%r==0&&x/r>=0}}},PSEUDO:function(e,t){var n,i=r.pseudos[e]||r.setFilters[e.toLowerCase()]||oe.error("unsupported pseudo: "+e);return i[b]?i(t):i.length>1?(n=[e,e,"",t],r.setFilters.hasOwnProperty(e.toLowerCase())?se(function(e,n){var r,o=i(e,t),a=o.length;while(a--)e[r=O(e,o[a])]=!(n[r]=o[a])}):function(e){return i(e,0,n)}):i}},pseudos:{not:se(function(e){var t=[],n=[],r=s(e.replace(B,"$1"));return r[b]?se(function(e,t,n,i){var o,a=r(e,null,i,[]),s=e.length;while(s--)(o=a[s])&&(e[s]=!(t[s]=o))}):function(e,i,o){return t[0]=e,r(t,null,o,n),t[0]=null,!n.pop()}}),has:se(function(e){return function(t){return oe(e,t).length>0}}),contains:se(function(e){return e=e.replace(Z,ee),function(t){return(t.textContent||t.innerText||i(t)).indexOf(e)>-1}}),lang:se(function(e){return U.test(e||"")||oe.error("unsupported lang: "+e),e=e.replace(Z,ee).toLowerCase(),function(t){var n;do{if(n=g?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return(n=n.toLowerCase())===e||0===n.indexOf(e+"-")}while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===h},focus:function(e){return e===d.activeElement&&(!d.hasFocus||d.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:de(!1),disabled:de(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!r.pseudos.empty(e)},header:function(e){return Y.test(e.nodeName)},input:function(e){return G.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:he(function(){return[0]}),last:he(function(e,t){return[t-1]}),eq:he(function(e,t,n){return[n<0?n+t:n]}),even:he(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:he(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:he(function(e,t,n){for(var r=n<0?n+t:n;--r>=0;)e.push(r);return e}),gt:he(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=r.pseudos.eq;for(t in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})r.pseudos[t]=fe(t);for(t in{submit:!0,reset:!0})r.pseudos[t]=pe(t);function ye(){}ye.prototype=r.filters=r.pseudos,r.setFilters=new ye,a=oe.tokenize=function(e,t){var n,i,o,a,s,u,l,c=k[e+" "];if(c)return t?0:c.slice(0);s=e,u=[],l=r.preFilter;while(s){n&&!(i=F.exec(s))||(i&&(s=s.slice(i[0].length)||s),u.push(o=[])),n=!1,(i=_.exec(s))&&(n=i.shift(),o.push({value:n,type:i[0].replace(B," ")}),s=s.slice(n.length));for(a in r.filter)!(i=V[a].exec(s))||l[a]&&!(i=l[a](i))||(n=i.shift(),o.push({value:n,type:a,matches:i}),s=s.slice(n.length));if(!n)break}return t?s.length:s?oe.error(e):k(e,u).slice(0)};function ve(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function me(e,t,n){var r=t.dir,i=t.next,o=i||r,a=n&&"parentNode"===o,s=C++;return t.first?function(t,n,i){while(t=t[r])if(1===t.nodeType||a)return e(t,n,i);return!1}:function(t,n,u){var l,c,f,p=[T,s];if(u){while(t=t[r])if((1===t.nodeType||a)&&e(t,n,u))return!0}else while(t=t[r])if(1===t.nodeType||a)if(f=t[b]||(t[b]={}),c=f[t.uniqueID]||(f[t.uniqueID]={}),i&&i===t.nodeName.toLowerCase())t=t[r]||t;else{if((l=c[o])&&l[0]===T&&l[1]===s)return p[2]=l[2];if(c[o]=p,p[2]=e(t,n,u))return!0}return!1}}function xe(e){return e.length>1?function(t,n,r){var i=e.length;while(i--)if(!e[i](t,n,r))return!1;return!0}:e[0]}function be(e,t,n){for(var r=0,i=t.length;r<i;r++)oe(e,t[r],n);return n}function we(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Te(e,t,n,r,i,o){return r&&!r[b]&&(r=Te(r)),i&&!i[b]&&(i=Te(i,o)),se(function(o,a,s,u){var l,c,f,p=[],d=[],h=a.length,g=o||be(t||"*",s.nodeType?[s]:s,[]),y=!e||!o&&t?g:we(g,p,e,s,u),v=n?i||(o?e:h||r)?[]:a:y;if(n&&n(y,v,s,u),r){l=we(v,d),r(l,[],s,u),c=l.length;while(c--)(f=l[c])&&(v[d[c]]=!(y[d[c]]=f))}if(o){if(i||e){if(i){l=[],c=v.length;while(c--)(f=v[c])&&l.push(y[c]=f);i(null,v=[],l,u)}c=v.length;while(c--)(f=v[c])&&(l=i?O(o,f):p[c])>-1&&(o[l]=!(a[l]=f))}}else v=we(v===a?v.splice(h,v.length):v),i?i(null,a,v,u):L.apply(a,v)})}function Ce(e){for(var t,n,i,o=e.length,a=r.relative[e[0].type],s=a||r.relative[" "],u=a?1:0,c=me(function(e){return e===t},s,!0),f=me(function(e){return O(t,e)>-1},s,!0),p=[function(e,n,r){var i=!a&&(r||n!==l)||((t=n).nodeType?c(e,n,r):f(e,n,r));return t=null,i}];u<o;u++)if(n=r.relative[e[u].type])p=[me(xe(p),n)];else{if((n=r.filter[e[u].type].apply(null,e[u].matches))[b]){for(i=++u;i<o;i++)if(r.relative[e[i].type])break;return Te(u>1&&xe(p),u>1&&ve(e.slice(0,u-1).concat({value:" "===e[u-2].type?"*":""})).replace(B,"$1"),n,u<i&&Ce(e.slice(u,i)),i<o&&Ce(e=e.slice(i)),i<o&&ve(e))}p.push(n)}return xe(p)}function Ee(e,t){var n=t.length>0,i=e.length>0,o=function(o,a,s,u,c){var f,h,y,v=0,m="0",x=o&&[],b=[],w=l,C=o||i&&r.find.TAG("*",c),E=T+=null==w?1:Math.random()||.1,k=C.length;for(c&&(l=a===d||a||c);m!==k&&null!=(f=C[m]);m++){if(i&&f){h=0,a||f.ownerDocument===d||(p(f),s=!g);while(y=e[h++])if(y(f,a||d,s)){u.push(f);break}c&&(T=E)}n&&((f=!y&&f)&&v--,o&&x.push(f))}if(v+=m,n&&m!==v){h=0;while(y=t[h++])y(x,b,a,s);if(o){if(v>0)while(m--)x[m]||b[m]||(b[m]=j.call(u));b=we(b)}L.apply(u,b),c&&!o&&b.length>0&&v+t.length>1&&oe.uniqueSort(u)}return c&&(T=E,l=w),x};return n?se(o):o}return s=oe.compile=function(e,t){var n,r=[],i=[],o=S[e+" "];if(!o){t||(t=a(e)),n=t.length;while(n--)(o=Ce(t[n]))[b]?r.push(o):i.push(o);(o=S(e,Ee(i,r))).selector=e}return o},u=oe.select=function(e,t,n,i){var o,u,l,c,f,p="function"==typeof e&&e,d=!i&&a(e=p.selector||e);if(n=n||[],1===d.length){if((u=d[0]=d[0].slice(0)).length>2&&"ID"===(l=u[0]).type&&9===t.nodeType&&g&&r.relative[u[1].type]){if(!(t=(r.find.ID(l.matches[0].replace(Z,ee),t)||[])[0]))return n;p&&(t=t.parentNode),e=e.slice(u.shift().value.length)}o=V.needsContext.test(e)?0:u.length;while(o--){if(l=u[o],r.relative[c=l.type])break;if((f=r.find[c])&&(i=f(l.matches[0].replace(Z,ee),K.test(u[0].type)&&ge(t.parentNode)||t))){if(u.splice(o,1),!(e=i.length&&ve(u)))return L.apply(n,i),n;break}}}return(p||s(e,d))(i,t,!g,n,!t||K.test(e)&&ge(t.parentNode)||t),n},n.sortStable=b.split("").sort(D).join("")===b,n.detectDuplicates=!!f,p(),n.sortDetached=ue(function(e){return 1&e.compareDocumentPosition(d.createElement("fieldset"))}),ue(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||le("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),n.attributes&&ue(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||le("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ue(function(e){return null==e.getAttribute("disabled")})||le(P,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),oe}(e);w.find=E,w.expr=E.selectors,w.expr[":"]=w.expr.pseudos,w.uniqueSort=w.unique=E.uniqueSort,w.text=E.getText,w.isXMLDoc=E.isXML,w.contains=E.contains,w.escapeSelector=E.escape;var k=function(e,t,n){var r=[],i=void 0!==n;while((e=e[t])&&9!==e.nodeType)if(1===e.nodeType){if(i&&w(e).is(n))break;r.push(e)}return r},S=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},D=w.expr.match.needsContext;function N(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var A=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function j(e,t,n){return g(t)?w.grep(e,function(e,r){return!!t.call(e,r,e)!==n}):t.nodeType?w.grep(e,function(e){return e===t!==n}):"string"!=typeof t?w.grep(e,function(e){return u.call(t,e)>-1!==n}):w.filter(t,e,n)}w.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?w.find.matchesSelector(r,e)?[r]:[]:w.find.matches(e,w.grep(t,function(e){return 1===e.nodeType}))},w.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(w(e).filter(function(){for(t=0;t<r;t++)if(w.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)w.find(e,i[t],n);return r>1?w.uniqueSort(n):n},filter:function(e){return this.pushStack(j(this,e||[],!1))},not:function(e){return this.pushStack(j(this,e||[],!0))},is:function(e){return!!j(this,"string"==typeof e&&D.test(e)?w(e):e||[],!1).length}});var q,L=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(w.fn.init=function(e,t,n){var i,o;if(!e)return this;if(n=n||q,"string"==typeof e){if(!(i="<"===e[0]&&">"===e[e.length-1]&&e.length>=3?[null,e,null]:L.exec(e))||!i[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(i[1]){if(t=t instanceof w?t[0]:t,w.merge(this,w.parseHTML(i[1],t&&t.nodeType?t.ownerDocument||t:r,!0)),A.test(i[1])&&w.isPlainObject(t))for(i in t)g(this[i])?this[i](t[i]):this.attr(i,t[i]);return this}return(o=r.getElementById(i[2]))&&(this[0]=o,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):g(e)?void 0!==n.ready?n.ready(e):e(w):w.makeArray(e,this)}).prototype=w.fn,q=w(r);var H=/^(?:parents|prev(?:Until|All))/,O={children:!0,contents:!0,next:!0,prev:!0};w.fn.extend({has:function(e){var t=w(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(w.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&w(e);if(!D.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?a.index(n)>-1:1===n.nodeType&&w.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(o.length>1?w.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?u.call(w(e),this[0]):u.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(w.uniqueSort(w.merge(this.get(),w(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}});function P(e,t){while((e=e[t])&&1!==e.nodeType);return e}w.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return k(e,"parentNode")},parentsUntil:function(e,t,n){return k(e,"parentNode",n)},next:function(e){return P(e,"nextSibling")},prev:function(e){return P(e,"previousSibling")},nextAll:function(e){return k(e,"nextSibling")},prevAll:function(e){return k(e,"previousSibling")},nextUntil:function(e,t,n){return k(e,"nextSibling",n)},prevUntil:function(e,t,n){return k(e,"previousSibling",n)},siblings:function(e){return S((e.parentNode||{}).firstChild,e)},children:function(e){return S(e.firstChild)},contents:function(e){return N(e,"iframe")?e.contentDocument:(N(e,"template")&&(e=e.content||e),w.merge([],e.childNodes))}},function(e,t){w.fn[e]=function(n,r){var i=w.map(this,t,n);return"Until"!==e.slice(-5)&&(r=n),r&&"string"==typeof r&&(i=w.filter(r,i)),this.length>1&&(O[e]||w.uniqueSort(i),H.test(e)&&i.reverse()),this.pushStack(i)}});var M=/[^\x20\t\r\n\f]+/g;function R(e){var t={};return w.each(e.match(M)||[],function(e,n){t[n]=!0}),t}w.Callbacks=function(e){e="string"==typeof e?R(e):w.extend({},e);var t,n,r,i,o=[],a=[],s=-1,u=function(){for(i=i||e.once,r=t=!0;a.length;s=-1){n=a.shift();while(++s<o.length)!1===o[s].apply(n[0],n[1])&&e.stopOnFalse&&(s=o.length,n=!1)}e.memory||(n=!1),t=!1,i&&(o=n?[]:"")},l={add:function(){return o&&(n&&!t&&(s=o.length-1,a.push(n)),function t(n){w.each(n,function(n,r){g(r)?e.unique&&l.has(r)||o.push(r):r&&r.length&&"string"!==x(r)&&t(r)})}(arguments),n&&!t&&u()),this},remove:function(){return w.each(arguments,function(e,t){var n;while((n=w.inArray(t,o,n))>-1)o.splice(n,1),n<=s&&s--}),this},has:function(e){return e?w.inArray(e,o)>-1:o.length>0},empty:function(){return o&&(o=[]),this},disable:function(){return i=a=[],o=n="",this},disabled:function(){return!o},lock:function(){return i=a=[],n||t||(o=n=""),this},locked:function(){return!!i},fireWith:function(e,n){return i||(n=[e,(n=n||[]).slice?n.slice():n],a.push(n),t||u()),this},fire:function(){return l.fireWith(this,arguments),this},fired:function(){return!!r}};return l};function I(e){return e}function W(e){throw e}function $(e,t,n,r){var i;try{e&&g(i=e.promise)?i.call(e).done(t).fail(n):e&&g(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}w.extend({Deferred:function(t){var n=[["notify","progress",w.Callbacks("memory"),w.Callbacks("memory"),2],["resolve","done",w.Callbacks("once memory"),w.Callbacks("once memory"),0,"resolved"],["reject","fail",w.Callbacks("once memory"),w.Callbacks("once memory"),1,"rejected"]],r="pending",i={state:function(){return r},always:function(){return o.done(arguments).fail(arguments),this},"catch":function(e){return i.then(null,e)},pipe:function(){var e=arguments;return w.Deferred(function(t){w.each(n,function(n,r){var i=g(e[r[4]])&&e[r[4]];o[r[1]](function(){var e=i&&i.apply(this,arguments);e&&g(e.promise)?e.promise().progress(t.notify).done(t.resolve).fail(t.reject):t[r[0]+"With"](this,i?[e]:arguments)})}),e=null}).promise()},then:function(t,r,i){var o=0;function a(t,n,r,i){return function(){var s=this,u=arguments,l=function(){var e,l;if(!(t<o)){if((e=r.apply(s,u))===n.promise())throw new TypeError("Thenable self-resolution");l=e&&("object"==typeof e||"function"==typeof e)&&e.then,g(l)?i?l.call(e,a(o,n,I,i),a(o,n,W,i)):(o++,l.call(e,a(o,n,I,i),a(o,n,W,i),a(o,n,I,n.notifyWith))):(r!==I&&(s=void 0,u=[e]),(i||n.resolveWith)(s,u))}},c=i?l:function(){try{l()}catch(e){w.Deferred.exceptionHook&&w.Deferred.exceptionHook(e,c.stackTrace),t+1>=o&&(r!==W&&(s=void 0,u=[e]),n.rejectWith(s,u))}};t?c():(w.Deferred.getStackHook&&(c.stackTrace=w.Deferred.getStackHook()),e.setTimeout(c))}}return w.Deferred(function(e){n[0][3].add(a(0,e,g(i)?i:I,e.notifyWith)),n[1][3].add(a(0,e,g(t)?t:I)),n[2][3].add(a(0,e,g(r)?r:W))}).promise()},promise:function(e){return null!=e?w.extend(e,i):i}},o={};return w.each(n,function(e,t){var a=t[2],s=t[5];i[t[1]]=a.add,s&&a.add(function(){r=s},n[3-e][2].disable,n[3-e][3].disable,n[0][2].lock,n[0][3].lock),a.add(t[3].fire),o[t[0]]=function(){return o[t[0]+"With"](this===o?void 0:this,arguments),this},o[t[0]+"With"]=a.fireWith}),i.promise(o),t&&t.call(o,o),o},when:function(e){var t=arguments.length,n=t,r=Array(n),i=o.call(arguments),a=w.Deferred(),s=function(e){return function(n){r[e]=this,i[e]=arguments.length>1?o.call(arguments):n,--t||a.resolveWith(r,i)}};if(t<=1&&($(e,a.done(s(n)).resolve,a.reject,!t),"pending"===a.state()||g(i[n]&&i[n].then)))return a.then();while(n--)$(i[n],s(n),a.reject);return a.promise()}});var B=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;w.Deferred.exceptionHook=function(t,n){e.console&&e.console.warn&&t&&B.test(t.name)&&e.console.warn("jQuery.Deferred exception: "+t.message,t.stack,n)},w.readyException=function(t){e.setTimeout(function(){throw t})};var F=w.Deferred();w.fn.ready=function(e){return F.then(e)["catch"](function(e){w.readyException(e)}),this},w.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--w.readyWait:w.isReady)||(w.isReady=!0,!0!==e&&--w.readyWait>0||F.resolveWith(r,[w]))}}),w.ready.then=F.then;function _(){r.removeEventListener("DOMContentLoaded",_),e.removeEventListener("load",_),w.ready()}"complete"===r.readyState||"loading"!==r.readyState&&!r.documentElement.doScroll?e.setTimeout(w.ready):(r.addEventListener("DOMContentLoaded",_),e.addEventListener("load",_));var z=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===x(n)){i=!0;for(s in n)z(e,t,s,n[s],!0,o,a)}else if(void 0!==r&&(i=!0,g(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(w(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},X=/^-ms-/,U=/-([a-z])/g;function V(e,t){return t.toUpperCase()}function G(e){return e.replace(X,"ms-").replace(U,V)}var Y=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function Q(){this.expando=w.expando+Q.uid++}Q.uid=1,Q.prototype={cache:function(e){var t=e[this.expando];return t||(t={},Y(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[G(t)]=n;else for(r in t)i[G(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][G(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(G):(t=G(t))in r?[t]:t.match(M)||[]).length;while(n--)delete r[t[n]]}(void 0===t||w.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!w.isEmptyObject(t)}};var J=new Q,K=new Q,Z=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,ee=/[A-Z]/g;function te(e){return"true"===e||"false"!==e&&("null"===e?null:e===+e+""?+e:Z.test(e)?JSON.parse(e):e)}function ne(e,t,n){var r;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(ee,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n=te(n)}catch(e){}K.set(e,t,n)}else n=void 0;return n}w.extend({hasData:function(e){return K.hasData(e)||J.hasData(e)},data:function(e,t,n){return K.access(e,t,n)},removeData:function(e,t){K.remove(e,t)},_data:function(e,t,n){return J.access(e,t,n)},_removeData:function(e,t){J.remove(e,t)}}),w.fn.extend({data:function(e,t){var n,r,i,o=this[0],a=o&&o.attributes;if(void 0===e){if(this.length&&(i=K.get(o),1===o.nodeType&&!J.get(o,"hasDataAttrs"))){n=a.length;while(n--)a[n]&&0===(r=a[n].name).indexOf("data-")&&(r=G(r.slice(5)),ne(o,r,i[r]));J.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof e?this.each(function(){K.set(this,e)}):z(this,function(t){var n;if(o&&void 0===t){if(void 0!==(n=K.get(o,e)))return n;if(void 0!==(n=ne(o,e)))return n}else this.each(function(){K.set(this,e,t)})},null,t,arguments.length>1,null,!0)},removeData:function(e){return this.each(function(){K.remove(this,e)})}}),w.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=J.get(e,t),n&&(!r||Array.isArray(n)?r=J.access(e,t,w.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=w.queue(e,t),r=n.length,i=n.shift(),o=w._queueHooks(e,t),a=function(){w.dequeue(e,t)};"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,a,o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return J.get(e,n)||J.access(e,n,{empty:w.Callbacks("once memory").add(function(){J.remove(e,[t+"queue",n])})})}}),w.fn.extend({queue:function(e,t){var n=2;return"string"!=typeof e&&(t=e,e="fx",n--),arguments.length<n?w.queue(this[0],e):void 0===t?this:this.each(function(){var n=w.queue(this,e,t);w._queueHooks(this,e),"fx"===e&&"inprogress"!==n[0]&&w.dequeue(this,e)})},dequeue:function(e){return this.each(function(){w.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=w.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};"string"!=typeof e&&(t=e,e=void 0),e=e||"fx";while(a--)(n=J.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var re=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,ie=new RegExp("^(?:([+-])=|)("+re+")([a-z%]*)$","i"),oe=["Top","Right","Bottom","Left"],ae=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&w.contains(e.ownerDocument,e)&&"none"===w.css(e,"display")},se=function(e,t,n,r){var i,o,a={};for(o in t)a[o]=e.style[o],e.style[o]=t[o];i=n.apply(e,r||[]);for(o in t)e.style[o]=a[o];return i};function ue(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return w.css(e,t,"")},u=s(),l=n&&n[3]||(w.cssNumber[t]?"":"px"),c=(w.cssNumber[t]||"px"!==l&&+u)&&ie.exec(w.css(e,t));if(c&&c[3]!==l){u/=2,l=l||c[3],c=+u||1;while(a--)w.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,w.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var le={};function ce(e){var t,n=e.ownerDocument,r=e.nodeName,i=le[r];return i||(t=n.body.appendChild(n.createElement(r)),i=w.css(t,"display"),t.parentNode.removeChild(t),"none"===i&&(i="block"),le[r]=i,i)}function fe(e,t){for(var n,r,i=[],o=0,a=e.length;o<a;o++)(r=e[o]).style&&(n=r.style.display,t?("none"===n&&(i[o]=J.get(r,"display")||null,i[o]||(r.style.display="")),""===r.style.display&&ae(r)&&(i[o]=ce(r))):"none"!==n&&(i[o]="none",J.set(r,"display",n)));for(o=0;o<a;o++)null!=i[o]&&(e[o].style.display=i[o]);return e}w.fn.extend({show:function(){return fe(this,!0)},hide:function(){return fe(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){ae(this)?w(this).show():w(this).hide()})}});var pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]+)/i,he=/^$|^module$|\/(?:java|ecma)script/i,ge={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};ge.optgroup=ge.option,ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td;function ye(e,t){var n;return n="undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t||"*"):"undefined"!=typeof e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&N(e,t)?w.merge([e],n):n}function ve(e,t){for(var n=0,r=e.length;n<r;n++)J.set(e[n],"globalEval",!t||J.get(t[n],"globalEval"))}var me=/<|&#?\w+;/;function xe(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===x(o))w.merge(p,o.nodeType?[o]:o);else if(me.test(o)){a=a||f.appendChild(t.createElement("div")),s=(de.exec(o)||["",""])[1].toLowerCase(),u=ge[s]||ge._default,a.innerHTML=u[1]+w.htmlPrefilter(o)+u[2],c=u[0];while(c--)a=a.lastChild;w.merge(p,a.childNodes),(a=f.firstChild).textContent=""}else p.push(t.createTextNode(o));f.textContent="",d=0;while(o=p[d++])if(r&&w.inArray(o,r)>-1)i&&i.push(o);else if(l=w.contains(o.ownerDocument,o),a=ye(f.appendChild(o),"script"),l&&ve(a),n){c=0;while(o=a[c++])he.test(o.type||"")&&n.push(o)}return f}!function(){var e=r.createDocumentFragment().appendChild(r.createElement("div")),t=r.createElement("input");t.setAttribute("type","radio"),t.setAttribute("checked","checked"),t.setAttribute("name","t"),e.appendChild(t),h.checkClone=e.cloneNode(!0).cloneNode(!0).lastChild.checked,e.innerHTML="<textarea>x</textarea>",h.noCloneChecked=!!e.cloneNode(!0).lastChild.defaultValue}();var be=r.documentElement,we=/^key/,Te=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,Ce=/^([^.]*)(?:\.(.+)|)/;function Ee(){return!0}function ke(){return!1}function Se(){try{return r.activeElement}catch(e){}}function De(e,t,n,r,i,o){var a,s;if("object"==typeof t){"string"!=typeof n&&(r=r||n,n=void 0);for(s in t)De(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=ke;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return w().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=w.guid++)),e.each(function(){w.event.add(this,t,i,r,n)})}w.event={global:{},add:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,y=J.get(e);if(y){n.handler&&(n=(o=n).handler,i=o.selector),i&&w.find.matchesSelector(be,i),n.guid||(n.guid=w.guid++),(u=y.events)||(u=y.events={}),(a=y.handle)||(a=y.handle=function(t){return"undefined"!=typeof w&&w.event.triggered!==t.type?w.event.dispatch.apply(e,arguments):void 0}),l=(t=(t||"").match(M)||[""]).length;while(l--)d=g=(s=Ce.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),d&&(f=w.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=w.event.special[d]||{},c=w.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&w.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=u[d])||((p=u[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(e,r,h,a)||e.addEventListener&&e.addEventListener(d,a)),f.add&&(f.add.call(e,c),c.handler.guid||(c.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,c):p.push(c),w.event.global[d]=!0)}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,y=J.hasData(e)&&J.get(e);if(y&&(u=y.events)){l=(t=(t||"").match(M)||[""]).length;while(l--)if(s=Ce.exec(t[l])||[],d=g=s[1],h=(s[2]||"").split(".").sort(),d){f=w.event.special[d]||{},p=u[d=(r?f.delegateType:f.bindType)||d]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=p.length;while(o--)c=p[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(p.splice(o,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(e,c));a&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,y.handle)||w.removeEvent(e,d,y.handle),delete u[d])}else for(d in u)w.event.remove(e,d+t[l],n,r,!0);w.isEmptyObject(u)&&J.remove(e,"handle events")}},dispatch:function(e){var t=w.event.fix(e),n,r,i,o,a,s,u=new Array(arguments.length),l=(J.get(this,"events")||{})[t.type]||[],c=w.event.special[t.type]||{};for(u[0]=t,n=1;n<arguments.length;n++)u[n]=arguments[n];if(t.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,t)){s=w.event.handlers.call(this,t,l),n=0;while((o=s[n++])&&!t.isPropagationStopped()){t.currentTarget=o.elem,r=0;while((a=o.handlers[r++])&&!t.isImmediatePropagationStopped())t.rnamespace&&!t.rnamespace.test(a.namespace)||(t.handleObj=a,t.data=a.data,void 0!==(i=((w.event.special[a.origType]||{}).handle||a.handler).apply(o.elem,u))&&!1===(t.result=i)&&(t.preventDefault(),t.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,t),t.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&e.button>=1))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?w(i,this).index(l)>-1:w.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(e,t){Object.defineProperty(w.Event.prototype,e,{enumerable:!0,configurable:!0,get:g(t)?function(){if(this.originalEvent)return t(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[e]},set:function(t){Object.defineProperty(this,e,{enumerable:!0,configurable:!0,writable:!0,value:t})}})},fix:function(e){return e[w.expando]?e:new w.Event(e)},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==Se()&&this.focus)return this.focus(),!1},delegateType:"focusin"},blur:{trigger:function(){if(this===Se()&&this.blur)return this.blur(),!1},delegateType:"focusout"},click:{trigger:function(){if("checkbox"===this.type&&this.click&&N(this,"input"))return this.click(),!1},_default:function(e){return N(e.target,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},w.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},w.Event=function(e,t){if(!(this instanceof w.Event))return new w.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?Ee:ke,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&w.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[w.expando]=!0},w.Event.prototype={constructor:w.Event,isDefaultPrevented:ke,isPropagationStopped:ke,isImmediatePropagationStopped:ke,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=Ee,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=Ee,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=Ee,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},w.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,"char":!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&we.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&Te.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},w.event.addProp),w.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,t){w.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=this,i=e.relatedTarget,o=e.handleObj;return i&&(i===r||w.contains(r,i))||(e.type=o.origType,n=o.handler.apply(this,arguments),e.type=t),n}}}),w.fn.extend({on:function(e,t,n,r){return De(this,e,t,n,r)},one:function(e,t,n,r){return De(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,w(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=ke),this.each(function(){w.event.remove(this,e,n,t)})}});var Ne=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,Ae=/<script|<style|<link/i,je=/checked\s*(?:[^=]|=\s*.checked.)/i,qe=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function Le(e,t){return N(e,"table")&&N(11!==t.nodeType?t:t.firstChild,"tr")?w(e).children("tbody")[0]||e:e}function He(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function Oe(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Pe(e,t){var n,r,i,o,a,s,u,l;if(1===t.nodeType){if(J.hasData(e)&&(o=J.access(e),a=J.set(t,o),l=o.events)){delete a.handle,a.events={};for(i in l)for(n=0,r=l[i].length;n<r;n++)w.event.add(t,i,l[i][n])}K.hasData(e)&&(s=K.access(e),u=w.extend({},s),K.set(t,u))}}function Me(e,t){var n=t.nodeName.toLowerCase();"input"===n&&pe.test(e.type)?t.checked=e.checked:"input"!==n&&"textarea"!==n||(t.defaultValue=e.defaultValue)}function Re(e,t,n,r){t=a.apply([],t);var i,o,s,u,l,c,f=0,p=e.length,d=p-1,y=t[0],v=g(y);if(v||p>1&&"string"==typeof y&&!h.checkClone&&je.test(y))return e.each(function(i){var o=e.eq(i);v&&(t[0]=y.call(this,i,o.html())),Re(o,t,n,r)});if(p&&(i=xe(t,e[0].ownerDocument,!1,e,r),o=i.firstChild,1===i.childNodes.length&&(i=o),o||r)){for(u=(s=w.map(ye(i,"script"),He)).length;f<p;f++)l=i,f!==d&&(l=w.clone(l,!0,!0),u&&w.merge(s,ye(l,"script"))),n.call(e[f],l,f);if(u)for(c=s[s.length-1].ownerDocument,w.map(s,Oe),f=0;f<u;f++)l=s[f],he.test(l.type||"")&&!J.access(l,"globalEval")&&w.contains(c,l)&&(l.src&&"module"!==(l.type||"").toLowerCase()?w._evalUrl&&w._evalUrl(l.src):m(l.textContent.replace(qe,""),c,l))}return e}function Ie(e,t,n){for(var r,i=t?w.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||w.cleanData(ye(r)),r.parentNode&&(n&&w.contains(r.ownerDocument,r)&&ve(ye(r,"script")),r.parentNode.removeChild(r));return e}w.extend({htmlPrefilter:function(e){return e.replace(Ne,"<$1></$2>")},clone:function(e,t,n){var r,i,o,a,s=e.cloneNode(!0),u=w.contains(e.ownerDocument,e);if(!(h.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||w.isXMLDoc(e)))for(a=ye(s),r=0,i=(o=ye(e)).length;r<i;r++)Me(o[r],a[r]);if(t)if(n)for(o=o||ye(e),a=a||ye(s),r=0,i=o.length;r<i;r++)Pe(o[r],a[r]);else Pe(e,s);return(a=ye(s,"script")).length>0&&ve(a,!u&&ye(e,"script")),s},cleanData:function(e){for(var t,n,r,i=w.event.special,o=0;void 0!==(n=e[o]);o++)if(Y(n)){if(t=n[J.expando]){if(t.events)for(r in t.events)i[r]?w.event.remove(n,r):w.removeEvent(n,r,t.handle);n[J.expando]=void 0}n[K.expando]&&(n[K.expando]=void 0)}}}),w.fn.extend({detach:function(e){return Ie(this,e,!0)},remove:function(e){return Ie(this,e)},text:function(e){return z(this,function(e){return void 0===e?w.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return Re(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||Le(this,e).appendChild(e)})},prepend:function(){return Re(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Le(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return Re(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return Re(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(w.cleanData(ye(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return w.clone(this,e,t)})},html:function(e){return z(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!Ae.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=w.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(w.cleanData(ye(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var e=[];return Re(this,arguments,function(t){var n=this.parentNode;w.inArray(this,e)<0&&(w.cleanData(ye(this)),n&&n.replaceChild(t,this))},e)}}),w.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,t){w.fn[e]=function(e){for(var n,r=[],i=w(e),o=i.length-1,a=0;a<=o;a++)n=a===o?this:this.clone(!0),w(i[a])[t](n),s.apply(r,n.get());return this.pushStack(r)}});var We=new RegExp("^("+re+")(?!px)[a-z%]+$","i"),$e=function(t){var n=t.ownerDocument.defaultView;return n&&n.opener||(n=e),n.getComputedStyle(t)},Be=new RegExp(oe.join("|"),"i");!function(){function t(){if(c){l.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",c.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",be.appendChild(l).appendChild(c);var t=e.getComputedStyle(c);i="1%"!==t.top,u=12===n(t.marginLeft),c.style.right="60%",s=36===n(t.right),o=36===n(t.width),c.style.position="absolute",a=36===c.offsetWidth||"absolute",be.removeChild(l),c=null}}function n(e){return Math.round(parseFloat(e))}var i,o,a,s,u,l=r.createElement("div"),c=r.createElement("div");c.style&&(c.style.backgroundClip="content-box",c.cloneNode(!0).style.backgroundClip="",h.clearCloneStyle="content-box"===c.style.backgroundClip,w.extend(h,{boxSizingReliable:function(){return t(),o},pixelBoxStyles:function(){return t(),s},pixelPosition:function(){return t(),i},reliableMarginLeft:function(){return t(),u},scrollboxSize:function(){return t(),a}}))}();function Fe(e,t,n){var r,i,o,a,s=e.style;return(n=n||$e(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||w.contains(e.ownerDocument,e)||(a=w.style(e,t)),!h.pixelBoxStyles()&&We.test(a)&&Be.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function _e(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}var ze=/^(none|table(?!-c[ea]).+)/,Xe=/^--/,Ue={position:"absolute",visibility:"hidden",display:"block"},Ve={letterSpacing:"0",fontWeight:"400"},Ge=["Webkit","Moz","ms"],Ye=r.createElement("div").style;function Qe(e){if(e in Ye)return e;var t=e[0].toUpperCase()+e.slice(1),n=Ge.length;while(n--)if((e=Ge[n]+t)in Ye)return e}function Je(e){var t=w.cssProps[e];return t||(t=w.cssProps[e]=Qe(e)||e),t}function Ke(e,t,n){var r=ie.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function Ze(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=w.css(e,n+oe[a],!0,i)),r?("content"===n&&(u-=w.css(e,"padding"+oe[a],!0,i)),"margin"!==n&&(u-=w.css(e,"border"+oe[a]+"Width",!0,i))):(u+=w.css(e,"padding"+oe[a],!0,i),"padding"!==n?u+=w.css(e,"border"+oe[a]+"Width",!0,i):s+=w.css(e,"border"+oe[a]+"Width",!0,i));return!r&&o>=0&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))),u}function et(e,t,n){var r=$e(e),i=Fe(e,t,r),o="border-box"===w.css(e,"boxSizing",!1,r),a=o;if(We.test(i)){if(!n)return i;i="auto"}return a=a&&(h.boxSizingReliable()||i===e.style[t]),("auto"===i||!parseFloat(i)&&"inline"===w.css(e,"display",!1,r))&&(i=e["offset"+t[0].toUpperCase()+t.slice(1)],a=!0),(i=parseFloat(i)||0)+Ze(e,t,n||(o?"border":"content"),a,r,i)+"px"}w.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Fe(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=G(t),u=Xe.test(t),l=e.style;if(u||(t=Je(s)),a=w.cssHooks[t]||w.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"==(o=typeof n)&&(i=ie.exec(n))&&i[1]&&(n=ue(e,t,i),o="number"),null!=n&&n===n&&("number"===o&&(n+=i&&i[3]||(w.cssNumber[s]?"":"px")),h.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=G(t);return Xe.test(t)||(t=Je(s)),(a=w.cssHooks[t]||w.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=Fe(e,t,r)),"normal"===i&&t in Ve&&(i=Ve[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),w.each(["height","width"],function(e,t){w.cssHooks[t]={get:function(e,n,r){if(n)return!ze.test(w.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?et(e,t,r):se(e,Ue,function(){return et(e,t,r)})},set:function(e,n,r){var i,o=$e(e),a="border-box"===w.css(e,"boxSizing",!1,o),s=r&&Ze(e,t,r,a,o);return a&&h.scrollboxSize()===o.position&&(s-=Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-parseFloat(o[t])-Ze(e,t,"border",!1,o)-.5)),s&&(i=ie.exec(n))&&"px"!==(i[3]||"px")&&(e.style[t]=n,n=w.css(e,t)),Ke(e,n,s)}}}),w.cssHooks.marginLeft=_e(h.reliableMarginLeft,function(e,t){if(t)return(parseFloat(Fe(e,"marginLeft"))||e.getBoundingClientRect().left-se(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),w.each({margin:"",padding:"",border:"Width"},function(e,t){w.cssHooks[e+t]={expand:function(n){for(var r=0,i={},o="string"==typeof n?n.split(" "):[n];r<4;r++)i[e+oe[r]+t]=o[r]||o[r-2]||o[0];return i}},"margin"!==e&&(w.cssHooks[e+t].set=Ke)}),w.fn.extend({css:function(e,t){return z(this,function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=$e(e),i=t.length;a<i;a++)o[t[a]]=w.css(e,t[a],!1,r);return o}return void 0!==n?w.style(e,t,n):w.css(e,t)},e,t,arguments.length>1)}});function tt(e,t,n,r,i){return new tt.prototype.init(e,t,n,r,i)}w.Tween=tt,tt.prototype={constructor:tt,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||w.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(w.cssNumber[n]?"":"px")},cur:function(){var e=tt.propHooks[this.prop];return e&&e.get?e.get(this):tt.propHooks._default.get(this)},run:function(e){var t,n=tt.propHooks[this.prop];return this.options.duration?this.pos=t=w.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):tt.propHooks._default.set(this),this}},tt.prototype.init.prototype=tt.prototype,tt.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=w.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){w.fx.step[e.prop]?w.fx.step[e.prop](e):1!==e.elem.nodeType||null==e.elem.style[w.cssProps[e.prop]]&&!w.cssHooks[e.prop]?e.elem[e.prop]=e.now:w.style(e.elem,e.prop,e.now+e.unit)}}},tt.propHooks.scrollTop=tt.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},w.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},w.fx=tt.prototype.init,w.fx.step={};var nt,rt,it=/^(?:toggle|show|hide)$/,ot=/queueHooks$/;function at(){rt&&(!1===r.hidden&&e.requestAnimationFrame?e.requestAnimationFrame(at):e.setTimeout(at,w.fx.interval),w.fx.tick())}function st(){return e.setTimeout(function(){nt=void 0}),nt=Date.now()}function ut(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=oe[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function lt(e,t,n){for(var r,i=(pt.tweeners[t]||[]).concat(pt.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function ct(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&ae(e),y=J.get(e,"fxshow");n.queue||(null==(a=w._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,p.always(function(){p.always(function(){a.unqueued--,w.queue(e,"fx").length||a.empty.fire()})}));for(r in t)if(i=t[r],it.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!y||void 0===y[r])continue;g=!0}d[r]=y&&y[r]||w.style(e,r)}if((u=!w.isEmptyObject(t))||!w.isEmptyObject(d)){f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=y&&y.display)&&(l=J.get(e,"display")),"none"===(c=w.css(e,"display"))&&(l?c=l:(fe([e],!0),l=e.style.display||l,c=w.css(e,"display"),fe([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===w.css(e,"float")&&(u||(p.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1;for(r in d)u||(y?"hidden"in y&&(g=y.hidden):y=J.access(e,"fxshow",{display:l}),o&&(y.hidden=!g),g&&fe([e],!0),p.done(function(){g||fe([e]),J.remove(e,"fxshow");for(r in d)w.style(e,r,d[r])})),u=lt(g?y[r]:0,r,p),r in y||(y[r]=u.start,g&&(u.end=u.start,u.start=0))}}function ft(e,t){var n,r,i,o,a;for(n in e)if(r=G(n),i=t[r],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=w.cssHooks[r])&&"expand"in a){o=a.expand(o),delete e[r];for(n in o)n in e||(e[n]=o[n],t[n]=i)}else t[r]=i}function pt(e,t,n){var r,i,o=0,a=pt.prefilters.length,s=w.Deferred().always(function(){delete u.elem}),u=function(){if(i)return!1;for(var t=nt||st(),n=Math.max(0,l.startTime+l.duration-t),r=1-(n/l.duration||0),o=0,a=l.tweens.length;o<a;o++)l.tweens[o].run(r);return s.notifyWith(e,[l,r,n]),r<1&&a?n:(a||s.notifyWith(e,[l,1,0]),s.resolveWith(e,[l]),!1)},l=s.promise({elem:e,props:w.extend({},t),opts:w.extend(!0,{specialEasing:{},easing:w.easing._default},n),originalProperties:t,originalOptions:n,startTime:nt||st(),duration:n.duration,tweens:[],createTween:function(t,n){var r=w.Tween(e,l.opts,t,n,l.opts.specialEasing[t]||l.opts.easing);return l.tweens.push(r),r},stop:function(t){var n=0,r=t?l.tweens.length:0;if(i)return this;for(i=!0;n<r;n++)l.tweens[n].run(1);return t?(s.notifyWith(e,[l,1,0]),s.resolveWith(e,[l,t])):s.rejectWith(e,[l,t]),this}}),c=l.props;for(ft(c,l.opts.specialEasing);o<a;o++)if(r=pt.prefilters[o].call(l,e,c,l.opts))return g(r.stop)&&(w._queueHooks(l.elem,l.opts.queue).stop=r.stop.bind(r)),r;return w.map(c,lt,l),g(l.opts.start)&&l.opts.start.call(e,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),w.fx.timer(w.extend(u,{elem:e,anim:l,queue:l.opts.queue})),l}w.Animation=w.extend(pt,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return ue(n.elem,e,ie.exec(t),n),n}]},tweener:function(e,t){g(e)?(t=e,e=["*"]):e=e.match(M);for(var n,r=0,i=e.length;r<i;r++)n=e[r],pt.tweeners[n]=pt.tweeners[n]||[],pt.tweeners[n].unshift(t)},prefilters:[ct],prefilter:function(e,t){t?pt.prefilters.unshift(e):pt.prefilters.push(e)}}),w.speed=function(e,t,n){var r=e&&"object"==typeof e?w.extend({},e):{complete:n||!n&&t||g(e)&&e,duration:e,easing:n&&t||t&&!g(t)&&t};return w.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in w.fx.speeds?r.duration=w.fx.speeds[r.duration]:r.duration=w.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){g(r.old)&&r.old.call(this),r.queue&&w.dequeue(this,r.queue)},r},w.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ae).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=w.isEmptyObject(e),o=w.speed(t,n,r),a=function(){var t=pt(this,w.extend({},e),o);(i||J.get(this,"finish"))&&t.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(e,t,n){var r=function(e){var t=e.stop;delete e.stop,t(n)};return"string"!=typeof e&&(n=t,t=e,e=void 0),t&&!1!==e&&this.queue(e||"fx",[]),this.each(function(){var t=!0,i=null!=e&&e+"queueHooks",o=w.timers,a=J.get(this);if(i)a[i]&&a[i].stop&&r(a[i]);else for(i in a)a[i]&&a[i].stop&&ot.test(i)&&r(a[i]);for(i=o.length;i--;)o[i].elem!==this||null!=e&&o[i].queue!==e||(o[i].anim.stop(n),t=!1,o.splice(i,1));!t&&n||w.dequeue(this,e)})},finish:function(e){return!1!==e&&(e=e||"fx"),this.each(function(){var t,n=J.get(this),r=n[e+"queue"],i=n[e+"queueHooks"],o=w.timers,a=r?r.length:0;for(n.finish=!0,w.queue(this,e,[]),i&&i.stop&&i.stop.call(this,!0),t=o.length;t--;)o[t].elem===this&&o[t].queue===e&&(o[t].anim.stop(!0),o.splice(t,1));for(t=0;t<a;t++)r[t]&&r[t].finish&&r[t].finish.call(this);delete n.finish})}}),w.each(["toggle","show","hide"],function(e,t){var n=w.fn[t];w.fn[t]=function(e,r,i){return null==e||"boolean"==typeof e?n.apply(this,arguments):this.animate(ut(t,!0),e,r,i)}}),w.each({slideDown:ut("show"),slideUp:ut("hide"),slideToggle:ut("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,t){w.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}}),w.timers=[],w.fx.tick=function(){var e,t=0,n=w.timers;for(nt=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||w.fx.stop(),nt=void 0},w.fx.timer=function(e){w.timers.push(e),w.fx.start()},w.fx.interval=13,w.fx.start=function(){rt||(rt=!0,at())},w.fx.stop=function(){rt=null},w.fx.speeds={slow:600,fast:200,_default:400},w.fn.delay=function(t,n){return t=w.fx?w.fx.speeds[t]||t:t,n=n||"fx",this.queue(n,function(n,r){var i=e.setTimeout(n,t);r.stop=function(){e.clearTimeout(i)}})},function(){var e=r.createElement("input"),t=r.createElement("select").appendChild(r.createElement("option"));e.type="checkbox",h.checkOn=""!==e.value,h.optSelected=t.selected,(e=r.createElement("input")).value="t",e.type="radio",h.radioValue="t"===e.value}();var dt,ht=w.expr.attrHandle;w.fn.extend({attr:function(e,t){return z(this,w.attr,e,t,arguments.length>1)},removeAttr:function(e){return this.each(function(){w.removeAttr(this,e)})}}),w.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof e.getAttribute?w.prop(e,t,n):(1===o&&w.isXMLDoc(e)||(i=w.attrHooks[t.toLowerCase()]||(w.expr.match.bool.test(t)?dt:void 0)),void 0!==n?null===n?void w.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=w.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!h.radioValue&&"radio"===t&&N(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(M);if(i&&1===e.nodeType)while(n=i[r++])e.removeAttribute(n)}}),dt={set:function(e,t,n){return!1===t?w.removeAttr(e,n):e.setAttribute(n,n),n}},w.each(w.expr.match.bool.source.match(/\w+/g),function(e,t){var n=ht[t]||w.find.attr;ht[t]=function(e,t,r){var i,o,a=t.toLowerCase();return r||(o=ht[a],ht[a]=i,i=null!=n(e,t,r)?a:null,ht[a]=o),i}});var gt=/^(?:input|select|textarea|button)$/i,yt=/^(?:a|area)$/i;w.fn.extend({prop:function(e,t){return z(this,w.prop,e,t,arguments.length>1)},removeProp:function(e){return this.each(function(){delete this[w.propFix[e]||e]})}}),w.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&w.isXMLDoc(e)||(t=w.propFix[t]||t,i=w.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=w.find.attr(e,"tabindex");return t?parseInt(t,10):gt.test(e.nodeName)||yt.test(e.nodeName)&&e.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),h.optSelected||(w.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),w.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){w.propFix[this.toLowerCase()]=this});function vt(e){return(e.match(M)||[]).join(" ")}function mt(e){return e.getAttribute&&e.getAttribute("class")||""}function xt(e){return Array.isArray(e)?e:"string"==typeof e?e.match(M)||[]:[]}w.fn.extend({addClass:function(e){var t,n,r,i,o,a,s,u=0;if(g(e))return this.each(function(t){w(this).addClass(e.call(this,t,mt(this)))});if((t=xt(e)).length)while(n=this[u++])if(i=mt(n),r=1===n.nodeType&&" "+vt(i)+" "){a=0;while(o=t[a++])r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=vt(r))&&n.setAttribute("class",s)}return this},removeClass:function(e){var t,n,r,i,o,a,s,u=0;if(g(e))return this.each(function(t){w(this).removeClass(e.call(this,t,mt(this)))});if(!arguments.length)return this.attr("class","");if((t=xt(e)).length)while(n=this[u++])if(i=mt(n),r=1===n.nodeType&&" "+vt(i)+" "){a=0;while(o=t[a++])while(r.indexOf(" "+o+" ")>-1)r=r.replace(" "+o+" "," ");i!==(s=vt(r))&&n.setAttribute("class",s)}return this},toggleClass:function(e,t){var n=typeof e,r="string"===n||Array.isArray(e);return"boolean"==typeof t&&r?t?this.addClass(e):this.removeClass(e):g(e)?this.each(function(n){w(this).toggleClass(e.call(this,n,mt(this),t),t)}):this.each(function(){var t,i,o,a;if(r){i=0,o=w(this),a=xt(e);while(t=a[i++])o.hasClass(t)?o.removeClass(t):o.addClass(t)}else void 0!==e&&"boolean"!==n||((t=mt(this))&&J.set(this,"__className__",t),this.setAttribute&&this.setAttribute("class",t||!1===e?"":J.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;t=" "+e+" ";while(n=this[r++])if(1===n.nodeType&&(" "+vt(mt(n))+" ").indexOf(t)>-1)return!0;return!1}});var bt=/\r/g;w.fn.extend({val:function(e){var t,n,r,i=this[0];{if(arguments.length)return r=g(e),this.each(function(n){var i;1===this.nodeType&&(null==(i=r?e.call(this,n,w(this).val()):e)?i="":"number"==typeof i?i+="":Array.isArray(i)&&(i=w.map(i,function(e){return null==e?"":e+""})),(t=w.valHooks[this.type]||w.valHooks[this.nodeName.toLowerCase()])&&"set"in t&&void 0!==t.set(this,i,"value")||(this.value=i))});if(i)return(t=w.valHooks[i.type]||w.valHooks[i.nodeName.toLowerCase()])&&"get"in t&&void 0!==(n=t.get(i,"value"))?n:"string"==typeof(n=i.value)?n.replace(bt,""):null==n?"":n}}}),w.extend({valHooks:{option:{get:function(e){var t=w.find.attr(e,"value");return null!=t?t:vt(w.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!N(n.parentNode,"optgroup"))){if(t=w(n).val(),a)return t;s.push(t)}return s},set:function(e,t){var n,r,i=e.options,o=w.makeArray(t),a=i.length;while(a--)((r=i[a]).selected=w.inArray(w.valHooks.option.get(r),o)>-1)&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),w.each(["radio","checkbox"],function(){w.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=w.inArray(w(e).val(),t)>-1}},h.checkOn||(w.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),h.focusin="onfocusin"in e;var wt=/^(?:focusinfocus|focusoutblur)$/,Tt=function(e){e.stopPropagation()};w.extend(w.event,{trigger:function(t,n,i,o){var a,s,u,l,c,p,d,h,v=[i||r],m=f.call(t,"type")?t.type:t,x=f.call(t,"namespace")?t.namespace.split("."):[];if(s=h=u=i=i||r,3!==i.nodeType&&8!==i.nodeType&&!wt.test(m+w.event.triggered)&&(m.indexOf(".")>-1&&(m=(x=m.split(".")).shift(),x.sort()),c=m.indexOf(":")<0&&"on"+m,t=t[w.expando]?t:new w.Event(m,"object"==typeof t&&t),t.isTrigger=o?2:3,t.namespace=x.join("."),t.rnamespace=t.namespace?new RegExp("(^|\\.)"+x.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,t.result=void 0,t.target||(t.target=i),n=null==n?[t]:w.makeArray(n,[t]),d=w.event.special[m]||{},o||!d.trigger||!1!==d.trigger.apply(i,n))){if(!o&&!d.noBubble&&!y(i)){for(l=d.delegateType||m,wt.test(l+m)||(s=s.parentNode);s;s=s.parentNode)v.push(s),u=s;u===(i.ownerDocument||r)&&v.push(u.defaultView||u.parentWindow||e)}a=0;while((s=v[a++])&&!t.isPropagationStopped())h=s,t.type=a>1?l:d.bindType||m,(p=(J.get(s,"events")||{})[t.type]&&J.get(s,"handle"))&&p.apply(s,n),(p=c&&s[c])&&p.apply&&Y(s)&&(t.result=p.apply(s,n),!1===t.result&&t.preventDefault());return t.type=m,o||t.isDefaultPrevented()||d._default&&!1!==d._default.apply(v.pop(),n)||!Y(i)||c&&g(i[m])&&!y(i)&&((u=i[c])&&(i[c]=null),w.event.triggered=m,t.isPropagationStopped()&&h.addEventListener(m,Tt),i[m](),t.isPropagationStopped()&&h.removeEventListener(m,Tt),w.event.triggered=void 0,u&&(i[c]=u)),t.result}},simulate:function(e,t,n){var r=w.extend(new w.Event,n,{type:e,isSimulated:!0});w.event.trigger(r,null,t)}}),w.fn.extend({trigger:function(e,t){return this.each(function(){w.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return w.event.trigger(e,t,n,!0)}}),h.focusin||w.each({focus:"focusin",blur:"focusout"},function(e,t){var n=function(e){w.event.simulate(t,e.target,w.event.fix(e))};w.event.special[t]={setup:function(){var r=this.ownerDocument||this,i=J.access(r,t);i||r.addEventListener(e,n,!0),J.access(r,t,(i||0)+1)},teardown:function(){var r=this.ownerDocument||this,i=J.access(r,t)-1;i?J.access(r,t,i):(r.removeEventListener(e,n,!0),J.remove(r,t))}}});var Ct=e.location,Et=Date.now(),kt=/\?/;w.parseXML=function(t){var n;if(!t||"string"!=typeof t)return null;try{n=(new e.DOMParser).parseFromString(t,"text/xml")}catch(e){n=void 0}return n&&!n.getElementsByTagName("parsererror").length||w.error("Invalid XML: "+t),n};var St=/\[\]$/,Dt=/\r?\n/g,Nt=/^(?:submit|button|image|reset|file)$/i,At=/^(?:input|select|textarea|keygen)/i;function jt(e,t,n,r){var i;if(Array.isArray(t))w.each(t,function(t,i){n||St.test(e)?r(e,i):jt(e+"["+("object"==typeof i&&null!=i?t:"")+"]",i,n,r)});else if(n||"object"!==x(t))r(e,t);else for(i in t)jt(e+"["+i+"]",t[i],n,r)}w.param=function(e,t){var n,r=[],i=function(e,t){var n=g(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(Array.isArray(e)||e.jquery&&!w.isPlainObject(e))w.each(e,function(){i(this.name,this.value)});else for(n in e)jt(n,e[n],t,i);return r.join("&")},w.fn.extend({serialize:function(){return w.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=w.prop(this,"elements");return e?w.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!w(this).is(":disabled")&&At.test(this.nodeName)&&!Nt.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=w(this).val();return null==n?null:Array.isArray(n)?w.map(n,function(e){return{name:t.name,value:e.replace(Dt,"\r\n")}}):{name:t.name,value:n.replace(Dt,"\r\n")}}).get()}});var qt=/%20/g,Lt=/#.*$/,Ht=/([?&])_=[^&]*/,Ot=/^(.*?):[ \t]*([^\r\n]*)$/gm,Pt=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Mt=/^(?:GET|HEAD)$/,Rt=/^\/\//,It={},Wt={},$t="*/".concat("*"),Bt=r.createElement("a");Bt.href=Ct.href;function Ft(e){return function(t,n){"string"!=typeof t&&(n=t,t="*");var r,i=0,o=t.toLowerCase().match(M)||[];if(g(n))while(r=o[i++])"+"===r[0]?(r=r.slice(1)||"*",(e[r]=e[r]||[]).unshift(n)):(e[r]=e[r]||[]).push(n)}}function _t(e,t,n,r){var i={},o=e===Wt;function a(s){var u;return i[s]=!0,w.each(e[s]||[],function(e,s){var l=s(t,n,r);return"string"!=typeof l||o||i[l]?o?!(u=l):void 0:(t.dataTypes.unshift(l),a(l),!1)}),u}return a(t.dataTypes[0])||!i["*"]&&a("*")}function zt(e,t){var n,r,i=w.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&w.extend(!0,e,r),e}function Xt(e,t,n){var r,i,o,a,s=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}function Ut(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}w.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Ct.href,type:"GET",isLocal:Pt.test(Ct.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":$t,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":w.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?zt(zt(e,w.ajaxSettings),t):zt(w.ajaxSettings,e)},ajaxPrefilter:Ft(It),ajaxTransport:Ft(Wt),ajax:function(t,n){"object"==typeof t&&(n=t,t=void 0),n=n||{};var i,o,a,s,u,l,c,f,p,d,h=w.ajaxSetup({},n),g=h.context||h,y=h.context&&(g.nodeType||g.jquery)?w(g):w.event,v=w.Deferred(),m=w.Callbacks("once memory"),x=h.statusCode||{},b={},T={},C="canceled",E={readyState:0,getResponseHeader:function(e){var t;if(c){if(!s){s={};while(t=Ot.exec(a))s[t[1].toLowerCase()]=t[2]}t=s[e.toLowerCase()]}return null==t?null:t},getAllResponseHeaders:function(){return c?a:null},setRequestHeader:function(e,t){return null==c&&(e=T[e.toLowerCase()]=T[e.toLowerCase()]||e,b[e]=t),this},overrideMimeType:function(e){return null==c&&(h.mimeType=e),this},statusCode:function(e){var t;if(e)if(c)E.always(e[E.status]);else for(t in e)x[t]=[x[t],e[t]];return this},abort:function(e){var t=e||C;return i&&i.abort(t),k(0,t),this}};if(v.promise(E),h.url=((t||h.url||Ct.href)+"").replace(Rt,Ct.protocol+"//"),h.type=n.method||n.type||h.method||h.type,h.dataTypes=(h.dataType||"*").toLowerCase().match(M)||[""],null==h.crossDomain){l=r.createElement("a");try{l.href=h.url,l.href=l.href,h.crossDomain=Bt.protocol+"//"+Bt.host!=l.protocol+"//"+l.host}catch(e){h.crossDomain=!0}}if(h.data&&h.processData&&"string"!=typeof h.data&&(h.data=w.param(h.data,h.traditional)),_t(It,h,n,E),c)return E;(f=w.event&&h.global)&&0==w.active++&&w.event.trigger("ajaxStart"),h.type=h.type.toUpperCase(),h.hasContent=!Mt.test(h.type),o=h.url.replace(Lt,""),h.hasContent?h.data&&h.processData&&0===(h.contentType||"").indexOf("application/x-www-form-urlencoded")&&(h.data=h.data.replace(qt,"+")):(d=h.url.slice(o.length),h.data&&(h.processData||"string"==typeof h.data)&&(o+=(kt.test(o)?"&":"?")+h.data,delete h.data),!1===h.cache&&(o=o.replace(Ht,"$1"),d=(kt.test(o)?"&":"?")+"_="+Et+++d),h.url=o+d),h.ifModified&&(w.lastModified[o]&&E.setRequestHeader("If-Modified-Since",w.lastModified[o]),w.etag[o]&&E.setRequestHeader("If-None-Match",w.etag[o])),(h.data&&h.hasContent&&!1!==h.contentType||n.contentType)&&E.setRequestHeader("Content-Type",h.contentType),E.setRequestHeader("Accept",h.dataTypes[0]&&h.accepts[h.dataTypes[0]]?h.accepts[h.dataTypes[0]]+("*"!==h.dataTypes[0]?", "+$t+"; q=0.01":""):h.accepts["*"]);for(p in h.headers)E.setRequestHeader(p,h.headers[p]);if(h.beforeSend&&(!1===h.beforeSend.call(g,E,h)||c))return E.abort();if(C="abort",m.add(h.complete),E.done(h.success),E.fail(h.error),i=_t(Wt,h,n,E)){if(E.readyState=1,f&&y.trigger("ajaxSend",[E,h]),c)return E;h.async&&h.timeout>0&&(u=e.setTimeout(function(){E.abort("timeout")},h.timeout));try{c=!1,i.send(b,k)}catch(e){if(c)throw e;k(-1,e)}}else k(-1,"No Transport");function k(t,n,r,s){var l,p,d,b,T,C=n;c||(c=!0,u&&e.clearTimeout(u),i=void 0,a=s||"",E.readyState=t>0?4:0,l=t>=200&&t<300||304===t,r&&(b=Xt(h,E,r)),b=Ut(h,b,E,l),l?(h.ifModified&&((T=E.getResponseHeader("Last-Modified"))&&(w.lastModified[o]=T),(T=E.getResponseHeader("etag"))&&(w.etag[o]=T)),204===t||"HEAD"===h.type?C="nocontent":304===t?C="notmodified":(C=b.state,p=b.data,l=!(d=b.error))):(d=C,!t&&C||(C="error",t<0&&(t=0))),E.status=t,E.statusText=(n||C)+"",l?v.resolveWith(g,[p,C,E]):v.rejectWith(g,[E,C,d]),E.statusCode(x),x=void 0,f&&y.trigger(l?"ajaxSuccess":"ajaxError",[E,h,l?p:d]),m.fireWith(g,[E,C]),f&&(y.trigger("ajaxComplete",[E,h]),--w.active||w.event.trigger("ajaxStop")))}return E},getJSON:function(e,t,n){return w.get(e,t,n,"json")},getScript:function(e,t){return w.get(e,void 0,t,"script")}}),w.each(["get","post"],function(e,t){w[t]=function(e,n,r,i){return g(n)&&(i=i||r,r=n,n=void 0),w.ajax(w.extend({url:e,type:t,dataType:i,data:n,success:r},w.isPlainObject(e)&&e))}}),w._evalUrl=function(e){return w.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,"throws":!0})},w.fn.extend({wrapAll:function(e){var t;return this[0]&&(g(e)&&(e=e.call(this[0])),t=w(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstElementChild)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(e){return g(e)?this.each(function(t){w(this).wrapInner(e.call(this,t))}):this.each(function(){var t=w(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)})},wrap:function(e){var t=g(e);return this.each(function(n){w(this).wrapAll(t?e.call(this,n):e)})},unwrap:function(e){return this.parent(e).not("body").each(function(){w(this).replaceWith(this.childNodes)}),this}}),w.expr.pseudos.hidden=function(e){return!w.expr.pseudos.visible(e)},w.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},w.ajaxSettings.xhr=function(){try{return new e.XMLHttpRequest}catch(e){}};var Vt={0:200,1223:204},Gt=w.ajaxSettings.xhr();h.cors=!!Gt&&"withCredentials"in Gt,h.ajax=Gt=!!Gt,w.ajaxTransport(function(t){var n,r;if(h.cors||Gt&&!t.crossDomain)return{send:function(i,o){var a,s=t.xhr();if(s.open(t.type,t.url,t.async,t.username,t.password),t.xhrFields)for(a in t.xhrFields)s[a]=t.xhrFields[a];t.mimeType&&s.overrideMimeType&&s.overrideMimeType(t.mimeType),t.crossDomain||i["X-Requested-With"]||(i["X-Requested-With"]="XMLHttpRequest");for(a in i)s.setRequestHeader(a,i[a]);n=function(e){return function(){n&&(n=r=s.onload=s.onerror=s.onabort=s.ontimeout=s.onreadystatechange=null,"abort"===e?s.abort():"error"===e?"number"!=typeof s.status?o(0,"error"):o(s.status,s.statusText):o(Vt[s.status]||s.status,s.statusText,"text"!==(s.responseType||"text")||"string"!=typeof s.responseText?{binary:s.response}:{text:s.responseText},s.getAllResponseHeaders()))}},s.onload=n(),r=s.onerror=s.ontimeout=n("error"),void 0!==s.onabort?s.onabort=r:s.onreadystatechange=function(){4===s.readyState&&e.setTimeout(function(){n&&r()})},n=n("abort");try{s.send(t.hasContent&&t.data||null)}catch(e){if(n)throw e}},abort:function(){n&&n()}}}),w.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),w.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return w.globalEval(e),e}}}),w.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),w.ajaxTransport("script",function(e){if(e.crossDomain){var t,n;return{send:function(i,o){t=w("<script>").prop({charset:e.scriptCharset,src:e.url}).on("load error",n=function(e){t.remove(),n=null,e&&o("error"===e.type?404:200,e.type)}),r.head.appendChild(t[0])},abort:function(){n&&n()}}}});var Yt=[],Qt=/(=)\?(?=&|$)|\?\?/;w.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Yt.pop()||w.expando+"_"+Et++;return this[e]=!0,e}}),w.ajaxPrefilter("json jsonp",function(t,n,r){var i,o,a,s=!1!==t.jsonp&&(Qt.test(t.url)?"url":"string"==typeof t.data&&0===(t.contentType||"").indexOf("application/x-www-form-urlencoded")&&Qt.test(t.data)&&"data");if(s||"jsonp"===t.dataTypes[0])return i=t.jsonpCallback=g(t.jsonpCallback)?t.jsonpCallback():t.jsonpCallback,s?t[s]=t[s].replace(Qt,"$1"+i):!1!==t.jsonp&&(t.url+=(kt.test(t.url)?"&":"?")+t.jsonp+"="+i),t.converters["script json"]=function(){return a||w.error(i+" was not called"),a[0]},t.dataTypes[0]="json",o=e[i],e[i]=function(){a=arguments},r.always(function(){void 0===o?w(e).removeProp(i):e[i]=o,t[i]&&(t.jsonpCallback=n.jsonpCallback,Yt.push(i)),a&&g(o)&&o(a[0]),a=o=void 0}),"script"}),h.createHTMLDocument=function(){var e=r.implementation.createHTMLDocument("").body;return e.innerHTML="<form></form><form></form>",2===e.childNodes.length}(),w.parseHTML=function(e,t,n){if("string"!=typeof e)return[];"boolean"==typeof t&&(n=t,t=!1);var i,o,a;return t||(h.createHTMLDocument?((i=(t=r.implementation.createHTMLDocument("")).createElement("base")).href=r.location.href,t.head.appendChild(i)):t=r),o=A.exec(e),a=!n&&[],o?[t.createElement(o[1])]:(o=xe([e],t,a),a&&a.length&&w(a).remove(),w.merge([],o.childNodes))},w.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return s>-1&&(r=vt(e.slice(s)),e=e.slice(0,s)),g(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),a.length>0&&w.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,a.html(r?w("<div>").append(w.parseHTML(e)).find(r):e)}).always(n&&function(e,t){a.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},w.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){w.fn[t]=function(e){return this.on(t,e)}}),w.expr.pseudos.animated=function(e){return w.grep(w.timers,function(t){return e===t.elem}).length},w.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l,c=w.css(e,"position"),f=w(e),p={};"static"===c&&(e.style.position="relative"),s=f.offset(),o=w.css(e,"top"),u=w.css(e,"left"),(l=("absolute"===c||"fixed"===c)&&(o+u).indexOf("auto")>-1)?(a=(r=f.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),g(t)&&(t=t.call(e,n,w.extend({},s))),null!=t.top&&(p.top=t.top-s.top+a),null!=t.left&&(p.left=t.left-s.left+i),"using"in t?t.using.call(e,p):f.css(p)}},w.fn.extend({offset:function(e){if(arguments.length)return void 0===e?this:this.each(function(t){w.offset.setOffset(this,e,t)});var t,n,r=this[0];if(r)return r.getClientRects().length?(t=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:t.top+n.pageYOffset,left:t.left+n.pageXOffset}):{top:0,left:0}},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===w.css(r,"position"))t=r.getBoundingClientRect();else{t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;while(e&&(e===n.body||e===n.documentElement)&&"static"===w.css(e,"position"))e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=w(e).offset()).top+=w.css(e,"borderTopWidth",!0),i.left+=w.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-w.css(r,"marginTop",!0),left:t.left-i.left-w.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent;while(e&&"static"===w.css(e,"position"))e=e.offsetParent;return e||be})}}),w.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,t){var n="pageYOffset"===t;w.fn[e]=function(r){return z(this,function(e,r,i){var o;if(y(e)?o=e:9===e.nodeType&&(o=e.defaultView),void 0===i)return o?o[t]:e[r];o?o.scrollTo(n?o.pageXOffset:i,n?i:o.pageYOffset):e[r]=i},e,r,arguments.length)}}),w.each(["top","left"],function(e,t){w.cssHooks[t]=_e(h.pixelPosition,function(e,n){if(n)return n=Fe(e,t),We.test(n)?w(e).position()[t]+"px":n})}),w.each({Height:"height",Width:"width"},function(e,t){w.each({padding:"inner"+e,content:t,"":"outer"+e},function(n,r){w.fn[r]=function(i,o){var a=arguments.length&&(n||"boolean"!=typeof i),s=n||(!0===i||!0===o?"margin":"border");return z(this,function(t,n,i){var o;return y(t)?0===r.indexOf("outer")?t["inner"+e]:t.document.documentElement["client"+e]:9===t.nodeType?(o=t.documentElement,Math.max(t.body["scroll"+e],o["scroll"+e],t.body["offset"+e],o["offset"+e],o["client"+e])):void 0===i?w.css(t,n,s):w.style(t,n,i,s)},t,a?i:void 0,a)}})}),w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,t){w.fn[t]=function(e,n){return arguments.length>0?this.on(t,null,e,n):this.trigger(t)}}),w.fn.extend({hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),w.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)}}),w.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),g(e))return r=o.call(arguments,2),i=function(){return e.apply(t||this,r.concat(o.call(arguments)))},i.guid=e.guid=e.guid||w.guid++,i},w.holdReady=function(e){e?w.readyWait++:w.ready(!0)},w.isArray=Array.isArray,w.parseJSON=JSON.parse,w.nodeName=N,w.isFunction=g,w.isWindow=y,w.camelCase=G,w.type=x,w.now=Date.now,w.isNumeric=function(e){var t=w.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},"function"==typeof define&&define.amd&&define("jquery",[],function(){return w});var Jt=e.jQuery,Kt=e.$;return w.noConflict=function(t){return e.$===w&&(e.$=Kt),t&&e.jQuery===w&&(e.jQuery=Jt),w},t||(e.jQuery=e.$=w),w});


/* popper JS */
/*
 Copyright (C) Federico Zivolo 2017
 Distributed under the MIT License (license terms are at http://opensource.org/licenses/MIT).
/*
 Copyright (C) Federico Zivolo 2017
 Distributed under the MIT License (license terms are at http://opensource.org/licenses/MIT).


/*!
  * Bootstrap v4.4.1 (https://getbootstrap.com/)
  * Copyright 2011-2019 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
//# sourceMappingURL=bootstrap.min.js.map


/*jquery-slimscroll*/

/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.3.8
 *
 */
(function(e){e.fn.extend({slimScroll:function(f){var a=e.extend({width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},f);this.each(function(){function v(d){if(r){d=d||window.event;
var c=0;d.wheelDelta&&(c=-d.wheelDelta/120);d.detail&&(c=d.detail/3);e(d.target||d.srcTarget||d.srcElement).closest("."+a.wrapperClass).is(b.parent())&&n(c,!0);d.preventDefault&&!k&&d.preventDefault();k||(d.returnValue=!1)}}function n(d,g,e){k=!1;var f=b.outerHeight()-c.outerHeight();g&&(g=parseInt(c.css("top"))+d*parseInt(a.wheelStep)/100*c.outerHeight(),g=Math.min(Math.max(g,0),f),g=0<d?Math.ceil(g):Math.floor(g),c.css({top:g+"px"}));l=parseInt(c.css("top"))/(b.outerHeight()-c.outerHeight());g=
l*(b[0].scrollHeight-b.outerHeight());e&&(g=d,d=g/b[0].scrollHeight*b.outerHeight(),d=Math.min(Math.max(d,0),f),c.css({top:d+"px"}));b.scrollTop(g);b.trigger("slimscrolling",~~g);w();p()}function x(){u=Math.max(b.outerHeight()/b[0].scrollHeight*b.outerHeight(),30);c.css({height:u+"px"});var a=u==b.outerHeight()?"none":"block";c.css({display:a})}function w(){x();clearTimeout(B);l==~~l?(k=a.allowPageScroll,C!=l&&b.trigger("slimscroll",0==~~l?"top":"bottom")):k=!1;C=l;u>=b.outerHeight()?k=!0:(c.stop(!0,
!0).fadeIn("fast"),a.railVisible&&m.stop(!0,!0).fadeIn("fast"))}function p(){a.alwaysVisible||(B=setTimeout(function(){a.disableFadeOut&&r||y||z||(c.fadeOut("slow"),m.fadeOut("slow"))},1E3))}var r,y,z,B,A,u,l,C,k=!1,b=e(this);if(b.parent().hasClass(a.wrapperClass)){var q=b.scrollTop(),c=b.siblings("."+a.barClass),m=b.siblings("."+a.railClass);x();if(e.isPlainObject(f)){if("height"in f&&"auto"==f.height){b.parent().css("height","auto");b.css("height","auto");var h=b.parent().parent().height();b.parent().css("height",
h);b.css("height",h)}else"height"in f&&(h=f.height,b.parent().css("height",h),b.css("height",h));if("scrollTo"in f)q=parseInt(a.scrollTo);else if("scrollBy"in f)q+=parseInt(a.scrollBy);else if("destroy"in f){c.remove();m.remove();b.unwrap();return}n(q,!1,!0)}}else if(!(e.isPlainObject(f)&&"destroy"in f)){a.height="auto"==a.height?b.parent().height():a.height;q=e("<div></div>").addClass(a.wrapperClass).css({position:"relative",overflow:"hidden",width:a.width,height:a.height});b.css({overflow:"hidden",
width:a.width,height:a.height});var m=e("<div></div>").addClass(a.railClass).css({width:a.size,height:"100%",position:"absolute",top:0,display:a.alwaysVisible&&a.railVisible?"block":"none","border-radius":a.railBorderRadius,background:a.railColor,opacity:a.railOpacity,zIndex:90}),c=e("<div></div>").addClass(a.barClass).css({background:a.color,width:a.size,position:"absolute",top:0,opacity:a.opacity,display:a.alwaysVisible?"block":"none","border-radius":a.borderRadius,BorderRadius:a.borderRadius,MozBorderRadius:a.borderRadius,
WebkitBorderRadius:a.borderRadius,zIndex:99}),h="right"==a.position?{right:a.distance}:{left:a.distance};m.css(h);c.css(h);b.wrap(q);b.parent().append(c);b.parent().append(m);a.railDraggable&&c.bind("mousedown",function(a){var b=e(document);z=!0;t=parseFloat(c.css("top"));pageY=a.pageY;b.bind("mousemove.slimscroll",function(a){currTop=t+a.pageY-pageY;c.css("top",currTop);n(0,c.position().top,!1)});b.bind("mouseup.slimscroll",function(a){z=!1;p();b.unbind(".slimscroll")});return!1}).bind("selectstart.slimscroll",
function(a){a.stopPropagation();a.preventDefault();return!1});m.hover(function(){w()},function(){p()});c.hover(function(){y=!0},function(){y=!1});b.hover(function(){r=!0;w();p()},function(){r=!1;p()});b.bind("touchstart",function(a,b){a.originalEvent.touches.length&&(A=a.originalEvent.touches[0].pageY)});b.bind("touchmove",function(b){k||b.originalEvent.preventDefault();b.originalEvent.touches.length&&(n((A-b.originalEvent.touches[0].pageY)/a.touchScrollStep,!0),A=b.originalEvent.touches[0].pageY)});
x();"bottom"===a.start?(c.css({top:b.outerHeight()-c.outerHeight()}),n(0,!0)):"top"!==a.start&&(n(e(a.start).position().top,null,!0),a.alwaysVisible||c.hide());window.addEventListener?(this.addEventListener("DOMMouseScroll",v,!1),this.addEventListener("mousewheel",v,!1)):document.attachEvent("onmousewheel",v)}});return this}});e.fn.extend({slimscroll:e.fn.slimScroll})})(jQuery);



/*!
* screenfull
* v4.0.0 - 2018-12-15
* (c) Sindre Sorhus; MIT License
*/

!function(){"use strict";var u="undefined"!=typeof window&&void 0!==window.document?window.document:{},e="undefined"!=typeof module&&module.exports,t="undefined"!=typeof Element&&"ALLOW_KEYBOARD_INPUT"in Element,c=function(){for(var e,n=[["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenEnabled","fullscreenchange","fullscreenerror"],["webkitRequestFullscreen","webkitExitFullscreen","webkitFullscreenElement","webkitFullscreenEnabled","webkitfullscreenchange","webkitfullscreenerror"],["webkitRequestFullScreen","webkitCancelFullScreen","webkitCurrentFullScreenElement","webkitCancelFullScreen","webkitfullscreenchange","webkitfullscreenerror"],["mozRequestFullScreen","mozCancelFullScreen","mozFullScreenElement","mozFullScreenEnabled","mozfullscreenchange","mozfullscreenerror"],["msRequestFullscreen","msExitFullscreen","msFullscreenElement","msFullscreenEnabled","MSFullscreenChange","MSFullscreenError"]],r=0,l=n.length,t={};r<l;r++)if((e=n[r])&&e[1]in u){for(r=0;r<e.length;r++)t[n[0][r]]=e[r];return t}return!1}(),l={change:c.fullscreenchange,error:c.fullscreenerror},n={request:function(l){return new Promise(function(e){var n=c.requestFullscreen,r=function(){this.off("change",r),e()}.bind(this);l=l||u.documentElement,/ Version\/5\.1(?:\.\d+)? Safari\//.test(navigator.userAgent)?l[n]():l[n](t?Element.ALLOW_KEYBOARD_INPUT:{}),this.on("change",r)}.bind(this))},exit:function(){return new Promise(function(e){var n=function(){this.off("change",n),e()}.bind(this);u[c.exitFullscreen](),this.on("change",n)}.bind(this))},toggle:function(e){return this.isFullscreen?this.exit():this.request(e)},onchange:function(e){this.on("change",e)},onerror:function(e){this.on("error",e)},on:function(e,n){var r=l[e];r&&u.addEventListener(r,n,!1)},off:function(e,n){var r=l[e];r&&u.removeEventListener(r,n,!1)},raw:c};c?(Object.defineProperties(n,{isFullscreen:{get:function(){return Boolean(u[c.fullscreenElement])}},element:{enumerable:!0,get:function(){return u[c.fullscreenElement]}},enabled:{enumerable:!0,get:function(){return Boolean(u[c.fullscreenEnabled])}}}),e?module.exports=n:window.screenfull=n):e?module.exports=!1:window.screenfull=!1}();



/*!
* fastclick
*/
;(function () {
	'use strict';

	/**
	 * @preserve FastClick: polyfill to remove click delays on browsers with touch UIs.
	 *
	 * @codingstandard ftlabs-jsv2
	 * @copyright The Financial Times Limited [All Rights Reserved]
	 * @license MIT License (see LICENSE.txt)
	 */

	/*jslint browser:true, node:true*/
	/*global define, Event, Node*/


	/**
	 * Instantiate fast-clicking listeners on the specified layer.
	 *
	 * @constructor
	 * @param {Element} layer The layer to listen on
	 * @param {Object} [options={}] The options to override the defaults
	 */
	function FastClick(layer, options) {
		var oldOnClick;

		options = options || {};

		/**
		 * Whether a click is currently being tracked.
		 *
		 * @type boolean
		 */
		this.trackingClick = false;


		/**
		 * Timestamp for when click tracking started.
		 *
		 * @type number
		 */
		this.trackingClickStart = 0;


		/**
		 * The element being tracked for a click.
		 *
		 * @type EventTarget
		 */
		this.targetElement = null;


		/**
		 * X-coordinate of touch start event.
		 *
		 * @type number
		 */
		this.touchStartX = 0;


		/**
		 * Y-coordinate of touch start event.
		 *
		 * @type number
		 */
		this.touchStartY = 0;


		/**
		 * ID of the last touch, retrieved from Touch.identifier.
		 *
		 * @type number
		 */
		this.lastTouchIdentifier = 0;


		/**
		 * Touchmove boundary, beyond which a click will be cancelled.
		 *
		 * @type number
		 */
		this.touchBoundary = options.touchBoundary || 10;


		/**
		 * The FastClick layer.
		 *
		 * @type Element
		 */
		this.layer = layer;

		/**
		 * The minimum time between tap(touchstart and touchend) events
		 *
		 * @type number
		 */
		this.tapDelay = options.tapDelay || 200;

		/**
		 * The maximum time for a tap
		 *
		 * @type number
		 */
		this.tapTimeout = options.tapTimeout || 700;

		if (FastClick.notNeeded(layer)) {
			return;
		}

		// Some old versions of Android don't have Function.prototype.bind
		function bind(method, context) {
			return function() { return method.apply(context, arguments); };
		}


		var methods = ['onMouse', 'onClick', 'onTouchStart', 'onTouchMove', 'onTouchEnd', 'onTouchCancel'];
		var context = this;
		for (var i = 0, l = methods.length; i < l; i++) {
			context[methods[i]] = bind(context[methods[i]], context);
		}

		// Set up event handlers as required
		if (deviceIsAndroid) {
			layer.addEventListener('mouseover', this.onMouse, true);
			layer.addEventListener('mousedown', this.onMouse, true);
			layer.addEventListener('mouseup', this.onMouse, true);
		}

		layer.addEventListener('click', this.onClick, true);
		layer.addEventListener('touchstart', this.onTouchStart, false);
		layer.addEventListener('touchmove', this.onTouchMove, false);
		layer.addEventListener('touchend', this.onTouchEnd, false);
		layer.addEventListener('touchcancel', this.onTouchCancel, false);

		// Hack is required for browsers that don't support Event#stopImmediatePropagation (e.g. Android 2)
		// which is how FastClick normally stops click events bubbling to callbacks registered on the FastClick
		// layer when they are cancelled.
		if (!Event.prototype.stopImmediatePropagation) {
			layer.removeEventListener = function(type, callback, capture) {
				var rmv = Node.prototype.removeEventListener;
				if (type === 'click') {
					rmv.call(layer, type, callback.hijacked || callback, capture);
				} else {
					rmv.call(layer, type, callback, capture);
				}
			};

			layer.addEventListener = function(type, callback, capture) {
				var adv = Node.prototype.addEventListener;
				if (type === 'click') {
					adv.call(layer, type, callback.hijacked || (callback.hijacked = function(event) {
						if (!event.propagationStopped) {
							callback(event);
						}
					}), capture);
				} else {
					adv.call(layer, type, callback, capture);
				}
			};
		}

		// If a handler is already declared in the element's onclick attribute, it will be fired before
		// FastClick's onClick handler. Fix this by pulling out the user-defined handler function and
		// adding it as listener.
		if (typeof layer.onclick === 'function') {

			// Android browser on at least 3.2 requires a new reference to the function in layer.onclick
			// - the old one won't work if passed to addEventListener directly.
			oldOnClick = layer.onclick;
			layer.addEventListener('click', function(event) {
				oldOnClick(event);
			}, false);
			layer.onclick = null;
		}
	}

	/**
	* Windows Phone 8.1 fakes user agent string to look like Android and iPhone.
	*
	* @type boolean
	*/
	var deviceIsWindowsPhone = navigator.userAgent.indexOf("Windows Phone") >= 0;

	/**
	 * Android requires exceptions.
	 *
	 * @type boolean
	 */
	var deviceIsAndroid = navigator.userAgent.indexOf('Android') > 0 && !deviceIsWindowsPhone;


	/**
	 * iOS requires exceptions.
	 *
	 * @type boolean
	 */
	var deviceIsIOS = /iP(ad|hone|od)/.test(navigator.userAgent) && !deviceIsWindowsPhone;


	/**
	 * iOS 4 requires an exception for select elements.
	 *
	 * @type boolean
	 */
	var deviceIsIOS4 = deviceIsIOS && (/OS 4_\d(_\d)?/).test(navigator.userAgent);


	/**
	 * iOS 6.0-7.* requires the target element to be manually derived
	 *
	 * @type boolean
	 */
	var deviceIsIOSWithBadTarget = deviceIsIOS && (/OS [6-7]_\d/).test(navigator.userAgent);

	/**
	 * BlackBerry requires exceptions.
	 *
	 * @type boolean
	 */
	var deviceIsBlackBerry10 = navigator.userAgent.indexOf('BB10') > 0;

	/**
	 * Determine whether a given element requires a native click.
	 *
	 * @param {EventTarget|Element} target Target DOM element
	 * @returns {boolean} Returns true if the element needs a native click
	 */
	FastClick.prototype.needsClick = function(target) {
		switch (target.nodeName.toLowerCase()) {

		// Don't send a synthetic click to disabled inputs (issue #62)
		case 'button':
		case 'select':
		case 'textarea':
			if (target.disabled) {
				return true;
			}

			break;
		case 'input':

			// File inputs need real clicks on iOS 6 due to a browser bug (issue #68)
			if ((deviceIsIOS && target.type === 'file') || target.disabled) {
				return true;
			}

			break;
		case 'label':
		case 'iframe': // iOS8 homescreen apps can prevent events bubbling into frames
		case 'video':
			return true;
		}

		return (/\bneedsclick\b/).test(target.className);
	};


	/**
	 * Determine whether a given element requires a call to focus to simulate click into element.
	 *
	 * @param {EventTarget|Element} target Target DOM element
	 * @returns {boolean} Returns true if the element requires a call to focus to simulate native click.
	 */
	FastClick.prototype.needsFocus = function(target) {
		switch (target.nodeName.toLowerCase()) {
		case 'textarea':
			return true;
		case 'select':
			return !deviceIsAndroid;
		case 'input':
			switch (target.type) {
			case 'button':
			case 'checkbox':
			case 'file':
			case 'image':
			case 'radio':
			case 'submit':
				return false;
			}

			// No point in attempting to focus disabled inputs
			return !target.disabled && !target.readOnly;
		default:
			return (/\bneedsfocus\b/).test(target.className);
		}
	};


	/**
	 * Send a click event to the specified element.
	 *
	 * @param {EventTarget|Element} targetElement
	 * @param {Event} event
	 */
	FastClick.prototype.sendClick = function(targetElement, event) {
		var clickEvent, touch;

		// On some Android devices activeElement needs to be blurred otherwise the synthetic click will have no effect (#24)
		if (document.activeElement && document.activeElement !== targetElement) {
			document.activeElement.blur();
		}

		touch = event.changedTouches[0];

		// Synthesise a click event, with an extra attribute so it can be tracked
		clickEvent = document.createEvent('MouseEvents');
		clickEvent.initMouseEvent(this.determineEventType(targetElement), true, true, window, 1, touch.screenX, touch.screenY, touch.clientX, touch.clientY, false, false, false, false, 0, null);
		clickEvent.forwardedTouchEvent = true;
		targetElement.dispatchEvent(clickEvent);
	};

	FastClick.prototype.determineEventType = function(targetElement) {

		//Issue #159: Android Chrome Select Box does not open with a synthetic click event
		if (deviceIsAndroid && targetElement.tagName.toLowerCase() === 'select') {
			return 'mousedown';
		}

		return 'click';
	};


	/**
	 * @param {EventTarget|Element} targetElement
	 */
	FastClick.prototype.focus = function(targetElement) {
		var length;

		// Issue #160: on iOS 7, some input elements (e.g. date datetime month) throw a vague TypeError on setSelectionRange. These elements don't have an integer value for the selectionStart and selectionEnd properties, but unfortunately that can't be used for detection because accessing the properties also throws a TypeError. Just check the type instead. Filed as Apple bug #15122724.
		if (deviceIsIOS && targetElement.setSelectionRange && targetElement.type.indexOf('date') !== 0 && targetElement.type !== 'time' && targetElement.type !== 'month') {
			length = targetElement.value.length;
			targetElement.setSelectionRange(length, length);
		} else {
			targetElement.focus();
		}
	};


	/**
	 * Check whether the given target element is a child of a scrollable layer and if so, set a flag on it.
	 *
	 * @param {EventTarget|Element} targetElement
	 */
	FastClick.prototype.updateScrollParent = function(targetElement) {
		var scrollParent, parentElement;

		scrollParent = targetElement.fastClickScrollParent;

		// Attempt to discover whether the target element is contained within a scrollable layer. Re-check if the
		// target element was moved to another parent.
		if (!scrollParent || !scrollParent.contains(targetElement)) {
			parentElement = targetElement;
			do {
				if (parentElement.scrollHeight > parentElement.offsetHeight) {
					scrollParent = parentElement;
					targetElement.fastClickScrollParent = parentElement;
					break;
				}

				parentElement = parentElement.parentElement;
			} while (parentElement);
		}

		// Always update the scroll top tracker if possible.
		if (scrollParent) {
			scrollParent.fastClickLastScrollTop = scrollParent.scrollTop;
		}
	};


	/**
	 * @param {EventTarget} targetElement
	 * @returns {Element|EventTarget}
	 */
	FastClick.prototype.getTargetElementFromEventTarget = function(eventTarget) {

		// On some older browsers (notably Safari on iOS 4.1 - see issue #56) the event target may be a text node.
		if (eventTarget.nodeType === Node.TEXT_NODE) {
			return eventTarget.parentNode;
		}

		return eventTarget;
	};


	/**
	 * On touch start, record the position and scroll offset.
	 *
	 * @param {Event} event
	 * @returns {boolean}
	 */
	FastClick.prototype.onTouchStart = function(event) {
		var targetElement, touch, selection;

		// Ignore multiple touches, otherwise pinch-to-zoom is prevented if both fingers are on the FastClick element (issue #111).
		if (event.targetTouches.length > 1) {
			return true;
		}

		targetElement = this.getTargetElementFromEventTarget(event.target);
		touch = event.targetTouches[0];

		if (deviceIsIOS) {

			// Only trusted events will deselect text on iOS (issue #49)
			selection = window.getSelection();
			if (selection.rangeCount && !selection.isCollapsed) {
				return true;
			}

			if (!deviceIsIOS4) {

				// Weird things happen on iOS when an alert or confirm dialog is opened from a click event callback (issue #23):
				// when the user next taps anywhere else on the page, new touchstart and touchend events are dispatched
				// with the same identifier as the touch event that previously triggered the click that triggered the alert.
				// Sadly, there is an issue on iOS 4 that causes some normal touch events to have the same identifier as an
				// immediately preceeding touch event (issue #52), so this fix is unavailable on that platform.
				// Issue 120: touch.identifier is 0 when Chrome dev tools 'Emulate touch events' is set with an iOS device UA string,
				// which causes all touch events to be ignored. As this block only applies to iOS, and iOS identifiers are always long,
				// random integers, it's safe to to continue if the identifier is 0 here.
				if (touch.identifier && touch.identifier === this.lastTouchIdentifier) {
					event.preventDefault();
					return false;
				}

				this.lastTouchIdentifier = touch.identifier;

				// If the target element is a child of a scrollable layer (using -webkit-overflow-scrolling: touch) and:
				// 1) the user does a fling scroll on the scrollable layer
				// 2) the user stops the fling scroll with another tap
				// then the event.target of the last 'touchend' event will be the element that was under the user's finger
				// when the fling scroll was started, causing FastClick to send a click event to that layer - unless a check
				// is made to ensure that a parent layer was not scrolled before sending a synthetic click (issue #42).
				this.updateScrollParent(targetElement);
			}
		}

		this.trackingClick = true;
		this.trackingClickStart = event.timeStamp;
		this.targetElement = targetElement;

		this.touchStartX = touch.pageX;
		this.touchStartY = touch.pageY;

		// Prevent phantom clicks on fast double-tap (issue #36)
		if ((event.timeStamp - this.lastClickTime) < this.tapDelay) {
			event.preventDefault();
		}

		return true;
	};


	/**
	 * Based on a touchmove event object, check whether the touch has moved past a boundary since it started.
	 *
	 * @param {Event} event
	 * @returns {boolean}
	 */
	FastClick.prototype.touchHasMoved = function(event) {
		var touch = event.changedTouches[0], boundary = this.touchBoundary;

		if (Math.abs(touch.pageX - this.touchStartX) > boundary || Math.abs(touch.pageY - this.touchStartY) > boundary) {
			return true;
		}

		return false;
	};


	/**
	 * Update the last position.
	 *
	 * @param {Event} event
	 * @returns {boolean}
	 */
	FastClick.prototype.onTouchMove = function(event) {
		if (!this.trackingClick) {
			return true;
		}

		// If the touch has moved, cancel the click tracking
		if (this.targetElement !== this.getTargetElementFromEventTarget(event.target) || this.touchHasMoved(event)) {
			this.trackingClick = false;
			this.targetElement = null;
		}

		return true;
	};


	/**
	 * Attempt to find the labelled control for the given label element.
	 *
	 * @param {EventTarget|HTMLLabelElement} labelElement
	 * @returns {Element|null}
	 */
	FastClick.prototype.findControl = function(labelElement) {

		// Fast path for newer browsers supporting the HTML5 control attribute
		if (labelElement.control !== undefined) {
			return labelElement.control;
		}

		// All browsers under test that support touch events also support the HTML5 htmlFor attribute
		if (labelElement.htmlFor) {
			return document.getElementById(labelElement.htmlFor);
		}

		// If no for attribute exists, attempt to retrieve the first labellable descendant element
		// the list of which is defined here: http://www.w3.org/TR/html5/forms.html#category-label
		return labelElement.querySelector('button, input:not([type=hidden]), keygen, meter, output, progress, select, textarea');
	};


	/**
	 * On touch end, determine whether to send a click event at once.
	 *
	 * @param {Event} event
	 * @returns {boolean}
	 */
	FastClick.prototype.onTouchEnd = function(event) {
		var forElement, trackingClickStart, targetTagName, scrollParent, touch, targetElement = this.targetElement;

		if (!this.trackingClick) {
			return true;
		}

		// Prevent phantom clicks on fast double-tap (issue #36)
		if ((event.timeStamp - this.lastClickTime) < this.tapDelay) {
			this.cancelNextClick = true;
			return true;
		}

		if ((event.timeStamp - this.trackingClickStart) > this.tapTimeout) {
			return true;
		}

		// Reset to prevent wrong click cancel on input (issue #156).
		this.cancelNextClick = false;

		this.lastClickTime = event.timeStamp;

		trackingClickStart = this.trackingClickStart;
		this.trackingClick = false;
		this.trackingClickStart = 0;

		// On some iOS devices, the targetElement supplied with the event is invalid if the layer
		// is performing a transition or scroll, and has to be re-detected manually. Note that
		// for this to function correctly, it must be called *after* the event target is checked!
		// See issue #57; also filed as rdar://13048589 .
		if (deviceIsIOSWithBadTarget) {
			touch = event.changedTouches[0];

			// In certain cases arguments of elementFromPoint can be negative, so prevent setting targetElement to null
			targetElement = document.elementFromPoint(touch.pageX - window.pageXOffset, touch.pageY - window.pageYOffset) || targetElement;
			targetElement.fastClickScrollParent = this.targetElement.fastClickScrollParent;
		}

		targetTagName = targetElement.tagName.toLowerCase();
		if (targetTagName === 'label') {
			forElement = this.findControl(targetElement);
			if (forElement) {
				this.focus(targetElement);
				if (deviceIsAndroid) {
					return false;
				}

				targetElement = forElement;
			}
		} else if (this.needsFocus(targetElement)) {

			// Case 1: If the touch started a while ago (best guess is 100ms based on tests for issue #36) then focus will be triggered anyway. Return early and unset the target element reference so that the subsequent click will be allowed through.
			// Case 2: Without this exception for input elements tapped when the document is contained in an iframe, then any inputted text won't be visible even though the value attribute is updated as the user types (issue #37).
			if ((event.timeStamp - trackingClickStart) > 100 || (deviceIsIOS && window.top !== window && targetTagName === 'input')) {
				this.targetElement = null;
				return false;
			}

			this.focus(targetElement);
			this.sendClick(targetElement, event);

			// Select elements need the event to go through on iOS 4, otherwise the selector menu won't open.
			// Also this breaks opening selects when VoiceOver is active on iOS6, iOS7 (and possibly others)
			if (!deviceIsIOS || targetTagName !== 'select') {
				this.targetElement = null;
				event.preventDefault();
			}

			return false;
		}

		if (deviceIsIOS && !deviceIsIOS4) {

			// Don't send a synthetic click event if the target element is contained within a parent layer that was scrolled
			// and this tap is being used to stop the scrolling (usually initiated by a fling - issue #42).
			scrollParent = targetElement.fastClickScrollParent;
			if (scrollParent && scrollParent.fastClickLastScrollTop !== scrollParent.scrollTop) {
				return true;
			}
		}

		// Prevent the actual click from going though - unless the target node is marked as requiring
		// real clicks or if it is in the whitelist in which case only non-programmatic clicks are permitted.
		if (!this.needsClick(targetElement)) {
			event.preventDefault();
			this.sendClick(targetElement, event);
		}

		return false;
	};


	/**
	 * On touch cancel, stop tracking the click.
	 *
	 * @returns {void}
	 */
	FastClick.prototype.onTouchCancel = function() {
		this.trackingClick = false;
		this.targetElement = null;
	};


	/**
	 * Determine mouse events which should be permitted.
	 *
	 * @param {Event} event
	 * @returns {boolean}
	 */
	FastClick.prototype.onMouse = function(event) {

		// If a target element was never set (because a touch event was never fired) allow the event
		if (!this.targetElement) {
			return true;
		}

		if (event.forwardedTouchEvent) {
			return true;
		}

		// Programmatically generated events targeting a specific element should be permitted
		if (!event.cancelable) {
			return true;
		}

		// Derive and check the target element to see whether the mouse event needs to be permitted;
		// unless explicitly enabled, prevent non-touch click events from triggering actions,
		// to prevent ghost/doubleclicks.
		if (!this.needsClick(this.targetElement) || this.cancelNextClick) {

			// Prevent any user-added listeners declared on FastClick element from being fired.
			if (event.stopImmediatePropagation) {
				event.stopImmediatePropagation();
			} else {

				// Part of the hack for browsers that don't support Event#stopImmediatePropagation (e.g. Android 2)
				event.propagationStopped = true;
			}

			// Cancel the event
			event.stopPropagation();
			event.preventDefault();

			return false;
		}

		// If the mouse event is permitted, return true for the action to go through.
		return true;
	};


	/**
	 * On actual clicks, determine whether this is a touch-generated click, a click action occurring
	 * naturally after a delay after a touch (which needs to be cancelled to avoid duplication), or
	 * an actual click which should be permitted.
	 *
	 * @param {Event} event
	 * @returns {boolean}
	 */
	FastClick.prototype.onClick = function(event) {
		var permitted;

		// It's possible for another FastClick-like library delivered with third-party code to fire a click event before FastClick does (issue #44). In that case, set the click-tracking flag back to false and return early. This will cause onTouchEnd to return early.
		if (this.trackingClick) {
			this.targetElement = null;
			this.trackingClick = false;
			return true;
		}

		// Very odd behaviour on iOS (issue #18): if a submit element is present inside a form and the user hits enter in the iOS simulator or clicks the Go button on the pop-up OS keyboard the a kind of 'fake' click event will be triggered with the submit-type input element as the target.
		if (event.target.type === 'submit' && event.detail === 0) {
			return true;
		}

		permitted = this.onMouse(event);

		// Only unset targetElement if the click is not permitted. This will ensure that the check for !targetElement in onMouse fails and the browser's click doesn't go through.
		if (!permitted) {
			this.targetElement = null;
		}

		// If clicks are permitted, return true for the action to go through.
		return permitted;
	};


	/**
	 * Remove all FastClick's event listeners.
	 *
	 * @returns {void}
	 */
	FastClick.prototype.destroy = function() {
		var layer = this.layer;

		if (deviceIsAndroid) {
			layer.removeEventListener('mouseover', this.onMouse, true);
			layer.removeEventListener('mousedown', this.onMouse, true);
			layer.removeEventListener('mouseup', this.onMouse, true);
		}

		layer.removeEventListener('click', this.onClick, true);
		layer.removeEventListener('touchstart', this.onTouchStart, false);
		layer.removeEventListener('touchmove', this.onTouchMove, false);
		layer.removeEventListener('touchend', this.onTouchEnd, false);
		layer.removeEventListener('touchcancel', this.onTouchCancel, false);
	};


	/**
	 * Check whether FastClick is needed.
	 *
	 * @param {Element} layer The layer to listen on
	 */
	FastClick.notNeeded = function(layer) {
		var metaViewport;
		var chromeVersion;
		var blackberryVersion;
		var firefoxVersion;

		// Devices that don't support touch don't need FastClick
		if (typeof window.ontouchstart === 'undefined') {
			return true;
		}

		// Chrome version - zero for other browsers
		chromeVersion = +(/Chrome\/([0-9]+)/.exec(navigator.userAgent) || [,0])[1];

		if (chromeVersion) {

			if (deviceIsAndroid) {
				metaViewport = document.querySelector('meta[name=viewport]');

				if (metaViewport) {
					// Chrome on Android with user-scalable="no" doesn't need FastClick (issue #89)
					if (metaViewport.content.indexOf('user-scalable=no') !== -1) {
						return true;
					}
					// Chrome 32 and above with width=device-width or less don't need FastClick
					if (chromeVersion > 31 && document.documentElement.scrollWidth <= window.outerWidth) {
						return true;
					}
				}

			// Chrome desktop doesn't need FastClick (issue #15)
			} else {
				return true;
			}
		}

		if (deviceIsBlackBerry10) {
			blackberryVersion = navigator.userAgent.match(/Version\/([0-9]*)\.([0-9]*)/);

			// BlackBerry 10.3+ does not require Fastclick library.
			// https://github.com/ftlabs/fastclick/issues/251
			if (blackberryVersion[1] >= 10 && blackberryVersion[2] >= 3) {
				metaViewport = document.querySelector('meta[name=viewport]');

				if (metaViewport) {
					// user-scalable=no eliminates click delay.
					if (metaViewport.content.indexOf('user-scalable=no') !== -1) {
						return true;
					}
					// width=device-width (or less than device-width) eliminates click delay.
					if (document.documentElement.scrollWidth <= window.outerWidth) {
						return true;
					}
				}
			}
		}

		// IE10 with -ms-touch-action: none or manipulation, which disables double-tap-to-zoom (issue #97)
		if (layer.style.msTouchAction === 'none' || layer.style.touchAction === 'manipulation') {
			return true;
		}

		// Firefox version - zero for other browsers
		firefoxVersion = +(/Firefox\/([0-9]+)/.exec(navigator.userAgent) || [,0])[1];

		if (firefoxVersion >= 27) {
			// Firefox 27+ does not have tap delay if the content is not zoomable - https://bugzilla.mozilla.org/show_bug.cgi?id=922896

			metaViewport = document.querySelector('meta[name=viewport]');
			if (metaViewport && (metaViewport.content.indexOf('user-scalable=no') !== -1 || document.documentElement.scrollWidth <= window.outerWidth)) {
				return true;
			}
		}

		// IE11: prefixed -ms-touch-action is no longer supported and it's recomended to use non-prefixed version
		// http://msdn.microsoft.com/en-us/library/windows/apps/Hh767313.aspx
		if (layer.style.touchAction === 'none' || layer.style.touchAction === 'manipulation') {
			return true;
		}

		return false;
	};


	/**
	 * Factory method for creating a FastClick object
	 *
	 * @param {Element} layer The layer to listen on
	 * @param {Object} [options={}] The options to override the defaults
	 */
	FastClick.attach = function(layer, options) {
		return new FastClick(layer, options);
	};


	if (typeof define === 'function' && typeof define.amd === 'object' && define.amd) {

		// AMD. Register as an anonymous module.
		define(function() {
			return FastClick;
		});
	} else if (typeof module !== 'undefined' && module.exports) {
		module.exports = FastClick.attach;
		module.exports.FastClick = FastClick;
	} else {
		window.FastClick = FastClick;
	}
}());






/* jquery.sparkline 2.1.3 - http://omnipotent.net/jquery.sparkline/ 
** Licensed under the New BSD License - see above site for details */

(function(document,Math,undefined){(function(factory){if(typeof define==="function"&&define.amd){define(["jquery"],factory)}else if(jQuery&&!jQuery.fn.sparkline){factory(jQuery)}})(function($){"use strict";var UNSET_OPTION={},getDefaults,createClass,SPFormat,clipval,quartile,normalizeValue,normalizeValues,remove,isNumber,all,sum,addCSS,ensureArray,formatNumber,RangeMap,MouseHandler,Tooltip,barHighlightMixin,line,bar,tristate,discrete,bullet,pie,box,defaultStyles,initStyles,VShape,VCanvas_base,VCanvas_canvas,VCanvas_vml,pending,shapeCount=0;getDefaults=function(){return{common:{type:"line",lineColor:"#00f",fillColor:"#cdf",defaultPixelsPerValue:3,width:"auto",height:"auto",composite:false,tagValuesAttribute:"values",tagOptionsPrefix:"spark",enableTagOptions:false,enableHighlight:true,highlightLighten:1.4,tooltipSkipNull:true,tooltipPrefix:"",tooltipSuffix:"",disableHiddenCheck:false,numberFormatter:false,numberDigitGroupCount:3,numberDigitGroupSep:",",numberDecimalMark:".",disableTooltips:false,disableInteraction:false},line:{spotColor:"#f80",highlightSpotColor:"#5f5",highlightLineColor:"#f22",spotRadius:1.5,minSpotColor:"#f80",maxSpotColor:"#f80",lineWidth:1,normalRangeMin:undefined,normalRangeMax:undefined,normalRangeColor:"#ccc",drawNormalOnTop:false,chartRangeMin:undefined,chartRangeMax:undefined,chartRangeMinX:undefined,chartRangeMaxX:undefined,tooltipFormat:new SPFormat('<span style="color: {{color}}">&#9679;</span> {{prefix}}{{y}}{{suffix}}')},bar:{barColor:"#3366cc",negBarColor:"#f44",stackedBarColor:["#3366cc","#dc3912","#ff9900","#109618","#66aa00","#dd4477","#0099c6","#990099"],zeroColor:undefined,nullColor:undefined,zeroAxis:true,barWidth:4,barSpacing:1,chartRangeMax:undefined,chartRangeMin:undefined,chartRangeClip:false,colorMap:undefined,tooltipFormat:new SPFormat('<span style="color: {{color}}">&#9679;</span> {{prefix}}{{value}}{{suffix}}')},tristate:{barWidth:4,barSpacing:1,posBarColor:"#6f6",negBarColor:"#f44",zeroBarColor:"#999",colorMap:{},tooltipFormat:new SPFormat('<span style="color: {{color}}">&#9679;</span> {{value:map}}'),tooltipValueLookups:{map:{"-1":"Loss",0:"Draw",1:"Win"}}},discrete:{lineHeight:"auto",thresholdColor:undefined,thresholdValue:0,chartRangeMax:undefined,chartRangeMin:undefined,chartRangeClip:false,tooltipFormat:new SPFormat("{{prefix}}{{value}}{{suffix}}")},bullet:{targetColor:"#f33",targetWidth:3,performanceColor:"#33f",rangeColors:["#d3dafe","#a8b6ff","#7f94ff"],base:undefined,tooltipFormat:new SPFormat("{{fieldkey:fields}} - {{value}}"),tooltipValueLookups:{fields:{r:"Range",p:"Performance",t:"Target"}}},pie:{offset:0,sliceColors:["#3366cc","#dc3912","#ff9900","#109618","#66aa00","#dd4477","#0099c6","#990099"],borderWidth:0,borderColor:"#000",tooltipFormat:new SPFormat('<span style="color: {{color}}">&#9679;</span> {{value}} ({{percent.1}}%)')},box:{raw:false,boxLineColor:"#000",boxFillColor:"#cdf",whiskerColor:"#000",outlierLineColor:"#333",outlierFillColor:"#fff",medianColor:"#f00",showOutliers:true,outlierIQR:1.5,spotRadius:1.5,target:undefined,targetColor:"#4a2",chartRangeMax:undefined,chartRangeMin:undefined,tooltipFormat:new SPFormat("{{field:fields}}: {{value}}"),tooltipFormatFieldlistKey:"field",tooltipValueLookups:{fields:{lq:"Lower Quartile",med:"Median",uq:"Upper Quartile",lo:"Left Outlier",ro:"Right Outlier",lw:"Left Whisker",rw:"Right Whisker"}}}}};defaultStyles=".jqstooltip { "+"position: absolute;"+"left: 0px;"+"top: 0px;"+"visibility: hidden;"+"background: rgb(0, 0, 0) transparent;"+"background-color: rgba(0,0,0,0.6);"+"filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);"+'-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";'+"color: white;"+"font: 10px arial, san serif;"+"text-align: left;"+"white-space: nowrap;"+"padding: 5px;"+"border: 1px solid white;"+"box-sizing: content-box;"+"z-index: 10000;"+"}"+".jqsfield { "+"color: white;"+"font: 10px arial, san serif;"+"text-align: left;"+"}";createClass=function(){var Class,args;Class=function(){this.init.apply(this,arguments)};if(arguments.length>1){if(arguments[0]){Class.prototype=$.extend(new arguments[0],arguments[arguments.length-1]);Class._super=arguments[0].prototype}else{Class.prototype=arguments[arguments.length-1]}if(arguments.length>2){args=Array.prototype.slice.call(arguments,1,-1);args.unshift(Class.prototype);$.extend.apply($,args)}}else{Class.prototype=arguments[0]}Class.prototype.cls=Class;return Class};$.SPFormatClass=SPFormat=createClass({fre:/\{\{([\w.]+?)(:(.+?))?\}\}/g,precre:/(\w+)\.(\d+)/,init:function(format,fclass){this.format=format;this.fclass=fclass},render:function(fieldset,lookups,options){var self=this,fields=fieldset,match,token,lookupkey,fieldvalue,prec;return this.format.replace(this.fre,function(){var lookup;token=arguments[1];lookupkey=arguments[3];match=self.precre.exec(token);if(match){prec=match[2];token=match[1]}else{prec=false}fieldvalue=fields[token];if(fieldvalue===undefined){return""}if(lookupkey&&lookups&&lookups[lookupkey]){lookup=lookups[lookupkey];if(lookup.get){return lookups[lookupkey].get(fieldvalue)||fieldvalue}else{return lookups[lookupkey][fieldvalue]||fieldvalue}}if(isNumber(fieldvalue)){if(options.get("numberFormatter")){fieldvalue=options.get("numberFormatter")(fieldvalue)}else{fieldvalue=formatNumber(fieldvalue,prec,options.get("numberDigitGroupCount"),options.get("numberDigitGroupSep"),options.get("numberDecimalMark"))}}return fieldvalue})}});$.spformat=function(format,fclass){return new SPFormat(format,fclass)};clipval=function(val,min,max){if(val<min){return min}if(val>max){return max}return val};quartile=function(values,q){var vl;if(q===2){vl=Math.floor(values.length/2);return values.length%2?values[vl]:(values[vl-1]+values[vl])/2}else{if(values.length%2){vl=(values.length*q+q)/4;return vl%1?(values[Math.floor(vl)]+values[Math.floor(vl)-1])/2:values[vl-1]}else{vl=(values.length*q+2)/4;return vl%1?(values[Math.floor(vl)]+values[Math.floor(vl)-1])/2:values[vl-1]}}};normalizeValue=function(val){var nf;switch(val){case"undefined":val=undefined;break;case"null":val=null;break;case"true":val=true;break;case"false":val=false;break;default:nf=parseFloat(val);if(val==nf){val=nf}}return val};normalizeValues=function(vals){var i,result=[];for(i=vals.length;i--;){result[i]=normalizeValue(vals[i])}return result};remove=function(vals,filter){var i,vl,result=[];for(i=0,vl=vals.length;i<vl;i++){if(vals[i]!==filter){result.push(vals[i])}}return result};isNumber=function(num){return!isNaN(parseFloat(num))&&isFinite(num)};formatNumber=function(num,prec,groupsize,groupsep,decsep){var p,i;num=(prec===false?parseFloat(num).toString():num.toFixed(prec)).split("");p=(p=$.inArray(".",num))<0?num.length:p;if(p<num.length){num[p]=decsep}for(i=p-groupsize;i>0;i-=groupsize){num.splice(i,0,groupsep)}return num.join("")};all=function(val,arr,ignoreNull){var i;for(i=arr.length;i--;){if(ignoreNull&&arr[i]===null)continue;if(arr[i]!==val){return false}}return true};sum=function(vals){var total=0,i;for(i=vals.length;i--;){total+=typeof vals[i]==="number"?vals[i]:0}return total};ensureArray=function(val){return $.isArray(val)?val:[val]};addCSS=function(css){var tag,iefail;if(document.createStyleSheet){try{document.createStyleSheet().cssText=css;return}catch(e){iefail=true}}tag=document.createElement("style");tag.type="text/css";document.getElementsByTagName("head")[0].appendChild(tag);if(iefail){document.styleSheets[document.styleSheets.length-1].cssText=css}else{tag[typeof document.body.style.WebkitAppearance=="string"?"innerText":"innerHTML"]=css}};$.fn.simpledraw=function(width,height,useExisting,interact){var target,mhandler;if(useExisting&&(target=this.data("_jqs_vcanvas"))){return target}if($.fn.sparkline.canvas===false){return false}else if($.fn.sparkline.canvas===undefined){var el=document.createElement("canvas");if(!!(el.getContext&&el.getContext("2d"))){$.fn.sparkline.canvas=function(width,height,target,interact){return new VCanvas_canvas(width,height,target,interact)}}else if(document.namespaces&&!document.namespaces.v){document.namespaces.add("v","urn:schemas-microsoft-com:vml","#default#VML");$.fn.sparkline.canvas=function(width,height,target,interact){return new VCanvas_vml(width,height,target)}}else{$.fn.sparkline.canvas=false;return false}}if(width===undefined){width=$(this).innerWidth()}if(height===undefined){height=$(this).innerHeight()}target=$.fn.sparkline.canvas(width,height,this,interact);mhandler=$(this).data("_jqs_mhandler");if(mhandler){mhandler.registerCanvas(target)}return target};$.fn.cleardraw=function(){var target=this.data("_jqs_vcanvas");if(target){target.reset()}};$.RangeMapClass=RangeMap=createClass({init:function(map){var key,range,rangelist=[];for(key in map){if(map.hasOwnProperty(key)&&typeof key==="string"&&key.indexOf(":")>-1){range=key.split(":");range[0]=range[0].length===0?-Infinity:parseFloat(range[0]);range[1]=range[1].length===0?Infinity:parseFloat(range[1]);range[2]=map[key];rangelist.push(range)}}this.map=map;this.rangelist=rangelist||false},get:function(value){var rangelist=this.rangelist,i,range,result;if((result=this.map[value])!==undefined){return result}if(rangelist){for(i=rangelist.length;i--;){range=rangelist[i];if(range[0]<=value&&range[1]>=value){return range[2]}}}return undefined}});$.range_map=function(map){return new RangeMap(map)};MouseHandler=createClass({init:function(el,options){var $el=$(el);this.$el=$el;this.options=options;this.currentPageX=0;this.currentPageY=0;this.el=el;this.splist=[];this.tooltip=null;this.over=false;this.displayTooltips=!options.get("disableTooltips");this.highlightEnabled=!options.get("disableHighlight")},registerSparkline:function(sp){this.splist.push(sp);if(this.over){this.updateDisplay()}},registerCanvas:function(canvas){var $canvas=$(canvas.canvas);this.canvas=canvas;this.$canvas=$canvas;$canvas.mouseenter($.proxy(this.mouseenter,this));$canvas.mouseleave($.proxy(this.mouseleave,this));$canvas.click($.proxy(this.mouseclick,this))},reset:function(removeTooltip){this.splist=[];if(this.tooltip&&removeTooltip){this.tooltip.remove();this.tooltip=undefined}},mouseclick:function(e){var clickEvent=$.Event("sparklineClick");clickEvent.originalEvent=e;clickEvent.sparklines=this.splist;this.$el.trigger(clickEvent)},mouseenter:function(e){$(document.body).unbind("mousemove.jqs");$(document.body).bind("mousemove.jqs",$.proxy(this.mousemove,this));this.over=true;this.currentPageX=e.pageX;this.currentPageY=e.pageY;this.currentEl=e.target;if(!this.tooltip&&this.displayTooltips){this.tooltip=new Tooltip(this.options);this.tooltip.updatePosition(e.pageX,e.pageY)}this.updateDisplay()},mouseleave:function(){$(document.body).unbind("mousemove.jqs");var splist=this.splist,spcount=splist.length,needsRefresh=false,sp,i;this.over=false;this.currentEl=null;if(this.tooltip){this.tooltip.remove();this.tooltip=null}for(i=0;i<spcount;i++){sp=splist[i];if(sp.clearRegionHighlight()){needsRefresh=true}}if(needsRefresh){this.canvas.render()}},mousemove:function(e){this.currentPageX=e.pageX;this.currentPageY=e.pageY;this.currentEl=e.target;if(this.tooltip){this.tooltip.updatePosition(e.pageX,e.pageY)}this.updateDisplay()},updateDisplay:function(){var splist=this.splist,spcount=splist.length,needsRefresh=false,offset=this.$canvas.offset(),localX=this.currentPageX-offset.left,localY=this.currentPageY-offset.top,tooltiphtml,sp,i,result,changeEvent;if(!this.over){return}for(i=0;i<spcount;i++){sp=splist[i];result=sp.setRegionHighlight(this.currentEl,localX,localY);if(result){needsRefresh=true}}if(needsRefresh){changeEvent=$.Event("sparklineRegionChange");changeEvent.sparklines=this.splist;this.$el.trigger(changeEvent);if(this.tooltip){tooltiphtml="";for(i=0;i<spcount;i++){sp=splist[i];tooltiphtml+=sp.getCurrentRegionTooltip()}this.tooltip.setContent(tooltiphtml)}if(!this.disableHighlight){this.canvas.render()}}if(result===null){this.mouseleave()}}});Tooltip=createClass({sizeStyle:"position: static !important;"+"display: block !important;"+"visibility: hidden !important;"+"float: left !important;",init:function(options){var tooltipClassname=options.get("tooltipClassname","jqstooltip"),sizetipStyle=this.sizeStyle,offset;this.container=options.get("tooltipContainer")||document.body;this.tooltipOffsetX=options.get("tooltipOffsetX",10);this.tooltipOffsetY=options.get("tooltipOffsetY",12);$("#jqssizetip").remove();$("#jqstooltip").remove();this.sizetip=$("<div/>",{id:"jqssizetip",style:sizetipStyle,"class":tooltipClassname});this.tooltip=$("<div/>",{id:"jqstooltip","class":tooltipClassname}).appendTo(this.container);offset=this.tooltip.offset();this.offsetLeft=offset.left;this.offsetTop=offset.top;this.hidden=true;$(window).unbind("resize.jqs scroll.jqs");$(window).bind("resize.jqs scroll.jqs",$.proxy(this.updateWindowDims,this));this.updateWindowDims()},updateWindowDims:function(){this.scrollTop=$(window).scrollTop();this.scrollLeft=$(window).scrollLeft();this.scrollRight=this.scrollLeft+$(window).width();this.updatePosition()},getSize:function(content){this.sizetip.html(content).appendTo(this.container);this.width=this.sizetip.width()+1;this.height=this.sizetip.height();this.sizetip.remove()},setContent:function(content){if(!content){this.tooltip.css("visibility","hidden");this.hidden=true;return}this.getSize(content);this.tooltip.html(content).css({width:this.width,height:this.height,visibility:"visible"});if(this.hidden){this.hidden=false;this.updatePosition()}},updatePosition:function(x,y){if(x===undefined){if(this.mousex===undefined){return}x=this.mousex-this.offsetLeft;y=this.mousey-this.offsetTop}else{this.mousex=x=x-this.offsetLeft;this.mousey=y=y-this.offsetTop}if(!this.height||!this.width||this.hidden){return}y-=this.height+this.tooltipOffsetY;x+=this.tooltipOffsetX;if(y<this.scrollTop){y=this.scrollTop}if(x<this.scrollLeft){x=this.scrollLeft}else if(x+this.width>this.scrollRight){x=this.scrollRight-this.width}this.tooltip.css({left:x,top:y})},remove:function(){this.tooltip.remove();this.sizetip.remove();this.sizetip=this.tooltip=undefined;$(window).unbind("resize.jqs scroll.jqs")}});initStyles=function(){addCSS(defaultStyles)};$(initStyles);pending=[];$.fn.sparkline=function(userValues,userOptions){return this.each(function(){var options=new $.fn.sparkline.options(this,userOptions),$this=$(this),render,i;render=function(){var values,width,height,tmp,mhandler,sp,vals;if(userValues==="html"||userValues===undefined){vals=this.getAttribute(options.get("tagValuesAttribute"));if(vals===undefined||vals===null){vals=$this.html()}values=vals.replace(/(^\s*<!--)|(-->\s*$)|\s+/g,"").split(",")}else{values=userValues}width=options.get("width")==="auto"?values.length*options.get("defaultPixelsPerValue"):options.get("width");if(options.get("height")==="auto"){if(!options.get("composite")||!$.data(this,"_jqs_vcanvas")){tmp=document.createElement("span");tmp.innerHTML="a";$this.html(tmp);height=$(tmp).innerHeight()||$(tmp).height();$(tmp).remove();tmp=null}}else{height=options.get("height")}if(!options.get("disableInteraction")){mhandler=$.data(this,"_jqs_mhandler");if(!mhandler){mhandler=new MouseHandler(this,options);$.data(this,"_jqs_mhandler",mhandler)}else if(!options.get("composite")){mhandler.reset()}}else{mhandler=false}if(options.get("composite")&&!$.data(this,"_jqs_vcanvas")){if(!$.data(this,"_jqs_errnotify")){alert("Attempted to attach a composite sparkline to an element with no existing sparkline");$.data(this,"_jqs_errnotify",true)}return}sp=new($.fn.sparkline[options.get("type")])(this,values,options,width,height);sp.render();if(mhandler){mhandler.registerSparkline(sp)}};if($(this).html()&&!options.get("disableHiddenCheck")&&$(this).is(":hidden")||!$(this).parents("body").length){if(!options.get("composite")&&$.data(this,"_jqs_pending")){for(i=pending.length;i;i--){if(pending[i-1][0]==this){pending.splice(i-1,1)}}}pending.push([this,render]);$.data(this,"_jqs_pending",true)}else{render.call(this)}})};$.fn.sparkline.defaults=getDefaults();$.sparkline_display_visible=function(){var el,i,pl;var done=[];for(i=0,pl=pending.length;i<pl;i++){el=pending[i][0];if($(el).is(":visible")&&!$(el).parents().is(":hidden")){pending[i][1].call(el);$.data(pending[i][0],"_jqs_pending",false);done.push(i)}else if(!$(el).closest("html").length&&!$.data(el,"_jqs_pending")){$.data(pending[i][0],"_jqs_pending",false);done.push(i)}}for(i=done.length;i;i--){pending.splice(done[i-1],1)}};$.fn.sparkline.options=createClass({init:function(tag,userOptions){var extendedOptions,defaults,base,tagOptionType;this.userOptions=userOptions=userOptions||{};this.tag=tag;this.tagValCache={};defaults=$.fn.sparkline.defaults;base=defaults.common;this.tagOptionsPrefix=userOptions.enableTagOptions&&(userOptions.tagOptionsPrefix||base.tagOptionsPrefix);tagOptionType=this.getTagSetting("type");if(tagOptionType===UNSET_OPTION){extendedOptions=defaults[userOptions.type||base.type]}else{extendedOptions=defaults[tagOptionType]}this.mergedOptions=$.extend({},base,extendedOptions,userOptions)},getTagSetting:function(key){var prefix=this.tagOptionsPrefix,val,i,pairs,keyval;if(prefix===false||prefix===undefined){return UNSET_OPTION}if(this.tagValCache.hasOwnProperty(key)){val=this.tagValCache.key}else{val=this.tag.getAttribute(prefix+key);if(val===undefined||val===null){val=UNSET_OPTION}else if(val.substr(0,1)==="["){val=val.substr(1,val.length-2).split(",");for(i=val.length;i--;){val[i]=normalizeValue(val[i].replace(/(^\s*)|(\s*$)/g,""))}}else if(val.substr(0,1)==="{"){pairs=val.substr(1,val.length-2).split(",");val={};for(i=pairs.length;i--;){keyval=pairs[i].split(":",2);val[keyval[0].replace(/(^\s*)|(\s*$)/g,"")]=normalizeValue(keyval[1].replace(/(^\s*)|(\s*$)/g,""))}}else{val=normalizeValue(val)}this.tagValCache.key=val}return val},get:function(key,defaultval){var tagOption=this.getTagSetting(key),result;if(tagOption!==UNSET_OPTION){return tagOption}return(result=this.mergedOptions[key])===undefined?defaultval:result}});$.fn.sparkline._base=createClass({disabled:false,init:function(el,values,options,width,height){this.el=el;this.$el=$(el);this.values=values;this.options=options;this.width=width;this.height=height;this.currentRegion=undefined},initTarget:function(){var interactive=!this.options.get("disableInteraction");if(!(this.target=this.$el.simpledraw(this.width,this.height,this.options.get("composite"),interactive))){this.disabled=true}else{this.canvasWidth=this.target.pixelWidth;this.canvasHeight=this.target.pixelHeight}},render:function(){if(this.disabled){this.el.innerHTML="";return false}return true},getRegion:function(x,y){},setRegionHighlight:function(el,x,y){var currentRegion=this.currentRegion,highlightEnabled=!this.options.get("disableHighlight"),newRegion;if(x>this.canvasWidth||y>this.canvasHeight||x<0||y<0){return null}newRegion=this.getRegion(el,x,y);if(currentRegion!==newRegion){if(currentRegion!==undefined&&highlightEnabled){this.removeHighlight()}this.currentRegion=newRegion;if(newRegion!==undefined&&highlightEnabled){this.renderHighlight()}return true}return false},clearRegionHighlight:function(){if(this.currentRegion!==undefined){this.removeHighlight();this.currentRegion=undefined;return true}return false},renderHighlight:function(){this.changeHighlight(true)},removeHighlight:function(){this.changeHighlight(false)},changeHighlight:function(highlight){},getCurrentRegionTooltip:function(){var options=this.options,header="",entries=[],fields,formats,formatlen,fclass,text,i,showFields,showFieldsKey,newFields,fv,formatter,format,fieldlen,j;if(this.currentRegion===undefined){return""}fields=this.getCurrentRegionFields();formatter=options.get("tooltipFormatter");if(formatter){return formatter(this,options,fields)}if(options.get("tooltipChartTitle")){header+='<div class="jqs jqstitle">'+options.get("tooltipChartTitle")+"</div>\n"}formats=this.options.get("tooltipFormat");if(!formats){return""}if(!$.isArray(formats)){formats=[formats]}if(!$.isArray(fields)){fields=[fields]}showFields=this.options.get("tooltipFormatFieldlist");showFieldsKey=this.options.get("tooltipFormatFieldlistKey");if(showFields&&showFieldsKey){newFields=[];for(i=fields.length;i--;){fv=fields[i][showFieldsKey];if((j=$.inArray(fv,showFields))!=-1){newFields[j]=fields[i]}}fields=newFields}formatlen=formats.length;fieldlen=fields.length;for(i=0;i<formatlen;i++){format=formats[i];if(typeof format==="string"){format=new SPFormat(format)}fclass=format.fclass||"jqsfield";for(j=0;j<fieldlen;j++){if(!fields[j].isNull||!options.get("tooltipSkipNull")){$.extend(fields[j],{prefix:options.get("tooltipPrefix"),suffix:options.get("tooltipSuffix")});text=format.render(fields[j],options.get("tooltipValueLookups"),options);entries.push('<div class="'+fclass+'">'+text+"</div>")}}}if(entries.length){return header+entries.join("\n")}return""},getCurrentRegionFields:function(){},calcHighlightColor:function(color,options){var highlightColor=options.get("highlightColor"),lighten=options.get("highlightLighten"),parse,mult,rgbnew,i;if(highlightColor){return highlightColor}if(lighten){parse=/^#([0-9a-f])([0-9a-f])([0-9a-f])$/i.exec(color)||/^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i.exec(color);if(parse){rgbnew=[];mult=color.length===4?16:1;for(i=0;i<3;i++){rgbnew[i]=clipval(Math.round(parseInt(parse[i+1],16)*mult*lighten),0,255)}return"rgb("+rgbnew.join(",")+")"}}return color}});barHighlightMixin={changeHighlight:function(highlight){var currentRegion=this.currentRegion,target=this.target,shapeids=this.regionShapes[currentRegion],newShapes;if(shapeids){newShapes=this.renderRegion(currentRegion,highlight);if($.isArray(newShapes)||$.isArray(shapeids)){target.replaceWithShapes(shapeids,newShapes);this.regionShapes[currentRegion]=$.map(newShapes,function(newShape){return newShape.id})}else{target.replaceWithShape(shapeids,newShapes);this.regionShapes[currentRegion]=newShapes.id}}},render:function(){var values=this.values,target=this.target,regionShapes=this.regionShapes,shapes,ids,i,j;if(!this.cls._super.render.call(this)){return}for(i=values.length;i--;){shapes=this.renderRegion(i);if(shapes){if($.isArray(shapes)){ids=[];for(j=shapes.length;j--;){shapes[j].append();ids.push(shapes[j].id)}regionShapes[i]=ids}else{shapes.append();regionShapes[i]=shapes.id}}else{regionShapes[i]=null}}target.render()}};$.fn.sparkline.line=line=createClass($.fn.sparkline._base,{type:"line",init:function(el,values,options,width,height){line._super.init.call(this,el,values,options,width,height);this.vertices=[];this.regionMap=[];this.xvalues=[];this.yvalues=[];this.yminmax=[];this.hightlightSpotId=null;this.lastShapeId=null;this.initTarget()},getRegion:function(el,x,y){var i,regionMap=this.regionMap;for(i=regionMap.length;i--;){if(regionMap[i]!==null&&x>=regionMap[i][0]&&x<=regionMap[i][1]){return regionMap[i][2]}}return undefined},getCurrentRegionFields:function(){var currentRegion=this.currentRegion;return{isNull:this.yvalues[currentRegion]===null,x:this.xvalues[currentRegion],y:this.yvalues[currentRegion],color:this.options.get("lineColor"),fillColor:this.options.get("fillColor"),offset:currentRegion}},renderHighlight:function(){var currentRegion=this.currentRegion,target=this.target,vertex=this.vertices[currentRegion],options=this.options,spotRadius=options.get("spotRadius"),highlightSpotColor=options.get("highlightSpotColor"),highlightLineColor=options.get("highlightLineColor"),highlightSpot,highlightLine;if(!vertex){return}if(spotRadius&&highlightSpotColor){highlightSpot=target.drawCircle(vertex[0],vertex[1],spotRadius,undefined,highlightSpotColor);this.highlightSpotId=highlightSpot.id;target.insertAfterShape(this.lastShapeId,highlightSpot)}if(highlightLineColor){highlightLine=target.drawLine(vertex[0],this.canvasTop,vertex[0],this.canvasTop+this.canvasHeight,highlightLineColor);this.highlightLineId=highlightLine.id;target.insertAfterShape(this.lastShapeId,highlightLine)}},removeHighlight:function(){var target=this.target;if(this.highlightSpotId){target.removeShapeId(this.highlightSpotId);this.highlightSpotId=null}if(this.highlightLineId){target.removeShapeId(this.highlightLineId);this.highlightLineId=null}},scanValues:function(){var values=this.values,valcount=values.length,xvalues=this.xvalues,yvalues=this.yvalues,yminmax=this.yminmax,i,val,isStr,isArray,sp;for(i=0;i<valcount;i++){val=values[i];isStr=typeof values[i]==="string";isArray=typeof values[i]==="object"&&values[i]instanceof Array;sp=isStr&&values[i].split(":");if(isStr&&sp.length===2){xvalues.push(Number(sp[0]));yvalues.push(Number(sp[1]));yminmax.push(Number(sp[1]))}else if(isArray){xvalues.push(val[0]);yvalues.push(val[1]);yminmax.push(val[1])}else{xvalues.push(i);if(values[i]===null||values[i]==="null"){yvalues.push(null)}else{yvalues.push(Number(val));yminmax.push(Number(val))}}}if(this.options.get("xvalues")){xvalues=this.options.get("xvalues")}this.maxy=this.maxyorg=Math.max.apply(Math,yminmax);this.miny=this.minyorg=Math.min.apply(Math,yminmax);this.maxx=Math.max.apply(Math,xvalues);this.minx=Math.min.apply(Math,xvalues);this.xvalues=xvalues;this.yvalues=yvalues;this.yminmax=yminmax},processRangeOptions:function(){var options=this.options,normalRangeMin=options.get("normalRangeMin"),normalRangeMax=options.get("normalRangeMax");if(normalRangeMin!==undefined){if(normalRangeMin<this.miny){this.miny=normalRangeMin}if(normalRangeMax>this.maxy){this.maxy=normalRangeMax}}if(options.get("chartRangeMin")!==undefined&&(options.get("chartRangeClip")||options.get("chartRangeMin")<this.miny)){this.miny=options.get("chartRangeMin")}if(options.get("chartRangeMax")!==undefined&&(options.get("chartRangeClip")||options.get("chartRangeMax")>this.maxy)){this.maxy=options.get("chartRangeMax")}if(options.get("chartRangeMinX")!==undefined&&(options.get("chartRangeClipX")||options.get("chartRangeMinX")<this.minx)){this.minx=options.get("chartRangeMinX")}if(options.get("chartRangeMaxX")!==undefined&&(options.get("chartRangeClipX")||options.get("chartRangeMaxX")>this.maxx)){this.maxx=options.get("chartRangeMaxX")}},drawNormalRange:function(canvasLeft,canvasTop,canvasHeight,canvasWidth,rangey){var normalRangeMin=this.options.get("normalRangeMin"),normalRangeMax=this.options.get("normalRangeMax"),ytop=canvasTop+Math.round(canvasHeight-canvasHeight*((normalRangeMax-this.miny)/rangey)),height=Math.round(canvasHeight*(normalRangeMax-normalRangeMin)/rangey);this.target.drawRect(canvasLeft,ytop,canvasWidth,height,undefined,this.options.get("normalRangeColor")).append()},render:function(){var options=this.options,target=this.target,canvasWidth=this.canvasWidth,canvasHeight=this.canvasHeight,vertices=this.vertices,spotRadius=options.get("spotRadius"),regionMap=this.regionMap,rangex,rangey,yvallast,canvasTop,canvasLeft,vertex,path,paths,x,y,xnext,xpos,xposnext,last,next,yvalcount,lineShapes,fillShapes,plen,valueSpots,hlSpotsEnabled,color,xvalues,yvalues,i;if(!line._super.render.call(this)){return}this.scanValues();this.processRangeOptions();xvalues=this.xvalues;yvalues=this.yvalues;if(!this.yminmax.length||this.yvalues.length<2){return}canvasTop=canvasLeft=0;rangex=this.maxx-this.minx===0?1:this.maxx-this.minx;rangey=this.maxy-this.miny===0?1:this.maxy-this.miny;yvallast=this.yvalues.length-1;if(spotRadius&&(canvasWidth<spotRadius*4||canvasHeight<spotRadius*4)){spotRadius=0}if(spotRadius){hlSpotsEnabled=options.get("highlightSpotColor")&&!options.get("disableInteraction");if(hlSpotsEnabled||options.get("minSpotColor")||options.get("spotColor")&&yvalues[yvallast]===this.miny){canvasHeight-=Math.ceil(spotRadius)}if(hlSpotsEnabled||options.get("maxSpotColor")||options.get("spotColor")&&yvalues[yvallast]===this.maxy){canvasHeight-=Math.ceil(spotRadius);canvasTop+=Math.ceil(spotRadius)}if(hlSpotsEnabled||(options.get("minSpotColor")||options.get("maxSpotColor"))&&(yvalues[0]===this.miny||yvalues[0]===this.maxy)){canvasLeft+=Math.ceil(spotRadius);canvasWidth-=Math.ceil(spotRadius)}if(hlSpotsEnabled||options.get("spotColor")||(options.get("minSpotColor")||options.get("maxSpotColor")&&(yvalues[yvallast]===this.miny||yvalues[yvallast]===this.maxy))){canvasWidth-=Math.ceil(spotRadius)}}canvasHeight--;if(options.get("normalRangeMin")!==undefined&&!options.get("drawNormalOnTop")){this.drawNormalRange(canvasLeft,canvasTop,canvasHeight,canvasWidth,rangey)}path=[];paths=[path];last=next=null;yvalcount=yvalues.length;for(i=0;i<yvalcount;i++){x=xvalues[i];xnext=xvalues[i+1];y=yvalues[i];xpos=canvasLeft+Math.round((x-this.minx)*(canvasWidth/rangex));xposnext=i<yvalcount-1?canvasLeft+Math.round((xnext-this.minx)*(canvasWidth/rangex)):canvasWidth;next=xpos+(xposnext-xpos)/2;regionMap[i]=[last||0,next,i];last=next;if(y===null){if(i){if(yvalues[i-1]!==null){path=[];paths.push(path)}vertices.push(null)}}else{if(y<this.miny){y=this.miny}if(y>this.maxy){y=this.maxy}if(!path.length){path.push([xpos,canvasTop+canvasHeight])}vertex=[xpos,canvasTop+Math.round(canvasHeight-canvasHeight*((y-this.miny)/rangey))];path.push(vertex);vertices.push(vertex)}}lineShapes=[];fillShapes=[];plen=paths.length;for(i=0;i<plen;i++){path=paths[i];if(path.length){if(options.get("fillColor")){path.push([path[path.length-1][0],canvasTop+canvasHeight]);fillShapes.push(path.slice(0));path.pop()}if(path.length>2){path[0]=[path[0][0],path[1][1]]}lineShapes.push(path)}}plen=fillShapes.length;for(i=0;i<plen;i++){target.drawShape(fillShapes[i],options.get("fillColor"),options.get("fillColor")).append()}if(options.get("normalRangeMin")!==undefined&&options.get("drawNormalOnTop")){this.drawNormalRange(canvasLeft,canvasTop,canvasHeight,canvasWidth,rangey)}plen=lineShapes.length;for(i=0;i<plen;i++){target.drawShape(lineShapes[i],options.get("lineColor"),undefined,options.get("lineWidth")).append()}if(spotRadius&&options.get("valueSpots")){valueSpots=options.get("valueSpots");if(valueSpots.get===undefined){valueSpots=new RangeMap(valueSpots)}for(i=0;i<yvalcount;i++){color=valueSpots.get(yvalues[i]);if(color){target.drawCircle(canvasLeft+Math.round((xvalues[i]-this.minx)*(canvasWidth/rangex)),canvasTop+Math.round(canvasHeight-canvasHeight*((yvalues[i]-this.miny)/rangey)),spotRadius,undefined,color).append()}}}if(spotRadius&&options.get("spotColor")&&yvalues[yvallast]!==null){target.drawCircle(canvasLeft+Math.round((xvalues[xvalues.length-1]-this.minx)*(canvasWidth/rangex)),canvasTop+Math.round(canvasHeight-canvasHeight*((yvalues[yvallast]-this.miny)/rangey)),spotRadius,undefined,options.get("spotColor")).append()}if(this.maxy!==this.minyorg){if(spotRadius&&options.get("minSpotColor")){x=xvalues[$.inArray(this.minyorg,yvalues)];target.drawCircle(canvasLeft+Math.round((x-this.minx)*(canvasWidth/rangex)),canvasTop+Math.round(canvasHeight-canvasHeight*((this.minyorg-this.miny)/rangey)),spotRadius,undefined,options.get("minSpotColor")).append()}if(spotRadius&&options.get("maxSpotColor")){x=xvalues[$.inArray(this.maxyorg,yvalues)];target.drawCircle(canvasLeft+Math.round((x-this.minx)*(canvasWidth/rangex)),canvasTop+Math.round(canvasHeight-canvasHeight*((this.maxyorg-this.miny)/rangey)),spotRadius,undefined,options.get("maxSpotColor")).append()}}this.lastShapeId=target.getLastShapeId();this.canvasTop=canvasTop;target.render()}});$.fn.sparkline.bar=bar=createClass($.fn.sparkline._base,barHighlightMixin,{type:"bar",init:function(el,values,options,width,height){var barWidth=parseInt(options.get("barWidth"),10),barSpacing=parseInt(options.get("barSpacing"),10),chartRangeMin=options.get("chartRangeMin"),chartRangeMax=options.get("chartRangeMax"),chartRangeClip=options.get("chartRangeClip"),stackMin=Infinity,stackMax=-Infinity,isStackString,groupMin,groupMax,stackRanges,numValues,i,vlen,range,zeroAxis,xaxisOffset,min,max,clipMin,clipMax,stacked,vlist,j,slen,svals,val,yoffset,yMaxCalc,canvasHeightEf;bar._super.init.call(this,el,values,options,width,height);for(i=0,vlen=values.length;i<vlen;i++){val=values[i];isStackString=typeof val==="string"&&val.indexOf(":")>-1;if(isStackString||$.isArray(val)){stacked=true;if(isStackString){val=values[i]=normalizeValues(val.split(":"));

}val=remove(val,null);groupMin=Math.min.apply(Math,val);groupMax=Math.max.apply(Math,val);if(groupMin<stackMin){stackMin=groupMin}if(groupMax>stackMax){stackMax=groupMax}}}this.stacked=stacked;this.regionShapes={};this.barWidth=barWidth;this.barSpacing=barSpacing;this.totalBarWidth=barWidth+barSpacing;this.width=width=values.length*barWidth+(values.length-1)*barSpacing;this.initTarget();if(chartRangeClip){clipMin=chartRangeMin===undefined?-Infinity:chartRangeMin;clipMax=chartRangeMax===undefined?Infinity:chartRangeMax}numValues=[];stackRanges=stacked?[]:numValues;var stackTotals=[];var stackRangesNeg=[];for(i=0,vlen=values.length;i<vlen;i++){if(stacked){vlist=values[i];values[i]=svals=[];stackTotals[i]=0;stackRanges[i]=stackRangesNeg[i]=0;for(j=0,slen=vlist.length;j<slen;j++){val=svals[j]=chartRangeClip?clipval(vlist[j],clipMin,clipMax):vlist[j];if(val!==null){if(val>0){stackTotals[i]+=val}if(stackMin<0&&stackMax>0){if(val<0){stackRangesNeg[i]+=Math.abs(val)}else{stackRanges[i]+=val}}else{stackRanges[i]+=Math.abs(val-(val<0?stackMax:stackMin))}numValues.push(val)}}}else{val=chartRangeClip?clipval(values[i],clipMin,clipMax):values[i];val=values[i]=normalizeValue(val);if(val!==null){numValues.push(val)}}}this.max=max=Math.max.apply(Math,numValues);this.min=min=Math.min.apply(Math,numValues);this.stackMax=stackMax=stacked?Math.max.apply(Math,stackTotals):max;this.stackMin=stackMin=stacked?Math.min.apply(Math,numValues):min;if(options.get("chartRangeMin")!==undefined&&(options.get("chartRangeClip")||options.get("chartRangeMin")<min)){min=options.get("chartRangeMin")}if(options.get("chartRangeMax")!==undefined&&(options.get("chartRangeClip")||options.get("chartRangeMax")>max)){max=options.get("chartRangeMax")}this.zeroAxis=zeroAxis=options.get("zeroAxis",true);if(min<=0&&max>=0&&zeroAxis){xaxisOffset=0}else if(zeroAxis==false){xaxisOffset=min}else if(min>0){xaxisOffset=min}else{xaxisOffset=max}this.xaxisOffset=xaxisOffset;range=stacked?Math.max.apply(Math,stackRanges)+Math.max.apply(Math,stackRangesNeg):max-min;this.canvasHeightEf=zeroAxis&&min<0?this.canvasHeight-2:this.canvasHeight-1;if(min<xaxisOffset){yMaxCalc=stacked&&max>=0?stackMax:max;yoffset=(yMaxCalc-xaxisOffset)/range*this.canvasHeight;if(yoffset!==Math.ceil(yoffset)){this.canvasHeightEf-=2;yoffset=Math.ceil(yoffset)}}else{yoffset=this.canvasHeight}this.yoffset=yoffset;if($.isArray(options.get("colorMap"))){this.colorMapByIndex=options.get("colorMap");this.colorMapByValue=null}else{this.colorMapByIndex=null;this.colorMapByValue=options.get("colorMap");if(this.colorMapByValue&&this.colorMapByValue.get===undefined){this.colorMapByValue=new RangeMap(this.colorMapByValue)}}this.range=range},getRegion:function(el,x,y){var result=Math.floor(x/this.totalBarWidth);return result<0||result>=this.values.length?undefined:result},getCurrentRegionFields:function(){var currentRegion=this.currentRegion,values=ensureArray(this.values[currentRegion]),result=[],value,i;for(i=values.length;i--;){value=values[i];result.push({isNull:value===null,value:value,color:this.calcColor(i,value,currentRegion),offset:currentRegion})}return result},calcColor:function(stacknum,value,valuenum){var colorMapByIndex=this.colorMapByIndex,colorMapByValue=this.colorMapByValue,options=this.options,color,newColor;if(this.stacked){color=options.get("stackedBarColor")}else{color=value<0?options.get("negBarColor"):options.get("barColor")}if(value===0&&options.get("zeroColor")!==undefined){color=options.get("zeroColor")}if(colorMapByValue&&(newColor=colorMapByValue.get(value))){color=newColor}else if(colorMapByIndex&&colorMapByIndex.length>valuenum){color=colorMapByIndex[valuenum]}return $.isArray(color)?color[stacknum%color.length]:color},renderRegion:function(valuenum,highlight){var vals=this.values[valuenum],options=this.options,xaxisOffset=this.xaxisOffset,result=[],range=this.range,stacked=this.stacked,target=this.target,x=valuenum*this.totalBarWidth,canvasHeightEf=this.canvasHeightEf,yoffset=this.yoffset,y,height,color,isNull,yoffsetNeg,i,valcount,val,minPlotted,allMin;vals=$.isArray(vals)?vals:[vals];valcount=vals.length;val=vals[0];isNull=all(null,vals);allMin=all(xaxisOffset,vals,true);if(isNull){if(options.get("nullColor")){color=highlight?options.get("nullColor"):this.calcHighlightColor(options.get("nullColor"),options);y=yoffset>0?yoffset-1:yoffset;return target.drawRect(x,y,this.barWidth-1,0,color,color)}else{return undefined}}yoffsetNeg=yoffset;for(i=0;i<valcount;i++){val=vals[i];if(stacked&&val===xaxisOffset){if(!allMin||minPlotted){continue}minPlotted=true}if(range>0){height=Math.floor(canvasHeightEf*(Math.abs(val-xaxisOffset)/range))+1}else{height=1}if(val<xaxisOffset||val===xaxisOffset&&yoffset===0){y=yoffsetNeg;yoffsetNeg+=height}else{y=yoffset-height;yoffset-=height}color=this.calcColor(i,val,valuenum);if(highlight){color=this.calcHighlightColor(color,options)}result.push(target.drawRect(x,y,this.barWidth-1,height-1,color,color))}if(result.length===1){return result[0]}return result}});$.fn.sparkline.tristate=tristate=createClass($.fn.sparkline._base,barHighlightMixin,{type:"tristate",init:function(el,values,options,width,height){var barWidth=parseInt(options.get("barWidth"),10),barSpacing=parseInt(options.get("barSpacing"),10);tristate._super.init.call(this,el,values,options,width,height);this.regionShapes={};this.barWidth=barWidth;this.barSpacing=barSpacing;this.totalBarWidth=barWidth+barSpacing;this.values=$.map(values,Number);this.width=width=values.length*barWidth+(values.length-1)*barSpacing;if($.isArray(options.get("colorMap"))){this.colorMapByIndex=options.get("colorMap");this.colorMapByValue=null}else{this.colorMapByIndex=null;this.colorMapByValue=options.get("colorMap");if(this.colorMapByValue&&this.colorMapByValue.get===undefined){this.colorMapByValue=new RangeMap(this.colorMapByValue)}}this.initTarget()},getRegion:function(el,x,y){return Math.floor(x/this.totalBarWidth)},getCurrentRegionFields:function(){var currentRegion=this.currentRegion;return{isNull:this.values[currentRegion]===undefined,value:this.values[currentRegion],color:this.calcColor(this.values[currentRegion],currentRegion),offset:currentRegion}},calcColor:function(value,valuenum){var values=this.values,options=this.options,colorMapByIndex=this.colorMapByIndex,colorMapByValue=this.colorMapByValue,color,newColor;if(colorMapByValue&&(newColor=colorMapByValue.get(value))){color=newColor}else if(colorMapByIndex&&colorMapByIndex.length>valuenum){color=colorMapByIndex[valuenum]}else if(values[valuenum]<0){color=options.get("negBarColor")}else if(values[valuenum]>0){color=options.get("posBarColor")}else{color=options.get("zeroBarColor")}return color},renderRegion:function(valuenum,highlight){var values=this.values,options=this.options,target=this.target,canvasHeight,height,halfHeight,x,y,color;canvasHeight=target.pixelHeight;halfHeight=Math.round(canvasHeight/2);x=valuenum*this.totalBarWidth;if(values[valuenum]<0){y=halfHeight;height=halfHeight-1}else if(values[valuenum]>0){y=0;height=halfHeight-1}else{y=halfHeight-1;height=2}color=this.calcColor(values[valuenum],valuenum);if(color===null){return}if(highlight){color=this.calcHighlightColor(color,options)}return target.drawRect(x,y,this.barWidth-1,height-1,color,color)}});$.fn.sparkline.discrete=discrete=createClass($.fn.sparkline._base,barHighlightMixin,{type:"discrete",init:function(el,values,options,width,height){discrete._super.init.call(this,el,values,options,width,height);this.regionShapes={};this.values=values=$.map(values,Number);this.min=Math.min.apply(Math,values);this.max=Math.max.apply(Math,values);this.range=this.max-this.min;this.width=width=options.get("width")==="auto"?values.length*2:this.width;this.interval=Math.floor(width/values.length);this.itemWidth=width/values.length;if(options.get("chartRangeMin")!==undefined&&(options.get("chartRangeClip")||options.get("chartRangeMin")<this.min)){this.min=options.get("chartRangeMin")}if(options.get("chartRangeMax")!==undefined&&(options.get("chartRangeClip")||options.get("chartRangeMax")>this.max)){this.max=options.get("chartRangeMax")}this.initTarget();if(this.target){this.lineHeight=options.get("lineHeight")==="auto"?Math.round(this.canvasHeight*.3):options.get("lineHeight")}},getRegion:function(el,x,y){return Math.floor(x/this.itemWidth)},getCurrentRegionFields:function(){var currentRegion=this.currentRegion;return{isNull:this.values[currentRegion]===undefined,value:this.values[currentRegion],offset:currentRegion}},renderRegion:function(valuenum,highlight){var values=this.values,options=this.options,min=this.min,max=this.max,range=this.range,interval=this.interval,target=this.target,canvasHeight=this.canvasHeight,lineHeight=this.lineHeight,pheight=canvasHeight-lineHeight,ytop,val,color,x;val=clipval(values[valuenum],min,max);x=valuenum*interval;ytop=Math.round(pheight-pheight*((val-min)/range));color=options.get("thresholdColor")&&val<options.get("thresholdValue")?options.get("thresholdColor"):options.get("lineColor");if(highlight){color=this.calcHighlightColor(color,options)}return target.drawLine(x,ytop,x,ytop+lineHeight,color)}});$.fn.sparkline.bullet=bullet=createClass($.fn.sparkline._base,{type:"bullet",init:function(el,values,options,width,height){var min,max,vals;bullet._super.init.call(this,el,values,options,width,height);this.values=values=normalizeValues(values);vals=values.slice();vals[0]=vals[0]===null?vals[2]:vals[0];vals[1]=values[1]===null?vals[2]:vals[1];min=Math.min.apply(Math,values);max=Math.max.apply(Math,values);if(options.get("base")===undefined){min=min<0?min:0}else{min=options.get("base")}this.min=min;this.max=max;this.range=max-min;this.shapes={};this.valueShapes={};this.regiondata={};this.width=width=options.get("width")==="auto"?"4.0em":width;this.target=this.$el.simpledraw(width,height,options.get("composite"));if(!values.length){this.disabled=true}this.initTarget()},getRegion:function(el,x,y){var shapeid=this.target.getShapeAt(el,x,y);return shapeid!==undefined&&this.shapes[shapeid]!==undefined?this.shapes[shapeid]:undefined},getCurrentRegionFields:function(){var currentRegion=this.currentRegion;return{fieldkey:currentRegion.substr(0,1),value:this.values[currentRegion.substr(1)],region:currentRegion}},changeHighlight:function(highlight){var currentRegion=this.currentRegion,shapeid=this.valueShapes[currentRegion],shape;delete this.shapes[shapeid];switch(currentRegion.substr(0,1)){case"r":shape=this.renderRange(currentRegion.substr(1),highlight);break;case"p":shape=this.renderPerformance(highlight);break;case"t":shape=this.renderTarget(highlight);break}this.valueShapes[currentRegion]=shape.id;this.shapes[shape.id]=currentRegion;this.target.replaceWithShape(shapeid,shape)},renderRange:function(rn,highlight){var rangeval=this.values[rn],rangewidth=Math.round(this.canvasWidth*((rangeval-this.min)/this.range)),color=this.options.get("rangeColors")[rn-2];if(highlight){color=this.calcHighlightColor(color,this.options)}return this.target.drawRect(0,0,rangewidth-1,this.canvasHeight-1,color,color)},renderPerformance:function(highlight){var perfval=this.values[1],perfwidth=Math.round(this.canvasWidth*((perfval-this.min)/this.range)),color=this.options.get("performanceColor");if(highlight){color=this.calcHighlightColor(color,this.options)}return this.target.drawRect(0,Math.round(this.canvasHeight*.3),perfwidth-1,Math.round(this.canvasHeight*.4)-1,color,color)},renderTarget:function(highlight){var targetval=this.values[0],x=Math.round(this.canvasWidth*((targetval-this.min)/this.range)-this.options.get("targetWidth")/2),targettop=Math.round(this.canvasHeight*.1),targetheight=this.canvasHeight-targettop*2,color=this.options.get("targetColor");if(highlight){color=this.calcHighlightColor(color,this.options)}return this.target.drawRect(x,targettop,this.options.get("targetWidth")-1,targetheight-1,color,color)},render:function(){var vlen=this.values.length,target=this.target,i,shape;if(!bullet._super.render.call(this)){return}for(i=2;i<vlen;i++){shape=this.renderRange(i).append();this.shapes[shape.id]="r"+i;this.valueShapes["r"+i]=shape.id}if(this.values[1]!==null){shape=this.renderPerformance().append();this.shapes[shape.id]="p1";this.valueShapes.p1=shape.id}if(this.values[0]!==null){shape=this.renderTarget().append();this.shapes[shape.id]="t0";this.valueShapes.t0=shape.id}target.render()}});$.fn.sparkline.pie=pie=createClass($.fn.sparkline._base,{type:"pie",init:function(el,values,options,width,height){var total=0,i;pie._super.init.call(this,el,values,options,width,height);this.shapes={};this.valueShapes={};this.values=values=$.map(values,Number);if(options.get("width")==="auto"){this.width=this.height}if(values.length>0){for(i=values.length;i--;){total+=values[i]}}this.total=total;this.initTarget();this.radius=Math.floor(Math.min(this.canvasWidth,this.canvasHeight)/2)},getRegion:function(el,x,y){var shapeid=this.target.getShapeAt(el,x,y);return shapeid!==undefined&&this.shapes[shapeid]!==undefined?this.shapes[shapeid]:undefined},getCurrentRegionFields:function(){var currentRegion=this.currentRegion;return{isNull:this.values[currentRegion]===undefined,value:this.values[currentRegion],percent:this.values[currentRegion]/this.total*100,color:this.options.get("sliceColors")[currentRegion%this.options.get("sliceColors").length],offset:currentRegion}},changeHighlight:function(highlight){var currentRegion=this.currentRegion,newslice=this.renderSlice(currentRegion,highlight),shapeid=this.valueShapes[currentRegion];delete this.shapes[shapeid];this.target.replaceWithShape(shapeid,newslice);this.valueShapes[currentRegion]=newslice.id;this.shapes[newslice.id]=currentRegion},renderSlice:function(valuenum,highlight){var target=this.target,options=this.options,radius=this.radius,borderWidth=options.get("borderWidth"),offset=options.get("offset"),circle=2*Math.PI,values=this.values,total=this.total,next=offset?2*Math.PI*(offset/360):0,start,end,i,vlen,color;vlen=values.length;for(i=0;i<vlen;i++){start=next;end=next;if(total>0){end=next+circle*(values[i]/total)}if(valuenum===i){color=options.get("sliceColors")[i%options.get("sliceColors").length];if(highlight){color=this.calcHighlightColor(color,options)}return target.drawPieSlice(radius,radius,radius-borderWidth,start,end,undefined,color)}next=end}},render:function(){var target=this.target,values=this.values,options=this.options,radius=this.radius,borderWidth=options.get("borderWidth"),shape,i;if(!pie._super.render.call(this)){return}if(borderWidth){target.drawCircle(radius,radius,Math.floor(radius-borderWidth/2),options.get("borderColor"),undefined,borderWidth).append()}for(i=values.length;i--;){if(values[i]){shape=this.renderSlice(i).append();this.valueShapes[i]=shape.id;this.shapes[shape.id]=i}}target.render()}});$.fn.sparkline.box=box=createClass($.fn.sparkline._base,{type:"box",init:function(el,values,options,width,height){box._super.init.call(this,el,values,options,width,height);this.values=$.map(values,Number);this.width=options.get("width")==="auto"?"4.0em":width;this.initTarget();if(!this.values.length){this.disabled=1}},getRegion:function(){return 1},getCurrentRegionFields:function(){var result=[{field:"lq",value:this.quartiles[0]},{field:"med",value:this.quartiles[1]},{field:"uq",value:this.quartiles[2]}];if(this.loutlier!==undefined){result.push({field:"lo",value:this.loutlier})}if(this.routlier!==undefined){result.push({field:"ro",value:this.routlier})}if(this.lwhisker!==undefined){result.push({field:"lw",value:this.lwhisker})}if(this.rwhisker!==undefined){result.push({field:"rw",value:this.rwhisker})}return result},render:function(){var target=this.target,values=this.values,vlen=values.length,options=this.options,canvasWidth=this.canvasWidth,canvasHeight=this.canvasHeight,minValue=options.get("chartRangeMin")===undefined?Math.min.apply(Math,values):options.get("chartRangeMin"),maxValue=options.get("chartRangeMax")===undefined?Math.max.apply(Math,values):options.get("chartRangeMax"),canvasLeft=0,lwhisker,loutlier,iqr,q1,q2,q3,rwhisker,routlier,i,size,unitSize;if(!box._super.render.call(this)){return}if(options.get("raw")){if(options.get("showOutliers")&&values.length>5){loutlier=values[0];lwhisker=values[1];q1=values[2];q2=values[3];q3=values[4];rwhisker=values[5];routlier=values[6]}else{lwhisker=values[0];q1=values[1];q2=values[2];q3=values[3];rwhisker=values[4]}}else{values.sort(function(a,b){return a-b});q1=quartile(values,1);q2=quartile(values,2);q3=quartile(values,3);iqr=q3-q1;if(options.get("showOutliers")){lwhisker=rwhisker=undefined;for(i=0;i<vlen;i++){if(lwhisker===undefined&&values[i]>q1-iqr*options.get("outlierIQR")){lwhisker=values[i]}if(values[i]<q3+iqr*options.get("outlierIQR")){rwhisker=values[i]}}loutlier=values[0];routlier=values[vlen-1]}else{lwhisker=values[0];rwhisker=values[vlen-1]}}this.quartiles=[q1,q2,q3];this.lwhisker=lwhisker;this.rwhisker=rwhisker;this.loutlier=loutlier;this.routlier=routlier;unitSize=canvasWidth/(maxValue-minValue+1);if(options.get("showOutliers")){canvasLeft=Math.ceil(options.get("spotRadius"));canvasWidth-=2*Math.ceil(options.get("spotRadius"));unitSize=canvasWidth/(maxValue-minValue+1);if(loutlier<lwhisker){target.drawCircle((loutlier-minValue)*unitSize+canvasLeft,canvasHeight/2,options.get("spotRadius"),options.get("outlierLineColor"),options.get("outlierFillColor")).append()}if(routlier>rwhisker){target.drawCircle((routlier-minValue)*unitSize+canvasLeft,canvasHeight/2,options.get("spotRadius"),options.get("outlierLineColor"),options.get("outlierFillColor")).append()}}target.drawRect(Math.round((q1-minValue)*unitSize+canvasLeft),Math.round(canvasHeight*.1),Math.round((q3-q1)*unitSize),Math.round(canvasHeight*.8),options.get("boxLineColor"),options.get("boxFillColor")).append();target.drawLine(Math.round((lwhisker-minValue)*unitSize+canvasLeft),Math.round(canvasHeight/2),Math.round((q1-minValue)*unitSize+canvasLeft),Math.round(canvasHeight/2),options.get("lineColor")).append();target.drawLine(Math.round((lwhisker-minValue)*unitSize+canvasLeft),Math.round(canvasHeight/4),Math.round((lwhisker-minValue)*unitSize+canvasLeft),Math.round(canvasHeight-canvasHeight/4),options.get("whiskerColor")).append();target.drawLine(Math.round((rwhisker-minValue)*unitSize+canvasLeft),Math.round(canvasHeight/2),Math.round((q3-minValue)*unitSize+canvasLeft),Math.round(canvasHeight/2),options.get("lineColor")).append();target.drawLine(Math.round((rwhisker-minValue)*unitSize+canvasLeft),Math.round(canvasHeight/4),Math.round((rwhisker-minValue)*unitSize+canvasLeft),Math.round(canvasHeight-canvasHeight/4),options.get("whiskerColor")).append();target.drawLine(Math.round((q2-minValue)*unitSize+canvasLeft),Math.round(canvasHeight*.1),Math.round((q2-minValue)*unitSize+canvasLeft),Math.round(canvasHeight*.9),options.get("medianColor")).append();if(options.get("target")){size=Math.ceil(options.get("spotRadius"));target.drawLine(Math.round((options.get("target")-minValue)*unitSize+canvasLeft),Math.round(canvasHeight/2-size),Math.round((options.get("target")-minValue)*unitSize+canvasLeft),Math.round(canvasHeight/2+size),options.get("targetColor")).append();target.drawLine(Math.round((options.get("target")-minValue)*unitSize+canvasLeft-size),Math.round(canvasHeight/2),Math.round((options.get("target")-minValue)*unitSize+canvasLeft+size),Math.round(canvasHeight/2),options.get("targetColor")).append()}target.render()}});VShape=createClass({init:function(target,id,type,args){this.target=target;this.id=id;this.type=type;this.args=args},append:function(){this.target.appendShape(this);return this}});VCanvas_base=createClass({_pxregex:/(\d+)(px)?\s*$/i,init:function(width,height,target){if(!width){return}this.width=width;this.height=height;this.target=target;this.lastShapeId=null;if(target[0]){target=target[0]}$.data(target,"_jqs_vcanvas",this)},drawLine:function(x1,y1,x2,y2,lineColor,lineWidth){return this.drawShape([[x1,y1],[x2,y2]],lineColor,lineWidth)},drawShape:function(path,lineColor,fillColor,lineWidth){return this._genShape("Shape",[path,lineColor,fillColor,lineWidth])},drawCircle:function(x,y,radius,lineColor,fillColor,lineWidth){return this._genShape("Circle",[x,y,radius,lineColor,fillColor,lineWidth])},drawPieSlice:function(x,y,radius,startAngle,endAngle,lineColor,fillColor){return this._genShape("PieSlice",[x,y,radius,startAngle,endAngle,lineColor,fillColor])},drawRect:function(x,y,width,height,lineColor,fillColor){return this._genShape("Rect",[x,y,width,height,lineColor,fillColor])},getElement:function(){return this.canvas},getLastShapeId:function(){return this.lastShapeId},reset:function(){alert("reset not implemented")},_insert:function(el,target){$(target).html(el)},_calculatePixelDims:function(width,height,canvas){var match;match=this._pxregex.exec(height);if(match){this.pixelHeight=match[1]}else{this.pixelHeight=$(canvas).height()}match=this._pxregex.exec(width);if(match){this.pixelWidth=match[1]}else{this.pixelWidth=$(canvas).width()}},_genShape:function(shapetype,shapeargs){var id=shapeCount++;shapeargs.unshift(id);return new VShape(this,id,shapetype,shapeargs)},appendShape:function(shape){alert("appendShape not implemented")},replaceWithShape:function(shapeid,shape){alert("replaceWithShape not implemented")},insertAfterShape:function(shapeid,shape){alert("insertAfterShape not implemented")},removeShapeId:function(shapeid){alert("removeShapeId not implemented")},getShapeAt:function(el,x,y){alert("getShapeAt not implemented")},render:function(){alert("render not implemented")}});VCanvas_canvas=createClass(VCanvas_base,{init:function(width,height,target,interact){VCanvas_canvas._super.init.call(this,width,height,target);this.canvas=document.createElement("canvas");if(target[0]){target=target[0]}$.data(target,"_jqs_vcanvas",this);$(this.canvas).css({display:"inline-block",width:width,height:height,verticalAlign:"top"});this._insert(this.canvas,target);this._calculatePixelDims(width,height,this.canvas);this.canvas.width=this.pixelWidth;this.canvas.height=this.pixelHeight;this.interact=interact;this.shapes={};this.shapeseq=[];this.currentTargetShapeId=undefined;$(this.canvas).css({width:this.pixelWidth,height:this.pixelHeight})},_getContext:function(lineColor,fillColor,lineWidth){var context=this.canvas.getContext("2d");if(lineColor!==undefined){context.strokeStyle=lineColor}context.lineWidth=lineWidth===undefined?1:lineWidth;if(fillColor!==undefined){context.fillStyle=fillColor}return context},reset:function(){var context=this._getContext();context.clearRect(0,0,this.pixelWidth,this.pixelHeight);this.shapes={};this.shapeseq=[];this.currentTargetShapeId=undefined},_drawShape:function(shapeid,path,lineColor,fillColor,lineWidth){var context=this._getContext(lineColor,fillColor,lineWidth),i,plen;context.beginPath();context.moveTo(path[0][0]+.5,path[0][1]+.5);for(i=1,plen=path.length;i<plen;i++){context.lineTo(path[i][0]+.5,path[i][1]+.5)}if(lineColor!==undefined){context.stroke()}if(fillColor!==undefined){context.fill()}if(this.targetX!==undefined&&this.targetY!==undefined&&context.isPointInPath(this.targetX,this.targetY)){this.currentTargetShapeId=shapeid}},_drawCircle:function(shapeid,x,y,radius,lineColor,fillColor,lineWidth){var context=this._getContext(lineColor,fillColor,lineWidth);context.beginPath();context.arc(x,y,radius,0,2*Math.PI,false);if(this.targetX!==undefined&&this.targetY!==undefined&&context.isPointInPath(this.targetX,this.targetY)){this.currentTargetShapeId=shapeid}if(lineColor!==undefined){context.stroke()}if(fillColor!==undefined){context.fill()}},_drawPieSlice:function(shapeid,x,y,radius,startAngle,endAngle,lineColor,fillColor){var context=this._getContext(lineColor,fillColor);context.beginPath();context.moveTo(x,y);context.arc(x,y,radius,startAngle,endAngle,false);context.lineTo(x,y);context.closePath();if(lineColor!==undefined){context.stroke()}if(fillColor){context.fill()}if(this.targetX!==undefined&&this.targetY!==undefined&&context.isPointInPath(this.targetX,this.targetY)){this.currentTargetShapeId=shapeid}},_drawRect:function(shapeid,x,y,width,height,lineColor,fillColor){return this._drawShape(shapeid,[[x,y],[x+width,y],[x+width,y+height],[x,y+height],[x,y]],lineColor,fillColor)},appendShape:function(shape){this.shapes[shape.id]=shape;this.shapeseq.push(shape.id);this.lastShapeId=shape.id;return shape.id},replaceWithShape:function(shapeid,shape){var shapeseq=this.shapeseq,i;this.shapes[shape.id]=shape;for(i=shapeseq.length;i--;){if(shapeseq[i]==shapeid){shapeseq[i]=shape.id}}delete this.shapes[shapeid]},replaceWithShapes:function(shapeids,shapes){var shapeseq=this.shapeseq,shapemap={},sid,i,first;for(i=shapeids.length;i--;){shapemap[shapeids[i]]=true}for(i=shapeseq.length;i--;){sid=shapeseq[i];if(shapemap[sid]){shapeseq.splice(i,1);delete this.shapes[sid];first=i}}for(i=shapes.length;i--;){shapeseq.splice(first,0,shapes[i].id);this.shapes[shapes[i].id]=shapes[i]}},insertAfterShape:function(shapeid,shape){var shapeseq=this.shapeseq,i;for(i=shapeseq.length;i--;){if(shapeseq[i]===shapeid){shapeseq.splice(i+1,0,shape.id);this.shapes[shape.id]=shape;return}}},removeShapeId:function(shapeid){var shapeseq=this.shapeseq,i;for(i=shapeseq.length;i--;){if(shapeseq[i]===shapeid){shapeseq.splice(i,1);break}}delete this.shapes[shapeid]},getShapeAt:function(el,x,y){this.targetX=x;this.targetY=y;this.render();return this.currentTargetShapeId},render:function(){var shapeseq=this.shapeseq,shapes=this.shapes,shapeCount=shapeseq.length,context=this._getContext(),shapeid,shape,i;context.clearRect(0,0,this.pixelWidth,this.pixelHeight);for(i=0;i<shapeCount;i++){shapeid=shapeseq[i];shape=shapes[shapeid];this["_draw"+shape.type].apply(this,shape.args)}if(!this.interact){this.shapes={};this.shapeseq=[]}}});VCanvas_vml=createClass(VCanvas_base,{init:function(width,height,target){var groupel;VCanvas_vml._super.init.call(this,width,height,target);if(target[0]){target=target[0]}$.data(target,"_jqs_vcanvas",this);this.canvas=document.createElement("span");$(this.canvas).css({display:"inline-block",position:"relative",overflow:"hidden",width:width,height:height,margin:"0px",padding:"0px",verticalAlign:"top"});this._insert(this.canvas,target);this._calculatePixelDims(width,height,this.canvas);this.canvas.width=this.pixelWidth;this.canvas.height=this.pixelHeight;groupel='<v:group coordorigin="0 0" coordsize="'+this.pixelWidth+" "+this.pixelHeight+'"'+' style="position:absolute;top:0;left:0;width:'+this.pixelWidth+"px;height="+this.pixelHeight+'px;"></v:group>';this.canvas.insertAdjacentHTML("beforeEnd",groupel);this.group=$(this.canvas).children()[0];this.rendered=false;this.prerender=""},_drawShape:function(shapeid,path,lineColor,fillColor,lineWidth){var vpath=[],initial,stroke,fill,closed,vel,plen,i;for(i=0,plen=path.length;i<plen;i++){vpath[i]=""+path[i][0]+","+path[i][1]}initial=vpath.splice(0,1);lineWidth=lineWidth===undefined?1:lineWidth;stroke=lineColor===undefined?' stroked="false" ':' strokeWeight="'+lineWidth+'px" strokeColor="'+lineColor+'" ';fill=fillColor===undefined?' filled="false"':' fillColor="'+fillColor+'" filled="true" ';closed=vpath[0]===vpath[vpath.length-1]?"x ":"";vel='<v:shape coordorigin="0 0" coordsize="'+this.pixelWidth+" "+this.pixelHeight+'" '+' id="jqsshape'+shapeid+'" '+stroke+fill+' style="position:absolute;left:0px;top:0px;height:'+this.pixelHeight+"px;width:"+this.pixelWidth+'px;padding:0px;margin:0px;" '+' path="m '+initial+" l "+vpath.join(", ")+" "+closed+'e">'+" </v:shape>";return vel},_drawCircle:function(shapeid,x,y,radius,lineColor,fillColor,lineWidth){var stroke,fill,vel;x-=radius;y-=radius;stroke=lineColor===undefined?' stroked="false" ':' strokeWeight="'+lineWidth+'px" strokeColor="'+lineColor+'" ';fill=fillColor===undefined?' filled="false"':' fillColor="'+fillColor+'" filled="true" ';vel="<v:oval "+' id="jqsshape'+shapeid+'" '+stroke+fill+' style="position:absolute;top:'+y+"px; left:"+x+"px; width:"+radius*2+"px; height:"+radius*2+'px"></v:oval>';return vel},_drawPieSlice:function(shapeid,x,y,radius,startAngle,endAngle,lineColor,fillColor){var vpath,startx,starty,endx,endy,stroke,fill,vel;if(startAngle===endAngle){return""}if(endAngle-startAngle===2*Math.PI){startAngle=0;endAngle=2*Math.PI}startx=x+Math.round(Math.cos(startAngle)*radius);starty=y+Math.round(Math.sin(startAngle)*radius);endx=x+Math.round(Math.cos(endAngle)*radius);endy=y+Math.round(Math.sin(endAngle)*radius);if(startx===endx&&starty===endy){if(endAngle-startAngle<Math.PI){return""}startx=endx=x+radius;starty=endy=y}if(startx===endx&&starty===endy&&endAngle-startAngle<Math.PI){return""}vpath=[x-radius,y-radius,x+radius,y+radius,startx,starty,endx,endy];stroke=lineColor===undefined?' stroked="false" ':' strokeWeight="1px" strokeColor="'+lineColor+'" ';fill=fillColor===undefined?' filled="false"':' fillColor="'+fillColor+'" filled="true" ';vel='<v:shape coordorigin="0 0" coordsize="'+this.pixelWidth+" "+this.pixelHeight+'" '+' id="jqsshape'+shapeid+'" '+stroke+fill+' style="position:absolute;left:0px;top:0px;height:'+this.pixelHeight+"px;width:"+this.pixelWidth+'px;padding:0px;margin:0px;" '+' path="m '+x+","+y+" wa "+vpath.join(", ")+' x e">'+" </v:shape>";return vel},_drawRect:function(shapeid,x,y,width,height,lineColor,fillColor){return this._drawShape(shapeid,[[x,y],[x,y+height],[x+width,y+height],[x+width,y],[x,y]],lineColor,fillColor)},reset:function(){this.group.innerHTML=""},appendShape:function(shape){var vel=this["_draw"+shape.type].apply(this,shape.args);if(this.rendered){this.group.insertAdjacentHTML("beforeEnd",vel)}else{this.prerender+=vel}this.lastShapeId=shape.id;return shape.id},replaceWithShape:function(shapeid,shape){var existing=$("#jqsshape"+shapeid),vel=this["_draw"+shape.type].apply(this,shape.args);existing[0].outerHTML=vel},replaceWithShapes:function(shapeids,shapes){var existing=$("#jqsshape"+shapeids[0]),replace="",slen=shapes.length,i;for(i=0;i<slen;i++){replace+=this["_draw"+shapes[i].type].apply(this,shapes[i].args)}existing[0].outerHTML=replace;for(i=1;i<shapeids.length;i++){$("#jqsshape"+shapeids[i]).remove()}},insertAfterShape:function(shapeid,shape){var existing=$("#jqsshape"+shapeid),vel=this["_draw"+shape.type].apply(this,shape.args);existing[0].insertAdjacentHTML("afterEnd",vel)},removeShapeId:function(shapeid){var existing=$("#jqsshape"+shapeid);this.group.removeChild(existing[0])},getShapeAt:function(el,x,y){var shapeid=el.id.substr(8);return shapeid},render:function(){if(!this.rendered){this.group.innerHTML=this.prerender;this.rendered=true}}})})})(document,Math);

