import Person from "./components/Person/Person";
import {Component} from "react";
import 'bootstrap/dist/css/bootstrap.min.css';

class App extends Component {
    state = {
        show: true,
        people: [
            {name: 'Dmitrii', age: 24},
            {name: 'Alex', age: 25},
            {name: 'Lea', age: 20},
        ]
    };

    addPerson = () => {
        const people = [...this.state.people];
        const person = {name: 'Luck', age: 20};
        people.push(person);
        this.setState({people});
    };

    changeName = () => {
      const people = [...this.state.people];
      const person = {...people[1]};
      person.name = 'Van Dam';
      people[1] = person;
      this.setState({people});
    };

    increaseAge = () => {
        const people = this.state.people.map(person => {
            return {
                ...person,
                age: person.age + 1
            }
        });

        this.setState({people});
    };

    increaseAgePerson = (idx) => {
        const people = [...this.state.people];
        const person = {...people[idx]};
        person.age++;
        people[idx] = person;
        this.setState({people});
    };

    people = this.state.people.map((person, idx) => {
        return <Person
            key={idx}
            name={person.name}
            age={person.age}
            increaseAgeHandler={() => this.increaseAgePerson(idx)}
        />
    });

    render() {
        return (
            <div className="App">
                <div>
                    <button onClick={this.addPerson}>Add person</button>
                    <button onClick={this.changeName}>Change name</button>
                    <button onClick={this.increaseAge}>Increase age</button>
                </div>
                {this.people}
            </div>
        );
    }
}

export default App;
