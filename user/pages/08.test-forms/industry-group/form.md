---

form:
  name: test
  fields:
    industry_group:
      type: select
      size: large
      label: Industry group:
      options:
          agriculture: Agriculture
          arts: Arts
          construction: Construction
          corporate-services: Corporate services
          education: Education
          finance-banking: Finance & banking
          goods: Goods
          government: Government
          healthcare: Healthcare
          legal: Legal
          manufacturing: Manufacturing
          media: Media
          organizations-non-profits: Organizations & non-profits
          recreation: Recreation
          services: Services
          technology: Technology
          transportation: Transportation

    industry:
      type: select
      disabled: true
      size: long
      label: Industry:
      options:
          not-active: Select industry group first

  buttons:
    submit:
      type: submit
      value: Apply filter
     
  process:
    redirect: "insights/{{ form.value.industry_group }}"

---
# Filter
