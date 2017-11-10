---
form:
  industry_group_folder: finance-banking
  name: test2
  fields:
    back:
      type: display
      size: large
      label: Industry group selected:
      markdown: true
      content: "**Finance & Banking** [remove](/insights)"

    industry:
      type: select
      size: long
      label: Industry:
      options:
          accounting: Accounting
          banking: Banking
          capital-markets: Capital Markets
          commercial-real-estate: Commercial Real Estate
          financial-services: Financial Services
          insurance: Insurance
          investment-banking: Investment Banking
          investment-management: Investment Management
          real-estate: Real Estate
          venture-capital-private-equity: Venture Capital & Private Equity

  buttons:
    submit:
      type: submit
      value: Apply filter
     
  process:
    redirect: "insights/{{ form.industry_group_folder }}/{{ form.value.industry }}"

---
# Filter
