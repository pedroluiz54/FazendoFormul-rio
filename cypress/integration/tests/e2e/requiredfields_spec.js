describe('Testing form', function() {
  it('Visits the form', function() {
    cy.visit('localhost:8090')
  })
})
describe('Testing Required Fields', function() {
  it('Required fields', function() {
    cy.visit('localhost:8090')


// Get an input, type into it and verify that the value has been updated
    cy.get('#name')
      .type('Pedro Luiz')
      .should('have.value', 'Pedro Luiz')

    cy.get('#date')
      .type('10/02/2002')
      .should('have.value', '10/02/2002')

    cy.get('#mobile-number')
      .type('35999530')
      .should('have.value', '35999530')

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
  it('Testing if CPF is required', function() {
    cy.contains('O campo CPF é obrigatório!')
  });
  it('Testing if Email is required', function() {
    cy.contains('O campo Email é obrigatório!')
  });
})
