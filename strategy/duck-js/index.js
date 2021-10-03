#!/usr/bin/env node

class Duck {

  constructor({name, fly, quack} = {}) {
    this.fly = fly || function () { console.log('i cant fly') }
    this.quack = quack || function () { console.log('i cant quack') }
    this.name = name
  }

  quack () {this.quack()}
  fly () {this.fly()}
  swim () {console.log (`All ducks can swim:`)}

  draw() {
    console.log('-------------')
    console.log(`Im a ${this.name} duck:`)
    this.fly()
    this.quack()
    this.swim()
    console.log('-------------')
  }
}

// Gummiente - can't fly/quack
class RubberDuck extends Duck {
  constructor({fly}) {
    const quack = function () { console.log('i cant quack, but squeak!')}
    super({name: 'Common Pochard', fly, quack})
  }
  draw() {super.draw()}
}

// Moorente
class CommonPochard extends Duck {
  constructor({fly, quack}) {
    super({name: 'Common Pochard', fly, quack})
  }
  draw() { super.draw() }
}

// Strategies
function flyHigh() { console.log('i can fly so high')}
function flySlow() { console.log('i can fly, but only so slow')}
function quackLoud() { console.log('i can quack super loud')}

// Client with base class only
// ----> you have to configure your duck for every instance
const commonPochard = new Duck({name: 'Common Pochard', fly: flyHigh, quack: quackLoud})
commonPochard.draw()

const commonPochardSlow = new Duck({name: 'Common Pochard', fly: flySlow, quack: quackLoud})
commonPochardSlow.draw()

const rubberDuck = new Duck({name: 'Rubber Duck', })
rubberDuck.draw()

// Client with implemented types (ducks)
// ----> the concrete class can take over parts of the setup, e.g. the name
const commonPochard2 = new CommonPochard({fly: flyHigh, quack: quackLoud})
commonPochard2.draw()

const commonPochardSlow2 = new CommonPochard({fly: flySlow, quack: quackLoud})
commonPochardSlow2.draw()

const rubberDuck2 = new RubberDuck({name: 'Rubber Duck', })
rubberDuck2.draw()
