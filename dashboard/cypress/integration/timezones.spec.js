export const loginUser = {
    username: 'adminTest',
    password: 'marko123'
}

export const newTimezone = {
    name: 'newtImezone',
    city: 'City',
    differenceGMT: '-1'
}

describe('Timezones test', () => {
    it('add new timezone', () => {
        let date = new Date();
        let timestamp = date.getTime();

        cy.visit('/login');
        cy.get('input[data-testid="username"]').type(loginUser.username);
        cy.get('input[data-testid="password"]').type(loginUser.password);
        cy.get('button[data-testid="login"]').click();
        cy.get('a[data-testid="timezones-link"]').click();

        var count = 0;
        cy.get('.timezones-list tr').then(($tr) => {
            var length = $tr.length;
            var l1 = length + 1;
            console.log(l1);
            cy.get('.add-new').click();
            cy.get('input[name="name"]').type(`${newTimezone.name}_${timestamp}`);
            cy.get('input[name="city"]').type(newTimezone.city);
            cy.get('input[name="differenceGMT"]').type(newTimezone.differenceGMT);

            cy.get('button[data-testid="add"]').click();
            cy.get('.timezones-list tr').should('have.length', length + 1);


        });
    });

    
});
