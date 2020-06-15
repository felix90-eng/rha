docker run --rm --user=1000:100 \
   -v /home/svewap/ddev/t3bootstrap9/typo3conf/ext/ws_flexslider:/PROJECT:ro \
   -v /home/svewap/ddev/t3bootstrap9/typo3conf/ext/ws_flexslider/Documentation-GENERATED-temp:/RESULT t3docs/render-documentation:v2.2.6 makehtml
