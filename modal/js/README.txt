Whenever you change the osx.js file, do the following:

yuicompressor --nomunge --preserve-semi --disable-optimizations -o osx.min.js osx.js
cat osx.min.js spin.min.js > earlyiq.min.js; rm osx.min.js

Commit and push the changed osx.js and the earlyiq.min.js

IF YOU EVER ADD a .js file that needs to be referenced by the client, compress and concatenate it (like spin.min.js) into the earlyiq.min.js file, so the client only has to include earlyiq.min.js.
