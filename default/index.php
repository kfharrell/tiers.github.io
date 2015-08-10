<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Smite Tier List</title>
    <link rel="shortcut icon" type="ico" href="http://pcwallart.com/images/smite-logo-transparent-wallpaper-3.jpg">
    <link rel="stylesheet" type="text/css" href="http://www.bamfroldy.com/tiers/default/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

</head>
<body>

<div id="top-bar">
    <input type="text" placeholder="Default list" maxlength="50" disabled="true">
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
<!--
<div id="god-list" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="http://www.bamfroldy.com/tiers/gods/agni.jpg" id="drag1">
    <img src="http://www.bamfroldy.com/tiers/gods/ahmuzencab.jpg" id="drag2">
    <img src="http://www.bamfroldy.com/tiers/gods/ahpuch.jpg" id="drag3">
    <img src="http://www.bamfroldy.com/tiers/gods/anhur.jpg" id="drag65">
    <img src="http://www.bamfroldy.com/tiers/gods/anubis.jpg" id="drag4">
    <img src="http://www.bamfroldy.com/tiers/gods/aokuang.jpg" id="drag5">
    <img src="http://www.bamfroldy.com/tiers/gods/aphrodite.jpg" id="drag6">
    <img src="http://www.bamfroldy.com/tiers/gods/apollo.jpg" id="drag7">
    <img src="http://www.bamfroldy.com/tiers/gods/arachne.jpg" id="drag8">
    <img src="http://www.bamfroldy.com/tiers/gods/ares.jpg" id="drag9">
    <img src="http://www.bamfroldy.com/tiers/gods/artemis.jpg" id="drag10">
    <img src="http://www.bamfroldy.com/tiers/gods/athena.jpg" id="drag11">
    <img src="http://www.bamfroldy.com/tiers/gods/awilix.jpg" id="drag12">
    <img src="http://www.bamfroldy.com/tiers/gods/bacchus.jpg" id="drag13">
    <img src="http://www.bamfroldy.com/tiers/gods/bakasura.jpg" id="drag14">
    <img src="http://www.bamfroldy.com/tiers/gods/bastet.jpg" id="drag15">
    <img src="http://www.bamfroldy.com/tiers/gods/bellona.jpg" id="drag16">
    <img src="http://www.bamfroldy.com/tiers/gods/cabrakan.jpg" id="drag17">
    <img src="http://www.bamfroldy.com/tiers/gods/chaac.jpg" id="drag18">
    <img src="http://www.bamfroldy.com/tiers/gods/change.jpg" id="drag19">
    <img src="http://www.bamfroldy.com/tiers/gods/chronos.jpg" id="drag20">
    <img src="http://www.bamfroldy.com/tiers/gods/cupid.jpg" id="drag21">
    <img src="http://www.bamfroldy.com/tiers/gods/fenrir.jpg" id="drag22">
    <img src="http://www.bamfroldy.com/tiers/gods/freya.jpg" id="drag23">
    <img src="http://www.bamfroldy.com/tiers/gods/geb.jpg" id="drag24">
    <img src="http://www.bamfroldy.com/tiers/gods/guanyu.jpg" id="drag25">
    <img src="http://www.bamfroldy.com/tiers/gods/hades.jpg" id="drag26">
    <img src="http://www.bamfroldy.com/tiers/gods/hebo.jpg" id="drag27">
    <img src="http://www.bamfroldy.com/tiers/gods/hel.jpg" id="drag28">
    <img src="http://www.bamfroldy.com/tiers/gods/hercules.jpg" id="drag29">
    <img src="http://www.bamfroldy.com/tiers/gods/houyi.jpg" id="drag30">
    <img src="http://www.bamfroldy.com/tiers/gods/hunbatz.jpg" id="drag31">
    <img src="http://www.bamfroldy.com/tiers/gods/isis.jpg" id="drag32">
    <img src="http://www.bamfroldy.com/tiers/gods/janus.jpg" id="drag33">
    <img src="http://www.bamfroldy.com/tiers/gods/kali.jpg" id="drag34">
    <img src="http://www.bamfroldy.com/tiers/gods/khepri.jpg" class="new" id="drag68">
    <img src="http://www.bamfroldy.com/tiers/gods/kumbakharna.jpg" id="drag35">
    <img src="http://www.bamfroldy.com/tiers/gods/kukulkan.jpg" id="drag66">
    <img src="http://www.bamfroldy.com/tiers/gods/loki.jpg" id="drag36">
    <img src="http://www.bamfroldy.com/tiers/gods/medusa.jpg" id="drag37">
    <img src="http://www.bamfroldy.com/tiers/gods/mercury.jpg" id="drag38">
    <img src="http://www.bamfroldy.com/tiers/gods/neith.jpg" id="drag39">
    <img src="http://www.bamfroldy.com/tiers/gods/nemesis.jpg" id="drag40">
    <img src="http://www.bamfroldy.com/tiers/gods/nezha.jpg" id="drag41">
    <img src="http://www.bamfroldy.com/tiers/gods/nox.jpg" id="drag42">
    <img src="http://www.bamfroldy.com/tiers/gods/nuwa.jpg" id="drag43">
    <img src="http://www.bamfroldy.com/tiers/gods/odin.jpg" id="drag44">
    <img src="http://www.bamfroldy.com/tiers/gods/osiris.jpg" id="drag45">
    <img src="http://www.bamfroldy.com/tiers/gods/poseidon.jpg" id="drag46">
    <img src="http://www.bamfroldy.com/tiers/gods/ra.jpg" id="drag47">
    <img src="http://www.bamfroldy.com/tiers/gods/rama.jpg" id="drag48">
    <img src="http://www.bamfroldy.com/tiers/gods/ratatoskr.jpg" id="drag49">
    <img src="http://www.bamfroldy.com/tiers/gods/ravana.jpg" id="drag50">
    <img src="http://www.bamfroldy.com/tiers/gods/scylla.jpg" id="drag51">
    <img src="http://www.bamfroldy.com/tiers/gods/serqet.jpg" id="drag52">
    <img src="http://www.bamfroldy.com/tiers/gods/sobek.jpg" id="drag53">
    <img src="http://www.bamfroldy.com/tiers/gods/sunwukong.jpg" id="drag54">
    <img src="http://www.bamfroldy.com/tiers/gods/sylvanus.jpg" id="drag55">
    <img src="http://www.bamfroldy.com/tiers/gods/thanatos.jpg" id="drag56">
    <img src="http://www.bamfroldy.com/tiers/gods/thor.jpg" id="drag67">
    <img src="http://www.bamfroldy.com/tiers/gods/tyr.jpg" id="drag57">
    <img src="http://www.bamfroldy.com/tiers/gods/ullr.jpg" id="drag58">
    <img src="http://www.bamfroldy.com/tiers/gods/vamana.jpg" id="drag59">
    <img src="http://www.bamfroldy.com/tiers/gods/vulcan.jpg" id="drag60">
    <img src="http://www.bamfroldy.com/tiers/gods/xbalanque.jpg" id="drag61">
    <img src="http://www.bamfroldy.com/tiers/gods/ymir.jpg" id="drag62">
    <img src="http://www.bamfroldy.com/tiers/gods/zeus.jpg" id="drag63">
    <img src="http://www.bamfroldy.com/tiers/gods/zhongqui.jpg" id="drag64">
</div>
-->
