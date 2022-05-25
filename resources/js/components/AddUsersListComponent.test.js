const addUser = require('./AddUsersListComponent');

test(' record should inserted with id:10, first name : test_name , last name : test_last_name ', () => {
    expect(addUser('/custom_users_save/', { id: '10', first_name: 'test_name', last_name: 'test_last_name' })).toBe("done");
});