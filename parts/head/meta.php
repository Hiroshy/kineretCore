<script type="application/ld+json" class="yoast-schema-graph">
   {
      "@context":"https://schema.org",
      "@graph":[
         {
            "@type":"Organization",
            "@id":"<?= $app['url_base']; ?>/#organization",
            "name":"<?= $app['store_name']; ?>",
            "url":"<?= $app['url_base']; ?>/",
            "sameAs":[
               
            ],
            "logo":{
               "@type":"ImageObject",
               "@id":"<?= $app['url_canonical']; ?>/#logo",
               "inLanguage":"<?= $app['lenguage']; ?>",
               "url":"<?= $app['url_base']; ?>/wp-content/uploads/2019/09/inlad-sac.jpg",
               "width":500,
               "height":500,
               "caption":"<?= $app['store_name']; ?>"
            },
            "image":{
               "@id":"<?= $app['url_canonical']; ?>/#logo"
            }
         },
         {
            "@type":"WebSite",
            "@id":"<?= $app['url_canonical']; ?>/#website",
            "url":"<?= $app['url_canonical']; ?>/",
            "name":"<?= $app['business']; ?>",
            "description":"<?= $app['meta_description']; ?>",
            "publisher":{
               "@id":"<?= $app['url_canonical']; ?>/#organization"
            },
            "potentialAction":[
               {
                  "@type":"SearchAction",
                  "target":"<?= $app['url_base']; ?>/?s={search_term_string}",
                  "query-input":"required name=search_term_string"
               }
            ],
            "inLanguage":"<?= $app['lenguage']; ?>",
         },
         {
            "@type":"ImageObject",
            "@id":"<?= $app['url_canonical']; ?>/#primaryimage",
            "inLanguage":"<?= $app['lenguage']; ?>",
            "url":"<?= $app['url_base']; ?>/wp-content/uploads/2019/09/laboratorio-1.jpg",
            "width":768,
            "height":480,
            "caption":"laboratorio"
         },
         {
            "@type":"WebPage",
            "@id":"<?= $app['url_canonical']; ?>/#webpage",
            "url":"<?= $app['url_canonical']; ?>/",
            "name":"<?= $app['store_name']; ?>",
            "isPartOf":{
               "@id":"<?= $app['url_canonical']; ?>/#website"
            },
            "about":{
               "@id":"<?= $app['url_canonical']; ?>/#organization"
            },
            "primaryImageOfPage":{
               "@id":"<?= $app['url_canonical']; ?>/#primaryimage"
            },
            "datePublished":"2016-01-17T06:28:23+00:00",
            "dateModified":"2020-02-20T16:12:01+00:00",
            "description":"<?= $app['meta_description']; ?>",
            "inLanguage":"<?= $app['lenguage']; ?>",
            "potentialAction":[
               {
                  "@type":"ReadAction",
                  "target":[
                     "<?= $app['url_canonical']; ?>/"
                  ]
               }
            ]
         }
      ]
   }
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="canonical" href="<?= $app['url_canonical']; ?>">
<meta name="description" content="<?= $app['meta_description']; ?>">
<meta name="keywords" content="<?= $app['meta_keywords']; ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="robots" content="all,follow">
