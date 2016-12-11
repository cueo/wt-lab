function init()
{
	outer = document.getElementById('outer');
	inner = document.getElementById('inner');
	inner.style.left = document.body.offsetWidth - 20 + 'px';
	scroll();
	fetchNews();
}

function fetchNews()
{
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = update;
	xhr.open('GET', 'news.php', true);
	xhr.send();
	setTimeout(updateNews, 15 * 60 * 1000);
}

function update()
{
	if (xhr.readyState == 4 && xhr.status == 200)
	{
		inner.innerHTML = '';
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
			inner.innerHTML += ' | ';
			inner.appendChild(a);
			inner.innerHTML += ' | ';
		}
	}
}

function updateNews()
{
	xhr.abort();
	fetchNews();
}

function scroll()
{
	left = inner.offsetLeft;
	width = inner.offsetWidth;
	offset = left + width;
	if (offset >= 0)
		inner.style.left = left - 20 + 'px';	// if the scrolling is in the opposite direction, increase 20 to a greater value
	else
		inner.style.left = document.body.offsetWidth - 10 + 'px';
	scroller = setTimeout(scroll, 100);
}

function stop()
{
	clearTimeout(scroller);
}