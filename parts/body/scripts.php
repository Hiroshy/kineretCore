 <!-- JavaScript files-->

 <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET.html", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to Bootstrapious website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.01205608.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/varkala-clothes.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/img/shape/blob-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="/vendor/swiper/js/swiper.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- AOS - AnimationOnScroll-->
    <script src="/vendor/aos/aos.js"></script>
    <!-- Custom Scrollbar-->
    <script src="/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom-scrollbar-init.f148089f.js"></script>
    <!-- Smooth scroll-->
    <script src="/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="/vendor/object-fit-images/ofi.min.js"></script>
    <!-- JavaScript Countdown-->
    <script src="js/countdown.782bfd78.js"></script>
    <script>
      var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
      var countdown = new Countdown('countdown', deadline);
      
    </script>
    <!-- Some theme config-->
    <script>
      var options = {
          navbarExpandPx: 992
      }
      
    </script>
    <!-- Main Theme files-->
    <script src="js/sliders-init.1db6fb07.js"></script>
    <script src="js/theme.fe2c17cd.js"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/0ce30eaf4c.js" crossorigin="anonymous"></script>
    <!-- Reconocimeinto de voz-->
    <script>
      const btnStartRecording=document.getElementById('microphon');
      const btnStopRecording=document.getElementById('stop');
      const btnReadText=document.getElementById('leer');
      const textArea=document.getElementById('querySearch');

      //formulario
      const formulario=document.getElementById("searchTerm")

      let recognition=new SpeechRecognition();
          recognition.lang='es-Es';
          recognition.continuous = true;
          recognition.interimResult = false;

          recognition.onresult=(event)=>{
              const results = event.results;
              const frase = results[results.length -1 ][0].transcript
              textArea.value=frase
              recognition.stop();
          }

          recognition.onend=(event)=>{
              console.log("operación terminada");
              btnStartRecording.classList.remove("micro_active")
              btnStartRecording.setAttribute("data-original-title","Dime algo")
              url_query="/category-full-sidebar?query="+textArea.value
              location.href=url_query
          }

          recognition.onerror=(event)=>{
              console.log(event.onerror)
          }
          recognition.onnomatch = function(event) {
            leerTexto('Lo siento no me ha sido posible oirte')
        }

      btnStartRecording.addEventListener('click',()=>{
          recognition.start();
          btnStartRecording.classList.add("micro_active")
          btnStartRecording.setAttribute("data-original-title","Escuchandote ...")
      })

      btnStopRecording.addEventListener('click',()=>{
          recognition.abort();
      })

      btnReadText.addEventListener('click',()=>{
          leerTexto(textArea.value);
      })

      function leerTexto(text){
          const speech = new SpeechSynthesisUtterance();
          speech.text=text;
          speech.volume=1;
          speech.rate=1;
          speech.pitch=1;

          window.speechSynthesis.speak(speech);
      }
    </script>

<!--Gtranslate-->
<script type="text/javascript">
    function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'es',autoDisplay: false}, 'google_translate_element2');}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
    /* ]]> */
</script>

 <!--scroll animation menu-->
 <script>
    var last_known_scroll_position = 0;
    var ticking = false;

    function doSomething(scroll_pos) {
        let megamenu = document.getElementById('megamenuILD');

        if (scroll_pos>=100) {
            megamenu.classList.add('fixed-top-menu');
        }else{
            megamenu.classList.remove('fixed-top-menu');
        }
    }

    window.addEventListener('scroll', function(e) {
    last_known_scroll_position = window.scrollY;
    if (!ticking) {
        window.requestAnimationFrame(function() {
        doSomething(last_known_scroll_position);
        ticking = false;
        });
    }
    ticking = true;
    });
</script>

<!-- Catalog Hover -->
<script>
    let attr_catalog = Array.from(document.querySelectorAll('[img-catalog-hover="on"]'));
    attr_catalog.forEach(element=>{
        element.addEventListener('mouseover',(e)=>{
            let attr = element.getAttribute('img-catalog-hover-data');
            attr = attr.split(',')
            element.src=attr[1]
        })
        element.addEventListener('mouseleave',(e)=>{
            let attr = element.getAttribute('img-catalog-hover-data');
            attr = attr.split(',')
            element.src=attr[0]
        })
    })
</script>