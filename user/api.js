function getId(name,key) {
	id = '';
  	var name_lower = name.toLowerCase();
	$.ajax({
		url:"https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/" + name + "?api_key=" + key,
		async: false
	}).done(function(json) {
		id = json[name_lower].id;
	});
	return id;
}

function getTier(id,key) {
	var tier = '';
	$.ajax({
		url:"https://na.api.pvp.net/api/lol/na/v2.2/matchhistory/" + id + "?api_key=" + key,
		async: false
	}).done(function(json) {
		 tier = json.matches[0].participants[0].highestAchievedSeasonTier;
	});

	return tier;
}
