import styles from './Person.module.css';
import {Button, Card} from "react-bootstrap";

const Person = ({name, age, children, increaseAgeHandler}) => {
    const classes = [styles.person];

    if (Math.random() > 0.5) classes.push(styles.grey);
    else classes.push(styles.cyan);

    return (
        <Card style={{ width: '18rem' }}>
            <Card.Body>
                <Card.Title>{name}</Card.Title>
                <Card.Subtitle className="mb-2 text-muted">Age: {age}</Card.Subtitle>
                {children && <Card.Text>{children}</Card.Text>}
                <Button onClick={increaseAgeHandler}>Increase age</Button>
            </Card.Body>
        </Card>
    );

    // return (
    //     <div className={classes.join(' ')}>
    //         <h3>{name}</h3>
    //         <p>Age: {age}</p>
    //         { children && <p>{children}</p> }
    //     </div>
    // );
};

export default Person;
