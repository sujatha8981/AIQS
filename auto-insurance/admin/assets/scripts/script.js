// JavaScript Document
"use strict";


// Tooltips Initialization
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    }) ;

jQuery(document).ready(function() {

     //Input Maxlengths
     $('textarea').maxlength({
        threshold: 150,
        placement: 'top-right',
        warningClass: "badge teal",
        limitReachedClass: "badge badge-danger",
        separator: ' / ',
        preText: ' ',
        postText: ' ',
        validate: true
    });
    $('input.name25').maxlength({
        alwaysShow: true,
        threshold: 15,
        placement: 'right',
        warningClass: "badge teal",
        limitReachedClass: "badge badge-danger",
        separator: ' / ',
        preText: ' ',
        postText: ' ',
        validate: true
    });
	 // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#agent_date_of_birth').datepicker({
                autoclose: true,
                todayHighlight: true
            });
    // Data Tables
            $('#view_agent_table').DataTable({
                keys: true,
                responsive: true,
                "order": [[o, 'asc']],
                "scrollY": "200px",
                "scrollCollapse": true,
                "columns": [
                    {"width": "20%"},null,null,null
                ],
                "pagingType": "simple_numbers"
            });
            $('.dataTables_length').addClass('bs-select');
            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});
    //============================navbar==================================
    //hambruger icon
        $('.third-button').on('click', function () {
            $('.animated-icon3').toggleClass('open');
        });
           //navbar change color on scroll
    $(function () {
        $(".sticky").sticky({
            topSpacing: 90,
            zIndex: 2,
            stopper: "#footer",
            stickyClass: ['navbar-dark', 'mdb-color'],
        });
    });





    // Fade in of logo
    function logo_reload() {
        location.reload();
     }
//signin and signup modals
function signin(){
	document.getElementById('signin-tab').classList.add("show");
    document.getElementById('signin-tab').classList.add("active");
    document.getElementById('signup-tab').classList.remove("show");
    document.getElementById('signup-tab').classList.remove("active");
}
function signup(){
	document.getElementById('signup-tab').classList.add("show");
    document.getElementById('signup-tab').classList.add("active");
    document.getElementById('signin-tab').classList.remove("show");
    document.getElementById('signin-tab').classList.remove("active");
}

//vehicle bar chart in reports
new CharacterData(document.getElementById("vehicle_bar_chart"), {
    "type": "horizontalBar",
    "data": {
        "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
        "datasets": [{
            "label": "Vehicle Reports",
            "data": [22,33,55,12,86,23,14],
            "fill": false,
            "backgroundColor": ["rgba(255,99,132,0.2)", "rgba(255,159,64,0.2)", "rgba(255,205,86,0.2)", "rgba(75,192,192,0.2)", "rgba(54, 162,235,0.2)","rgba(153, 102,255,0.2)", "rgba(201,203,207,0.2)"],
            "borderColor": ["rgb(255,99,132)", "rgb(255,159,64)", "rgb(255,205,86)", "rgb(75,192,192)", "rgb(54,162,235)", "rgb(153,102,255)", "rgb(201,203,207)"],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "xAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
});


