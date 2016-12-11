function init()
{
	chat = document.getElementById('chat');
	msg = document.getElementById('msg');
	user = prompt('Enter username');
	returnKey = document.getElementById('return');
	monitor();
}

function monitor()
{
	var e = new EventSource('monitor.php');
	e.addEventListener('chatmsg', update);
	e.onerror = handle;
}

function update(event)
{
	var div = document.createElement('div');
	div.innerHTML = event.data + '<br />';
	chat.appendChild(div);
}

function save()
{
	msgText = msg.value;
	if (msgText)
	{
		msgobj = {'user': user, 'msg': msgText};
		$.post('save.php', msgobj, clear);
	}
}

function clear()
{
	msg.value = '';
}

function handle()
{
	monitor();
}

function sendReturn()
{
	if (returnKey.checked && event.keyCode == 13)
		save();
}