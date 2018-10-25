export const loginUser = {
    username: 'adminTest',
    password: 'marko123'
}

export const newUser = {
    name: 'newUser',
    username: 'newUser',
    password: 'password123',
    roleId: '1'
}

describe('Users test', () => {
    it('add new user', () => {
        let date = new Date();
        let timestamp = date.getTime();

        cy.visit('/login');
        cy.get('input[data-testid="username"]').type(loginUser.username);
        cy.get('input[data-testid="password"]').type(loginUser.password);
        cy.get('button[data-testid="login"]').click();
        cy.get('a[data-testid="users-link"]').click();

        var count = 0;
        cy.get('.users-list tr').then(($tr) => {
            var length = $tr.length;
            var l1 = length + 1;
            console.log(l1);
            cy.get('.add-new').click();
            cy.get('input[data-testid="new-user-name"]').type(newUser.name);
            cy.get('input[data-testid="new-user-username"]').type(`${newUser.username}_${timestamp}`);
            cy.get('input[data-testid="new-user-password"]').type(newUser.password);
            cy.get('select[data-testid="new-user-role"]').select(newUser.roleId);
            cy.get('button[data-testid="add-user"]').click();
            cy.get('.users-list tr').should('have.length', length + 1);
        });
    });

    // it('delete user', () => {
    //     let date = new Date();
    //     let timestamp = date.getTime();

    //     cy.visit('/login');
    //     cy.get('input[data-testid="username"]').type(loginUser.username);
    //     cy.get('input[data-testid="password"]').type(loginUser.password);
    //     cy.get('button[data-testid="login"]').click();
    //     cy.get('a[data-testid="users-link"]').click();

    //     // cy.get('.add-new').click();
    //     // cy.get('input[data-testid="new-user-name"]').type(newUser.name);
    //     // cy.get('input[data-testid="new-user-username"]').type(`${newUser.username}_${timestamp}`);
    //     // cy.get('input[data-testid="new-user-password"]').type(newUser.password);
    //     // cy.get('select[data-testid="new-user-role"]').select(newUser.roleId);
    //     cy.get('button[data-testid="delete-user"]').click();

    //     var count = 0;
    //     cy.get('.users-list tr').within(($tr) => {
    //         var length = $tr.length;
    //         // debugger;
    //         // console.log($tr.first().find('button[data-testid="add-user"]'));

    //         // var button = $tr.first().find('button[data-testid="add-user"]');
    //         // console.log(button);
    //         // cy.get('.add-new').click();
    //         // cy.get('input[data-testid="new-user-name"]').type(newUser.name);
    //         // cy.get('input[data-testid="new-user-username"]').type(`${newUser.username}_${timestamp}`);
    //         // cy.get('input[data-testid="new-user-password"]').type(newUser.password);
    //         // cy.get('select[data-testid="new-user-role"]').select(newUser.roleId);
    //         // cy.get('button[data-testid="add-user"]').click();
    //         // cy.get('.users-list tr').should('have.length', length+1);


    //     });
    // });
});
