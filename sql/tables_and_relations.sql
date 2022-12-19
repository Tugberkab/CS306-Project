-- Remaining tables --
CREATE TABLE salesman (

	eid VARCHAR(11) REFERENCES employee(eid),
	PRIMARY KEY(eid)
)

CREATE TABLE mechanic (
	eid VARCHAR(11) REFERENCES employee(eid),
	PRIMARY KEY(eid),
)

CREATE TABLE customer (
	ssn VARCHAR(11),
	name VARCHAR(50),
	phone VARCHAR(20),
	PRIMARY KEY(ssn)
)

CREATE TABLE repairjob (
	rid VARCHAR(11),
	date DATE,
	cost INTEGER,
	PRIMARY KEY(rid)
)

CREATE TABLE car (
	cid VARCHAR(11),
	price INTEGER,
	model VARCHAR(20),
	PRIMARY KEY(cid)
)


-- Relations --
CREATE TABLE buy (
	eid VARCHAR(11),
	ssn VARCHAR(11),
	price INTEGER,
	PRIMARY KEY(eid, ssn),
	FOREIGN KEY(eid) REFERENCES salesman(eid),
	FOREIGN KEY(ssn) REFERENCES customer(ssn)
);

CREATE TABLE sell (
	eid VARCHAR(11),
	ssn VARCHAR(11),
	value INTEGER,
	PRIMARY KEY(eid, ssn),
	FOREIGN KEY(eid) REFERENCES salesman(eid),
	FOREIGN KEY(ssn) REFERENCES customer(ssn)
);

CREATE TABLE does (
	eid VARCHAR(11),
	rid VARCHAR(11),
	PRIMARY KEY(eid, rid),
	FOREIGN KEY(eid) REFERENCES mechanic(eid),
	FOREIGN KEY(rid) REFERENCES repairjob(rid)
);

CREATE TABLE repair (
	cid VARCHAR(11),
	rid VARCHAR(11),
	PRIMARY KEY(cid, rid),
	FOREIGN KEY(cid) REFERENCES car(cid),
	FOREIGN KEY(rid) REFERENCES repairjob(rid)
);