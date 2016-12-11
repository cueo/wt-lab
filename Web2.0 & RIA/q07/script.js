function init()
{
	feeds = document.getElementById('feeds');
	query = document.getElementById('search');
}

function search()
{
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = update;
	xhr.open('GET', 'feeds.php?query=' + query.value, true);
	xhr.send();
}

function update()
{
	if (xhr.readyState == 4 && xhr.status == 200)
	{
		feeds.innerHTML = '';
		feeds.style.display = 'block';
		var node = this.responseXML.documentElement;
		/*
			<item>
				<title />
				<link />
			</item>
		*/
		items = node.getElementsByTagName('item');
		for (var i = 0; i < 5; ++i)
		{
			link = items[i].getElementsByTagName('link')[0].firstChild.nodeValue;
			title = items[i].getElementsByTagName('title')[0].firstChild.nodeValue;
			a = document.createElement('a');
			a.href = link;
			a.innerHTML = title;
			feeds.appendChild(a);
			feeds.innerHTML += '<hr />'
		}
	}
}