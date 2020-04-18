// Team A - Box 1
function fill1(Value) {
    $('#searcha').val(Value);
    $('#displaya').hide();
}

$(document).ready(function() {
    $("#searcha").keyup(function() {
        var name = $('#searcha').val();
        if (name == "") {
            $("#displaya").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    searcha: name
                },
                success: function(html) {

                    $("#displaya").html(html).show();
                }
            });
        }
    });
});


// Team B - Box 1
function fill2(Value) {
    $('#searchb').val(Value);
    $('#displayb').hide();
}

$(document).ready(function() {
    $("#searchb").keyup(function() {
        var name = $('#searchb').val();
        if (name == "") {
            $("#displayb").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {

                    searchb: name
                },
                success: function(html) {

                    $("#displayb").html(html).show();
                }
            });
        }
    });
});


// Team A - Box 2
function fill3(Value) {
    $('#searchc').val(Value);
    $('#displaya').hide();
}

$(document).ready(function() {
    $("#searchc").keyup(function() {
        var name = $('#searchc').val();
        if (name == "") {
            $("#displaya").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {

                    searchc: name
                },
                success: function(html) {

                    $("#displaya").html(html).show();
                }
            });
        }
    });
});



// Team B - Box 2
function fill4(Value) {
    $('#searchd').val(Value);
    $('#displayb').hide();
}

$(document).ready(function() {
    $("#searchd").keyup(function() {
        var name = $('#searchd').val();
        if (name == "") {
            $("#displayb").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {

                    searchd: name
                },
                success: function(html) {

                    $("#displayb").html(html).show();
                }
            });
        }
    });
});


// Team A - Box 3
function fill5(Value) {
    $('#searche').val(Value);
    $('#displaya').hide();
}

$(document).ready(function() {
    $("#searche").keyup(function() {
        var name = $('#searche').val();
        if (name == "") {
            $("#displaya").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {

                    searche: name
                },
                success: function(html) {

                    $("#displaya").html(html).show();
                }
            });
        }
    });
});



// Team B - Box 3
function fill6(Value) {
    $('#searchf').val(Value);
    $('#displayb').hide();
}

$(document).ready(function() {
    $("#searchf").keyup(function() {
        var name = $('#searchf').val();
        if (name == "") {
            $("#displayb").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {

                    searchf: name
                },
                success: function(html) {

                    $("#displayb").html(html).show();
                }
            });
        }
    });
});







// stat team a - search a
function fillscore_a(Value) {
    $('#stat_team_a_search_a').val(Value);
    $('#displaya').hide();
}

$(document).ready(function() {
    $("#searcha").keyup(function() {
        var name = $('#searcha').val();
        if (name == "") {
            $("#displaya").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    searcha: name
                },
                success: function(html) {

                    $("#displaya").html(html).show();
                }
            });
        }
    });
});


// stat team b - search b
function fillscore_b(Value) {
    $('#stat_team_b_search_a').val(Value);
    $('#displayb').hide();
}

$(document).ready(function() {
    $("#searchb").keyup(function() {
        var name = $('#searchb').val();
        if (name == "") {
            $("#displayb").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    searchb: name
                },
                success: function(html) {

                    $("#displayb").html(html).show();
                }
            });
        }
    });
});


// stat team a - search c
function fillscore_c(Value) {
    $('#stat_team_a_search_b').val(Value);
    $('#displaya').hide();
}

$(document).ready(function() {
    $("#searchc").keyup(function() {
        var name = $('#searchc').val();
        if (name == "") {
            $("#displaya").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    seasearchcrcha: name
                },
                success: function(html) {

                    $("#displaya").html(html).show();
                }
            });
        }
    });
});



// stat team b - search d
function fillscore_d(Value) {
    $('#stat_team_b_search_b').val(Value);
    $('#displayb').hide();
}

$(document).ready(function() {
    $("#searchd").keyup(function() {
        var name = $('#searchd').val();
        if (name == "") {
            $("#displayb").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    searchd: name
                },
                success: function(html) {

                    $("#displayb").html(html).show();
                }
            });
        }
    });
});

// stat team a - search e
function fillscore_e(Value) {
    $('#stat_team_a_search_c').val(Value);
    $('#displaya').hide();
}

$(document).ready(function() {
    $("#searche").keyup(function() {
        var name = $('#searche').val();
        if (name == "") {
            $("#displaya").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    searche: name
                },
                success: function(html) {

                    $("#displaya").html(html).show();
                }
            });
        }
    });
});


// stat team b - search f
function fillscore_f(Value) {
    $('#stat_team_b_search_c').val(Value);
    $('#displayb').hide();
}

$(document).ready(function() {
    $("#searchf").keyup(function() {
        var name = $('#searchf').val();
        if (name == "") {
            $("#displayb").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    searchf: name
                },
                success: function(html) {

                    $("#displayb").html(html).show();
                }
            });
        }
    });
});

function analyze() {

    if (isNaN(parseFloat(stat_team_a_search_a.value)))
        var stat_team_a_search_a_calc = 0;
    else var stat_team_a_search_a_calc = parseFloat(stat_team_a_search_a.value);

    if (isNaN(parseFloat(stat_team_b_search_a.value)))
        var stat_team_b_search_a_calc = 0;
    else var stat_team_b_search_a_calc = parseFloat(stat_team_b_search_a.value);

    if (isNaN(parseFloat(stat_team_a_search_b.value)))
        var stat_team_a_search_b_calc = 0;
    else var stat_team_a_search_b_calc = parseFloat(stat_team_a_search_b.value);

    if (isNaN(parseFloat(stat_team_b_search_b.value)))
        var stat_team_b_search_b_calc = 0;
    else var stat_team_b_search_b_calc = parseFloat(stat_team_b_search_b.value);

    if (isNaN(parseFloat(stat_team_a_search_c.value)))
        var stat_team_a_search_c_calc = 0;
    else var stat_team_a_search_c_calc = parseFloat(stat_team_a_search_c.value);

    if (isNaN(parseFloat(stat_team_b_search_c.value)))
        var stat_team_b_search_c_calc = 0;
    else var stat_team_b_search_c_calc = parseFloat(stat_team_b_search_c.value);

    var team_a_total = stat_team_a_search_a_calc + stat_team_a_search_b_calc + stat_team_a_search_c_calc;
    var team_b_total = stat_team_b_search_a_calc + stat_team_b_search_b_calc + stat_team_b_search_c_calc;

    if (team_a_total > team_b_total)
        alert('Team A is the trade winner!');
    else if (team_a_total < team_b_total)
        alert('Team B is the trade winner');
    else alert('The trade is a tie');


}

/*document.getElementById("demo").innerHTML = analysis;
save for possible use in a div
*/