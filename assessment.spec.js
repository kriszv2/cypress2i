import testData from "../csv.json";

describe("Runs the tests on the car sale form", () => {
  it("Does something", () => {
    cy.viewport(1400, 900);
    cy.visit(
      "http://localhost:3000/XAMPP/htdocs/Cypress/integration/form/assessment.php"
    );

    testData.forEach((element) => {
      cy.get('[data-cy="first_name"]').type(element.firstName);
      cy.get('[data-cy="last_name"]').type(element.lastName);
      cy.get('[data-cy="email"]').type(element.email);
      cy.get('[data-cy="mobile_num"]').type(element.phoneNo);
      cy.get('[data-cy="address"]').type(element.address);
      cy.get('[data-cy="password"]').type(element.password);
      cy.get('[data-cy="sale_reason"]').type("Some reason 123");
      cy.get('[data-cy="year"]').type(element.age);
      cy.get('[data-cy="mileage"]').type(element.mileage);
      cy.get("select").select("manual");
      cy.get('[data-cy="make"]').type(element.vehicle);
      cy.get('[type="checkbox"]').check();
      cy.contains("submit").click();
    });
  });
});
