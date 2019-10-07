describe('My First Test', function() {
  it('Visits the form', function() {
    cy.visit('localhost:8080')
  })
})
describe('My First Test', function() {
  it('required fields', function() {
    cy.visit('localhost:8080')





// Get an input, type into it and verify that the value has been updated
    cy.get('#email')
      .type('pedrolopes15@gmail.com')
      .should('have.value', 'pedrolopes15@gmail.com')
    cy.get('#name')
      .type('pedro')
      .should('have.value', 'pedro')
  })
})
