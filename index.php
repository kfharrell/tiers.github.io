<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Smite Tier List</title>
    <link rel="shortcut icon" type="ico" href="http://pcwallart.com/images/smite-logo-transparent-wallpaper-3.jpg">
    <link rel="stylesheet" type="text/css" href="http://www.bamfroldy.com/v2/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

    <script>
        function allowDrop(event) {
            event.preventDefault();
        }
        function drag(event, id) {
            var img1 = document.getElementById(id);
            event.dataTransfer.setData("osaicon", img1.id);
            img1.style.opacity = 0;
        }
        function drop(event)
        {
            var data = event.dataTransfer.getData("osaicon");
            console.log(event.target.nodeName)
            if(event.target.nodeName !== "IMG")
            {
                event.target.appendChild(document.getElementById(data));
            }
            else
            {
                event.target.parentNode.insertBefore(document.getElementById(data), event.target);
            }
        }
        function show(id) {
            var img1 = document.getElementById(id);
            img1.style.opacity = 1;
        }
        window.addEventListener("dragover",function(e){
            e = e || event;
            e.preventDefault();
        },false);
        window.addEventListener("drop",function(e){
            e = e || event;
            e.preventDefault();
        },false);
    </script>

</head>
<body>

<div id="top-bar">
    <input type="text" placeholder="Click to title your list! (max 50 chars)" maxlength="50">
</div>

<div id="tiers">
    <div id="ind-tier" class="t1">SS</div>
    <div class="ind-list t1"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t2">S+</div>
    <div class="ind-list t2"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t3">S</div>
    <div class="ind-list t3"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t4">S-</div>
    <div class="ind-list t4"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t5">A+</div>
    <div class="ind-list t5"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t6">A</div>
    <div class="ind-list t6"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t7">A-</div>
    <div class="ind-list t7"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t8">B</div>
    <div class="ind-list t8"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t9">C</div>
    <div class="ind-list t9"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="ind-tier" class="t10">D</div>
    <div class="ind-list t10"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</div>

<div id="god-list" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="http://www.bamfroldy.com/tiers/gods/agni.jpg" id="drag1" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" alt="">
    <img src="http://www.bamfroldy.com/tiers/gods/ahmuzencab.jpg" id="drag2" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/ahpuch.jpg" id="drag3" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/anhur.jpg" id="drag65" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/anubis.jpg" id="drag4" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/aokuang.jpg" id="drag5" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/aphrodite.jpg" id="drag6" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/apollo.jpg" id="drag7" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/arachne.jpg" id="drag8" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/ares.jpg" id="drag9" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/artemis.jpg" id="drag10" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/athena.jpg" id="drag11" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/awilix.jpg" id="drag12" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/bacchus.jpg" id="drag13" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/bakasura.jpg" id="drag14" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/bastet.jpg" id="drag15" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/bellona.jpg" id="drag16" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/cabrakan.jpg" id="drag17" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/chaac.jpg" id="drag18" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/change.jpg" id="drag19" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/chronos.jpg" id="drag20" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/cupid.jpg" id="drag21" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/fenrir.jpg" id="drag22" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/freya.jpg" id="drag23" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/geb.jpg" id="drag24" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/guanyu.jpg" id="drag25" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/hades.jpg" id="drag26" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/hebo.jpg" id="drag27" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/hel.jpg" id="drag28" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/hercules.jpg" id="drag29" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/houyi.jpg" id="drag30" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/hunbatz.jpg" id="drag31" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/isis.jpg" id="drag32" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/janus.jpg" id="drag33" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/kali.jpg" id="drag34" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/khepri.jpg" class="new" id="drag68" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/kumbakharna.jpg" id="drag35" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/kukulkan.jpg" id="drag66" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/loki.jpg" id="drag36" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/medusa.jpg" id="drag37" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/mercury.jpg" id="drag38" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/neith.jpg" id="drag39" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/nemesis.jpg" id="drag40" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/nezha.jpg" id="drag41" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/nox.jpg" id="drag42" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/nuwa.jpg" id="drag43" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/odin.jpg" id="drag44" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/osiris.jpg" id="drag45" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/poseidon.jpg" id="drag46" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/ra.jpg" id="drag47" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/rama.jpg" id="drag48" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/ratatoskr.jpg" id="drag49" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/ravana.jpg" id="drag50" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/scylla.jpg" id="drag51" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/serqet.jpg" id="drag52" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/sobek.jpg" id="drag53" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/sunwukong.jpg" id="drag54" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/sylvanus.jpg" id="drag55" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/thanatos.jpg" id="drag56" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/thor.jpg" id="drag67" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/tyr.jpg" id="drag57" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/ullr.jpg" id="drag58" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/vamana.jpg" id="drag59" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/vulcan.jpg" id="drag60" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/xbalanque.jpg" id="drag61" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/ymir.jpg" id="drag62" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/zeus.jpg" id="drag63" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img src="http://www.bamfroldy.com/tiers/gods/zhongqui.jpg" id="drag64" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
</div>
<div id="bottom-rightd">
    <INPUT TYPE="button" onClick="history.go(0)" VALUE="Reset"><br>
    Save feature cominng soon!
</div>