export const loginUser = {
    username: 'testAdmin',
    password: 'marko123'
}

export const registerUser = {
    name:'newUser',
    username:'newUser',
    password:'password123',
    roleId:'1'
}

describe('Login Test', () => {
    it('is working', () => {
        cy.visit('/login');
        cy.get('input[data-testid="username"]').type(loginUser.username);
        cy.get('input[data-testid="password"]').type(loginUser.password);
        cy.get('button[data-testid="login"]').click();
        cy.url({ timeout: 3000 }).should('include', '/welcome');
    });
});

describe('Register Test', () => {
    it('is working', () => {
        let date = new Date();
        let timestamp = date.getTime();
        

        cy.visit('/login');
        cy.get('button[data-testid="register"]').click();
        cy.get('input[data-testid="new-user-name"]').type(registerUser.name);
        cy.get('input[data-testid="new-user-username"]').type(`${registerUser.username}_${timestamp}`);
        cy.get('input[data-testid="new-user-password"]').type(registerUser.password);
        cy.get('select[data-testid="new-user-role"]').select(registerUser.roleId);
        cy.get('button[data-testid="add-user"]').click();
        cy.url({ timeout: 3000 }).should('include', '/welcome');
    });
});