<!--head-->
 <!doctype html>
 <html>
 <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Orange Video</title>
 <link rel="icon" href="svg/televisionfavicon.svg">
 <link href=css/style.css type="text/css" rel=stylesheet>
 <link href=css/jquery.gridster.css type="text/css" rel=stylesheet>
 <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

 <script src="javascript/jquery-3.1.1.js"></script>
 <script src="javascript/jquery-ui.js"></script>
 <script src="javascript/lodash.js"></script>

 <script src="javascript/tabs.js"></script>
 <script src="javascript/like-dislike.js"></script>
 <script src="javascript/overlay.js"></script>
 <script src="javascript/video-seek.js"></script>
 <script src="javascript/scroll.js"></script>
 <script src="javascript/gridster-extra.js"></script>

 <script>
 $(function() {
 $.scrollify({
 section : ".section-class-name",
 sectionName : "section-name"
 });
 });
 </script>

 <script>
  $(function(){ //DOM Ready
    $(".gridster ul").gridster({
        widget_margins: [10, 10],
        widget_base_dimensions: [160, 90],
        resize: {enabled: true},
        shift_widgets_up: false,
        shift_larger_widgets_down: false,
        collision: {wait_for_mouseup: true},    
        }).data('gridster');
        $('.js-seralize').on('click', function () {
        var s = gridster.serialize();
        $('#log').val(JSON.stringify(s));
        })
        });
 </script>

  <script>
  $(function(){ //DOM Ready
    $(".gridster video").gridster({
        widget_margins: [10, 10],
        widget_base_dimensions: [190, 30],
        resize: {enabled: true},
        shift_widgets_up: false,
        shift_larger_widgets_down: false,
        collision: {wait_for_mouseup: true}
        }).data('gridster');
        $('.js-seralize').on('click', function () {
        var s = gridster.serialize();
        $('#log').val(JSON.stringify(s));
        })
        });
 </script>

 <script>
  $.scrollify({
  section : "section",
  sectionName : "section-name",
  interstitialSection : "",
  easing: "easeOutExpo",
  scrollSpeed: 0.00,
  offset : 0,
  scrollbars: true,
  standardScrollElements: "",
  setHeights: true,
  overflowScroll: true,
  updateHash: true,
  touchScroll:true,
  before:function() {},
  after:function() {},
  afterResize:function() {},
  afterRender:function() {}
  });
 </script>

 <script>
 $(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
 });
 </script>

 </head>

 <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
 </script>

 <body>

<!--CHANNELPAGE-->
 <a name="channelpage"></a>
 <div class="section-class-name" data-section-name="tab1"> 
<!--channel-bar-->
 <div class="channel-bar">
 <div class="tab">

  <div class="channel-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/search2.svg" height="40" width="40">
    <span class="tooltiptext">Search</span>
   </div>
  </div>

  <div class="channel-tab-item">

  <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'London');">
  <div class="channel-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/fire2.svg" height="40" width="40"></a>
    <span class="tooltiptext">Featured</span>
   </div>
  </div>

  <div class="channel-bar-item">
   <div class="tooltip">
   <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Tokyo');">
    <input type="image" src="svg/stacks.svg" height="40" width="40"></a>
    <span class="tooltiptext">Video</span>
   </div>
  </div>

  <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Paris');">
  <div class="channel-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/list.svg" height="40" width="40"></a>
    <span class="tooltiptext">Playlist</span>
   </div>
  </div>

  <div class="channel-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/gear1.svg" height="40" width="40">
    <span class="tooltiptext">Settings</span>
   </div>
  </div>
 

 </div> 
 </div> 
 </div>
<!--featured-tab-->
 <div id="London" class="tabcontent">
  <div class="gridster">
   <ul>

    <li data-row="1" data-col="1" data-sizex="1" data-sizey="1"><img src="image/grump4.jpg" height="90" width="160"></li>
    <li data-row="1" data-col="2" data-sizex="1" data-sizey="1"><img src="image/grump5.jpg" height="90" width="160"></li>
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="1"><img src="image/grump6.jpg" height="90" width="160"></li>
    <li data-row="1" data-col="4" data-sizex="1" data-sizey="1"><img src="image/grump7.jpg" height="90" width="160"></li>
    <li data-row="2" data-col="1" data-sizex="1" data-sizey="1"><img src="image/grump8.jpg" height="90" width="160"></li>
    <li data-row="2" data-col="2" data-sizex="1" data-sizey="1"><img src="image/grump9.jpg" height="90" width="160"></li>
    <li data-row="2" data-col="3" data-sizex="1" data-sizey="1"><img src="image/grump10.jpg" height="90" width="160"></li>
    <li data-row="2" data-col="4" data-sizex="1" data-sizey="1"><img src="image/grump11.jpg" height="90" width="160"></li>

   </ul>
  </div>
 </div> 
<!--video-tab-->
 <div id="Tokyo" class="tabcontent" style="display:none;">
  <div class="thumbnail-items">
   
   <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v6.jpg" src="video/phil-vid-1.mp4"  muted="muted">
     <input type="submit" name="submit"  >
     </video>
     <div class="time-overlay"><p>10:80</p></div>
     <div class="views-overlay"><p>567k</p></div>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>
    </div>
   </div>

   <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v2.jpg" height="160" width="280" src="video/phil-vid-2.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
      <div class="time-overlay"><p>10:80</p></div>
      <div class="views-overlay"><p>567k</p></div>
     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">
     <video class="thumbnail-video" poster="image/v3.jpg" height="160" width="280" src="video/phil-vid-3.mp4" muted="muted">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

   <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v7.jpg" height="160" width="280" src="video/phil-vid-4.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="dislike"></div>
      <div id="likes"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v8.jpg" height="160" width="280" src="video/phil-vid-5.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v9.jpg" height="160" width="280" src="video/phil-vid-6.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v10.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v12.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">
     <video class="thumbnail-video" poster="image/v13.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v14.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v15.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v16.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v17.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v18.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v19.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v20.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v21.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v22.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v23.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

      <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v24.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

   <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v25.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

   <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v25.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

   <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v25.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

   <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v25.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

   <div class="thumbnail-item">
    <div class="thumnail-content">

     <video class="thumbnail-video" poster="image/v25.jpg" height="160" width="280" src="video/inkvid.mp4" muted="muted">
     <input type="submit" name="submit">
     </video>
     <div id="bar">
      <div id="likes"></div>
      <div id="dislike"></div>
     </div>
     
     

     <div class="thumbnail-title">
      <p>Quisque vitae ullamcorper tortor. Integer viverra metus.</p>
     </div>

    </div>
   </div>

  </div> 
 </div> 
<!--playlist-->
 <div id="Paris" class="tabcontent" style="display:none;">
 </div>
<!--page-bar-->
 <div class="page-bar"> 
  <div class="page-bar-items">

   <div class="pagebar-item">
    <input src="svg/box.svg" height="40" width="40" type="image" onclick="myFunction()">
   </div>
     
   <div class="pagebar-item">
    <img src="svg/user.svg" height="40" width="40">
   </div>

   <div class="tab-items">
    <div class="pagebar-item">
     <a href="#channelpage"><img src="svg/database.svg" height="40" width="40"></a>
    </div>

    <div class="pagebar-item">
     <a href="#playerpage">
     <img src="svg/television.svg" height="40" width="40"></a>
    </div>

    <div class="pagebar-item">
     <a href="#infopage"><img src="svg/info.svg" height="40" width="40"></a>
    </div>
   </div>

   <div class="pagebar-item">
    <img src="svg/search2.svg" height="40" width="40">
   </div>

   <div class="pagebar-item">
    <img src="svg/gear1.svg" height="40" width="40">
   </div>

  </div>
 </div> 
</div>
<!--PLAYERPAGE-->
 <a name="playerpage"></a>
 <div class="section-class-name" data-section-name="tab2">
<!--player-bar-->
 <div class="player-bar"> 

  <div class="player-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/play.svg" height="40" width="40" id="playpausebtn">
     <span class="tooltiptext">Play</span>
    </input>
   </div>
  </div>

  <div class="player-bar-item">
   <div class="tooltip">
    <button type="image" src="svg/fullscreen.svg" height="40" width="40" id="fullscreenbtn"><div class="btn-text">&nbsp;</div></button>
     <span class="tooltiptext">Fullscreen</span>
    </input>
   </div>
  </div>

  <div class="player-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/interlock.svg" height="40" width="40">
     <span class="tooltiptext">Shuffle</span>
    </input>
   </div>
  </div>

  <div class="player-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/list.svg" height="40" width="40" onclick="myFunction()"></button>
     <span class="tooltiptext">Playlist</span>
    </input>
   </div>
  </div>

  <div class="player-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/speedmeter.svg" height="40" width="40">
     <span class="tooltiptext">Speed</span>
    </input>
   </div>
  </div>

  <div class="player-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/volume.svg" height="40" width="40">
     <input class="tooltiptext" id="volumeslider" type="range" min="0" max="100" value="100" step="1">
     </input>
    </input>
   </div>
  </div>

  <div class="player-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/pin.svg" height="40" width="40">
     <span class="tooltiptext">Pin</span>
    </input>
   </div>
  </div>

  <div class="player-bar-item">
   <div class="tooltip">
    <input type="image" src="svg/gear.svg" height="40" width="40">
     <span class="tooltiptext">Settings</span>
    </input>
   </div>
  </div>

 </div>
<!--video-->
 <div class="video-container">

  <div class="playlist-overlay" id="overlay">
   <p>text</p>
   <div class="playlist-overlay-button">
    <input type="image" src="svg/cross.svg" height="50" width="50" onclick="myFunction()"></button>
   </div>
  </div>

  <video id="my_video" src="video/inkvid.mp4"></video>

   <div class="video-controls-bar">
    <input id="seekslider" type="range" min="0" max="100" value="0" step="1">
   </div>

   <div class="time-total">
    <span id="curtimetext">00:00</span>
   </div> 

   <div class="time-current">
    <span id="durtimetext">00:00</span>
   </div>

  </div>
<!--page-bar-->
 <div class="page-bar"> 
  <div class="page-bar-items">

   <div class="pagebar-item">
    <input src="svg/box.svg" height="40" width="40" type="image" onclick="myFunction()">
   </div>
     
   <div class="pagebar-item">
    <img src="svg/user.svg" height="40" width="40">
   </div>

   <div class="tab-items">
    <div class="pagebar-item">
     <a href="#channelpage"><img src="svg/database.svg" height="40" width="40"></a>
    </div>

    <div class="pagebar-item">
     <a href="#playerpage">
     <img src="svg/television.svg" height="40" width="40"></a>
    </div>

    <div class="pagebar-item">
     <a href="#infopage"><img src="svg/info.svg" height="40" width="40"></a>
    </div>
   </div>

   <div class="pagebar-item">
    <img src="svg/search2.svg" height="40" width="40">
   </div>

   <div class="pagebar-item">
    <img src="svg/gear1.svg" height="40" width="40">
   </div>

  </div>
 </div> 
</div>
<!--INFOPAGE-->
 <a name="infopage"></a>
 <div class="section-class-name" data-section-name="tab3">
<!--info-bar-->
 <div class="info-bar">

  <div class="player-bar-item"><img src="svg/circle.svg" height="40" width="40"></div>

  <div class="player-bar-item"><img src="svg/circle.svg" height="40" width="40"></div>

  <div class="player-bar-item"><img src="svg/circle.svg" height="40" width="40"></div>

 </div>
<div class="info-container">
<!--description-->
 <div class="description">
  <div class="description-text">
   <p>
   🎮 More Versus — <a href="">https://www.youtube.com/user/Versus?s...</a>
   <p><br>
   🎥 MORE VIDEOS
   Crash Bandicoot Versus — <a href="">https://www.youtube.com/playlist?list...</a>
   <p><br>
   <p>📺 CHANNELS<p>
   <p>Josh's Channel — <a href="">http://youtube.com/joshjepson<p></a>
   <p>Tyler's Channel — <a href="">http://youtube.com/attackingtucans<p></a>
   <p>Versus Channel — <a href="http://youtube.com/versus"><p>http://youtube.com/versus<p></a>
   <p><br>
   👕 MERCH
   Versus T-Shirts — <a href="">http://versusuniverse.spreadshirt.com</a>
   <p><br>
   🎬 CREDITS
   Endcard song "Versus" by Kovilla — 
   <a href="">https://www.youtube.com/watch?v=bogBG...</a>
   <br>
   <br>Edited by Josh Jepson — 
   <a href="">http://youtube.com/joshjepson</a>
   <p><br>

   ⚠️ INFO
   Welcome to Twilight Princess HD Versus! 
   <p><br>
   - In this series, the goal is to get to the end of the game with the fastest time. Time will be counted from the beginning of each episode to the time we stop playing, meaning that the time you see at the top of the screen and in the endslate are the most accurate representation of who is in the lead. 

   - The progress bar at the bottom shows the general order in which items may be obtained and events may be triggered.

   - This will be 100%, excluding Miiverse stamps and Poe Souls. However, the first 20 Poe Souls will be obtained for the Bottle.

   Enjoy the series! Don't forget to like and comment!-
   <p>
   <p>
   Discover more — http://youtube.com/versus
   </p>
   </div>
   <div class="social-media">
    <a href=""><div class="social-media-item"><img src="image/social-media/facebook.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/google+.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/twitter.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/deviantart.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/soundcloud.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/tumblr.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/reddit.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/youtube.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/instagram.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/wikipedia.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/snapchat.png"></div></a>
    <a href=""><div class="social-media-item"><img src="image/social-media/blogger.png"></div></a>
   </div>

 </div>
<!--stataistics-->
 <div class="statistics">
   <div class="statistics-item"><p>Text</p></div>
   <div class="statistics-item"><p>Text</p></div>
   <div class="statistics-item"><p>Text</p></div>
 </div>
<!--discussion-->
 <div class="comment-box">
  <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>

  </div>

  <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

  <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height=height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

  <div class="comment">
   <img src="image/user-jontron.jpg" height=height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

  <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height=height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

  <div class="comment">
   <img src="image/user-jontron.jpg" height="100" width="100">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

  <div class="comment">
   <img src="image/user-jontron.jpg" height="90" width="160">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="90" width="160">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="90" width="160">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="90" width="160">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

    <div class="comment">
   <img src="image/user-jontron.jpg" height="90" width="160">
   <div class="comment-text">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel nibh scelerisque tincidunt ut non libero. Nunc at lacus at ante malesuada malesuada sit amet nec ipsum. Quisque diam massa, egestas ac 
    </p>
   </div>
  </div>

 </div>
<!--PHP-->
 <?php
 $a = "textA";
 $s = "textS";
 $d = "textD";
 $f = "textF";
 ?> 
</div>
<!--page-bar-->
 <div class="page-bar"> 
  <div class="page-bar-items">

   <div class="pagebar-item">
    <input src="svg/box.svg" height="40" width="40" type="image" onclick="myFunction()">
   </div>
     
   <div class="pagebar-item">
    <img src="svg/user.svg" height="40" width="40">
   </div>

   <div class="tab-items">
    <div class="pagebar-item">
     <a href="#channelpage"><img src="svg/database.svg" height="40" width="40"></a>
    </div>

    <div class="pagebar-item">
     <a href="#playerpage">
     <img src="svg/television.svg" height="40" width="40"></a>
    </div>

    <div class="pagebar-item">
     <a href="#infopage"><img src="svg/info.svg" height="40" width="40"></a>
    </div>
   </div>

   <div class="pagebar-item">
    <img src="svg/search2.svg" height="40" width="40">
   </div>

   <div class="pagebar-item">
    <img src="svg/gear1.svg" height="40" width="40">
   </div>

  </div>
 </div> 
</div>

<!--close-->
 </body>
 </html>