const addUser = require('./AddUsersListComponent');

test(' record should inserted with id:10, first name : test_name , last name : test_last_name ', () => {
    expect(addUser('/custom_users_save/', { id: '10', first_name: 'test_name', last_name: 'test_last_name' })).toBe("done");
});


/*


import { shallowMount } from '@vue/test-utils'
import List from '@/components/List.vue'

describe('List.vue', () => {
  it('renders li for each item in props.items', () => {
    const items = ['1', '2']
    const wrapper = shallowMount(List, {
      propsData: { items }
    })
    expect(wrapper.findAll('li')).toHaveLength(items.length)
  })

  it('matches snapshot', () => {
    const items = ['item 1', 'item 2']
    const wrapper = shallowMount(List, {
      propsData: { items }
    })
    expect(wrapper.html()).toMatchSnapshot()
  })
})


<template>
  <ul>
    <li :key="item" v-for="item in items">
      {{ item }}
    </li>
  </ul>
</template>

<script>
export default {
  name: 'list',
  props: [
    'items'
  ]
}

</script>
*/