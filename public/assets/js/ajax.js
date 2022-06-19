function search(name){
    $.ajax({
            url: "/",
            type: "post",
            data: $("#form-search").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$(document).ready(function(){

    search();

    $("#search").keyup(function(){
        var nome = $(this).val();
        if( nome != ''){
            search(nome);
            $('#pokemon-list-names').html(nome);
        }
        else{
            search(nome);
            $('#pokemon-list-names').html('');
        }
        
    });

    $( "#btn-all" ).click(function() {
        search();
   }); 

    
});



//Functions to control each type of pokemons on filter
//if i had done with a select i didn't need to make many fucntions
function water(){
    $.ajax({
            url: "/water",
            type: "get",
            data: $("#form-water").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-water" ).click(function() {
     water();
});


function fire(){
    $.ajax({
            url: "/fire",
            type: "get",
            data: $("#form-fire").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-fire" ).click(function() {
     fire();
});


function grass(){
    $.ajax({
            url: "/grass",
            type: "get",
            data: $("#form-grass").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-grass" ).click(function() {
     grass();
});

function ground(){
    $.ajax({
            url: "/ground",
            type: "get",
            data: $("#form-ground").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-ground" ).click(function() {
     ground();
});

function rock(){
    $.ajax({
            url: "/rock",
            type: "get",
            data: $("#form-rock").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-rock" ).click(function() {
     rock();
});


function steel(){
    $.ajax({
            url: "/steel",
            type: "get",
            data: $("#form-steel").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-steel" ).click(function() {
     steel();
});

function ice(){
    $.ajax({
            url: "/ice",
            type: "get",
            data: $("#form-ice").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-ice" ).click(function() {
     ice();
});

function electric(){
    $.ajax({
            url: "/electric",
            type: "get",
            data: $("#form-electric").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-electric" ).click(function() {
     electric();
});

function dragon(){
    $.ajax({
            url: "/dragon",
            type: "get",
            data: $("#form-dragon").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-dragon" ).click(function() {
     dragon();
});

function ghost(){
    $.ajax({
            url: "/ghost",
            type: "get",
            data: $("#form-ghost").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-ghost" ).click(function() {
     ghost();
});

function psychic(){
    $.ajax({
            url: "/psychic",
            type: "get",
            data: $("#form-psychic").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-psychic" ).click(function() {
     psychic();
});

function normal(){
    $.ajax({
            url: "/normal",
            type: "get",
            data: $("#form-normal").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-normal" ).click(function() {
     normal();
});

function fighting(){
    $.ajax({
            url: "/fighting",
            type: "get",
            data: $("#form-fighting").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-fighting" ).click(function() {
     fighting();
});

function poison(){
    $.ajax({
            url: "/poison",
            type: "get",
            data: $("#form-poison").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-poison" ).click(function() {
     poison();
});

function bug(){
    $.ajax({
            url: "/bug",
            type: "get",
            data: $("#form-bug").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-bug" ).click(function() {
     bug();
});


function flying(){
    $.ajax({
            url: "/flying",
            type: "get",
            data: $("#form-flying").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-flying" ).click(function() {
     flying();
});

function dark(){
    $.ajax({
            url: "/dark",
            type: "get",
            data: $("#form-dark").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-dark" ).click(function() {
     dark();
});

function fairy(){
    $.ajax({
            url: "/fairy",
            type: "get",
            data: $("#form-fairy").serialize(),
            success: function(data){
                $("#pokemon-list-names").html(data);
                main();
            }
        });
    }

$( "#btn-fairy" ).click(function() {
     fairy();
});

