COMPILE_DOCS="generate-docs --overridePath ./docs/typeOverride.json --input ../src --output ./docs/generated"
COMPILE_STATIC_PAGES="generate-docs --isLandingPage --input ./docs/staticPages --output ./docs/generated"

if [ "$1" = "isTest" ];
then
COMPILE_DOCS="generate-docs --overridePath ./docs/typeOverride.json --input ../src --output ./docs/temp"
COMPILE_STATIC_PAGES="generate-docs --isLandingPage --input ./docs/staticPages --output ./docs/temp"
fi

eval $COMPILE_DOCS
eval $COMPILE_STATIC_PAGES
