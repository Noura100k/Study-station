function rate()
{
    var total_rate = document.getElementsByClassName("rate");


const MIN = 1;
const MAX = 6;
// Figure out the delta, with subtraction
const DELTA = MAX - MIN;
// Get an initial random value.
// Between 0 and 0.999999 (inclusive)
const initialRandom = Math.random();
// Multiply it by our DELTA, 3.
// Will be between 0 and 2.999999 (inclusive)
const multiplied = initialRandom * DELTA;
// Round it down using Math.floor.
// Will be 0, 1, or 2.
const floored = Math.floor(multiplied);
const answer = floored + MIN;


}