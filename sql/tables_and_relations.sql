CREATE TABLE salesman (
	eid VARCHAR(11) REFERENCES employee(eid),
	PRIMARY KEY(eid),
),