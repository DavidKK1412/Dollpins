CREATE TABLE IF NOT EXISTS AuthUser (
    id VARCHAR(36) PRIMARY KEY NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    active BOOLEAN NOT NULL DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Role (
    id SERIAL PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS UserRole (
    id VARCHAR(36) PRIMARY KEY NOT NULL UNIQUE,
    user_id VARCHAR(36) NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES AuthUser(id),
    FOREIGN KEY (role_id) REFERENCES Role(id)
);

CREATE TABLE IF NOT EXISTS RecoveryPassword (
    id VARCHAR(36) PRIMARY KEY NOT NULL,
    user_id VARCHAR(36) NOT NULL,
    token VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES AuthUser(id)
);

CREATE TABLE IF NOT EXISTS City (
    id SERIAL PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Position (
    id SERIAL PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Employee (
    id VARCHAR(36) PRIMARY KEY NOT NULL UNIQUE,
    name VARCHAR(255) NOT NULL,
    document VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address VARCHAR(255) NOT NULL,
    city_id INT NOT NULL,
    user_id VARCHAR(36) NOT NULL,
    FOREIGN KEY (city_id) REFERENCES City(id),
    FOREIGN KEY (user_id) REFERENCES AuthUser(id)
);

CREATE TABLE IF NOT EXISTS EmployeePosition (
    id VARCHAR(36) PRIMARY KEY NOT NULL UNIQUE,
    employee_id VARCHAR(36) NOT NULL,
    position_id INT NOT NULL,
    FOREIGN KEY (employee_id) REFERENCES Employee(id),
    FOREIGN KEY (position_id) REFERENCES Position(id)
);
