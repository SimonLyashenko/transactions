#!/bin/bash
pushd `dirname $0` > /dev/null
SCRIPTPATH=`pwd -P`
popd > /dev/null

APPLICATION_ENV="development" APPLICATION_PATH=$SCRIPTPATH /usr/bin/phpunit --bootstrap $SCRIPTPATH/test_bootstrap.php --debug -v $1