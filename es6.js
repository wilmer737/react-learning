// JSX
const nav = (
  <ul>
    <li>item 1</li>
    <li>item 2</li>
  </ul>
)

/**
 * ES6
 **/
const foo = [1,2,3]
const bar = ['1', ...foo] // Spread Operator

// Arrow Function
const sum = (a = 1, b = 2) => a + b // inline function
const moreComplexFunction = ({ param, ...rest }) => {
  // do complex stuff
  return "whatever you want"
}

// Destructuring
const obj = { foo2: 5, bar3: 5 }
const { foo2, bar3 } = obj

const world = "hello world"
const [firstWord, secondWord] = world.split(' ')

const name = 'staffing nation'
let stringLiteral = `hello ${st}`