// perhitungan antar wilayah waktu di Indonesia
// by: @rzwibowo

function salinMenit(){
			document.getElementById("menit-B").value = document.getElementById("menit-A").value;
		}
		function hitungJam(){
			if (document.getElementById("kota-A").value==""
				||
				document.getElementById("kota-A").value==null){
				document.getElementById("kota-B").value="";
			}
			if (document.getElementById("kota-A").value==document.getElementById("kota-B").value){
				document.getElementById("jam-B").value=document.getElementById("jam-A").value;
			}
			if (document.getElementById("kota-A").value=="WIB"
				&&
				document.getElementById("kota-B").value=="WITA"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)+1;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
			if (document.getElementById("kota-A").value=="WIB"
				&&
				document.getElementById("kota-B").value=="WIT"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)+2;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
			if (document.getElementById("kota-A").value=="WITA"
				&&
				document.getElementById("kota-B").value=="WIT"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)+1;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
			if (document.getElementById("kota-A").value=="WIT"
				&&
				document.getElementById("kota-B").value=="WITA"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)-1;
				if(document.getElementById("jam-B").value<0){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)+24;
				}
			}
			if (document.getElementById("kota-A").value=="WIT"
				&&
				document.getElementById("kota-B").value=="WIB"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)-2;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
			if (document.getElementById("kota-A").value=="WITA"
				&&
				document.getElementById("kota-B").value=="WIB"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)-1;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
		}