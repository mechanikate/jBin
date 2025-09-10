document.addEventListener("keydown", e=>{
	let txt = document.getElementById("txt");
	if(e.keyCode === 9 && !e.shiftKey) {
		e.preventDefault();
		let v = txt.value, s = txt.selectionStart, end = txt.selectionEnd;
		txt.value = v.substring(0,s)+"\t"+v.substring(end); 
		txt.selectionStart = txt.selectionEnd = s+1;
		return false;
	}
	if(e.keyCode === 9 && e.shiftKey) {
		e.preventDefault();
		let v = txt.value, s = Math.max(0,txt.selectionStart-1), end = Math.max(0,txt.selectionEnd-1);
		console.log(s,end,v.substring(0,s),v.substring(end));
		let prev = v;
		if(v.substring(end).search(/\t/) < 0) return false;
		txt.value = v.substring(0,s)+v.substring(end).replace(/\t/, "");
		txt.selectionStart = txt.selectionEnd = s;
		return false;
	}
	if (e.ctrlKey && e.which == 83) {
		e.preventDefault();
		if(e.shiftKey) document.getElementById("rawsetting").value = "true";
		document.getElementById("submitform").submit();
	} else {
		document.getElementById("bottom").innerHTML = `jBin <a href='https://matthy.dev/jbin/storage/LICENSE.html'>(C)</a> |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${document.getElementById("txt").value.length} B used | <a href="javascript:document.getElementById('submitform').submit();">save</a> | <a href="javascript:document.getElementById('rawsetting').value = 'true';javascript:document.getElementById('submitform').submit();">save raw</a>`;
	}
}, false);
window.addEventListener("pageshow", () => rawsetting.value = "");
