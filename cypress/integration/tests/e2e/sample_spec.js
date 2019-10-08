describe('My First Test', function() {
  it('Visits the form', function() {
    cy.visit('localhost:8080')
  })
})
describe('Test fill in fields', function() {
  it('Visits the form', function() {
    cy.visit('localhost:8080')


// Get an input, type into it and verify that the value has been updated
    cy.get('#name')
      .type('Pedro Luiz')
      .should('have.value', 'Pedro Luiz')
    cy.get('#cpf')
      .type('1543783763')
      .should('have.value', '1543783763')
    cy.get('#date')
      .type('10/02/2002')
      .should('have.value', '10/02/2002')
    cy.get('#mobile-number')
      .type('35999530')
      .should('have.value', '35999530')
    cy.get('#email')
      .type('pedrolopes15@gmail.com')
      .should('have.value', 'pedrolopes15@gmail.com')
    cy.get('#cep')
      .type('4024000')
      .should('have.value', '4024000')
    cy.get('#adress')
      .type('rua petunia')
      .should('have.value', 'rua petunia')
    cy.get('#number')
      .type('302')
      .should('have.value', '302')
    cy.get('#complement')
      .type('cx b')
      .should('have.value', 'cx b')

      cy.get('button').click()

  })
})
