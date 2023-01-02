echo "::debug ::Debug message"
echo "::warning ::Warning message"
echo "::error ::Error message"

echo "::add-mask::$1"

echo "Hello $1"

time=$(date)
echo "::set-output name=time::$time"

echo "::group::Some expandable logs"
echo "Some stuff"
echo "Some stuff"
echo "Some stuff"
echo "::endgroup::"

echo "::set-env name=HELLO::hello"





