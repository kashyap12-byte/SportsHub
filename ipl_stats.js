
function requestData()
{
    const url = "ipl_stats.json";

	// Create a new XMLHttpRequest object
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4) {
			loadRuns(xmlhttp);
		}
	}
	// Open the object with the filename
	xmlhttp.open("GET", url, true);
	// Send the request
	xmlhttp.send(null);
}

function loadRuns(xmlhttp)
{
    
    var jsondoc = JSON.parse(xmlhttp.responseText);
    console.log(jsondoc);
    var stats = jsondoc.stats.info;
    var table = document.getElementById("ipl_stats_table");
    for(var j = 0; j < stats.length; j++) 
    {
        var row = table.insertRow(-1);
        var position = row.insertCell(-1);
        position.innerHTML = stats[j].POS;
        var player_name = row.insertCell(-1);
        player_name.innerHTML = stats[j].PLAYER;
        var matches = row.insertCell(-1);
        matches.innerHTML = stats[j].MAT;
        var innings = row.insertCell(-1);
        innings.innerHTML = stats[j].INN;
        var notout = row.insertCell(-1);
        notout.innerHTML = stats[j].NO;
        var totruns = row.insertCell(-1);
        totruns.innerHTML = stats[j].RUNS;
        var hscore = row.insertCell(-1);
        hscore.innerHTML = stats[j].HS;
        var average = row.insertCell(-1);
        average.innerHTML = stats[j].AVG;
        var bfaced = row.insertCell(-1);
        bfaced.innerHTML = stats[j].BF;
        var srate = row.insertCell(-1);
        srate.innerHTML = stats[j].SR;
        var cen = row.insertCell(-1);
        cen.innerHTML = stats[j].CENTURY;
        var halfcen = row.insertCell(-1);
        halfcen.innerHTML = stats[j].HALF_CENTURY;
        var four = row.insertCell(-1);
        four.innerHTML = stats[j].FOURS;
        var six = row.insertCell(-1);
        six.innerHTML = stats[j].SIXES;
    }

}

