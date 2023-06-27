import Paragraph from '@tiptap/extension-paragraph'

export default Paragraph.extend({
    renderHTML({ HTMLAttributes }) {
        HTMLAttributes.class = 'leading-relaxed'

        return ['p', HTMLAttributes, 0]
    }
})